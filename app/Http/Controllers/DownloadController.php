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
        $pdf->setSourceFile(Storage::disk('public')->path('SURAT PERMOHONAN PENEMPATAN LI KKTM SRI GADING.pdf'));
        // import page 1
        $tplIdx = $pdf->importPage(1);

        // use the imported page and place it at point 10,10 with a width of 100 mm
        $pdf->useTemplate($tplIdx);

        $user = Auth::user();
        $pdf = $this->setText(
            $pdf,
            150, 
            46, 
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
        $registrations = $user;
        $pdf = $this->setText($pdf, 20, 53, $company->name);
        $pdf = $this->setText($pdf, 20, 60, ucwords(strtolower(clean($address->address))));
        $pdf = $this->setText($pdf, 20, 70, ucwords(strtolower("{$address->postcode}, {$address->city}, {$address->state}")));
        $pdf = $this->setText($pdf, 20, 77, ucwords(strtolower($address->country)));
        $pdf = $this->setText($pdf, 30, 143, ucwords($user->name));
        $pdf = $this->setText($pdf, 30, 146, strtoupper($user->matric));
        $pdf = $this->setText($pdf, 126, 143, $user->programme);
        $pdf = $this->setText($pdf, 90, 143, $user->ic);
        $pdf = $this->setText($pdf, 45, 103, $user->registration->session);
        $pdf = $this->setText($pdf, 70, 124, $user->registration->start_at->format('d/m/Y'));
        $pdf = $this->setText($pdf, 105, 124, $user->registration->end_at->format('d/m/Y'));
        $pdf = $this->setText($pdf, 20, 143, '1');


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
