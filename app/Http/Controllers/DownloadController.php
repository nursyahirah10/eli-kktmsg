<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Auth;
use App\Company;

class DownloadController extends Controller
{
    public function jawapan()
    {
        $name = 'BORANG JAWAPAN PENEMPATAN LI KKTM SRI GADING.pdf';

        return Storage::disk('public')->download($name);
    }

    public function permohonan(Company $company)
    {
        // initiate FPDI
        $pdf = new FPDI();
        // add a page
        $pdf->AddPage();
        // set the source file
        $pdf->setSourceFile(Storage::disk('public')->path('SURAT PERMOHONAN PENEMPATAN LI KKTM SRI GADING PT RAJA.pdf'));
        // import page 1
        $tplIdx = $pdf->importPage(1);

        // use the imported page and place it at point 10,10 with a width of 100 mm
        $pdf->useTemplate($tplIdx);

        $user = Auth::user();
        $pdf = $this->setText(
            $pdf,
            170, 
            59, 
            $user
            ->registration
            ->companies
            ->first()
            ->pivot
            ->created_at
            ->format('d/m/Y')
        );

        function clean($string) {
            $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
            $string = preg_replace('/[^A-Za-z0-9\-,]/', '', $string); // Removes special chars.
         
            return str_replace('-', ' ', $string); // Replaces multiple hyphens with single one.
         }
         
        $address = $company->address;
        $pdf = $this->setText($pdf, 27, 65, $company->name);
        $pdf = $this->setText($pdf, 27, 69, ucwords(strtolower(clean($address->address))));
        $pdf = $this->setText($pdf, 27, 73, ucwords(strtolower("{$address->postcode}, {$address->city}, {$address->state}")));
        $pdf = $this->setText($pdf, 27, 77, ucwords(strtolower($address->country)));
        $pdf = $this->setText($pdf, 32, 81, $company->no_1);
        $pdf = $this->setText($pdf, 32, 85, $company->fax_1);
        $pdf = $this->setText($pdf, 52, 110, ucwords($user->name));
        $pdf = $this->setText($pdf, 52, 113, strtoupper($user->matric));
        $pdf = $this->setText($pdf, 52, 116, $user->programme);
        $pdf = $this->setText($pdf, 52, 119, '6 BULAN');

        return $pdf->Output();
    }

    public function setText($pdf, $x, $y, $text)
    {
        $pdf->SetFont('Arial');
        $pdf->SetFontSize(8);
        $pdf->SetTextColor(0, 0, 0);
        // now write some text above the imported page
        $pdf->SetXY($x, $y); // position of text1, numerical, of course, not x1 and y1
        $pdf->Write(0, $text);

        return $pdf;
    }
}
