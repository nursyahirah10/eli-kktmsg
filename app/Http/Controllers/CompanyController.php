<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Address;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company');
    }

    public function chooseCompany(Request $request)
    {
        $addresses = Address::where('addressable_type', Company::class)->groupBy('state')->get();

        $companies = collect([]);

        if ($request->state || $request->city) {
            $companies = Company::whereHas('address', function ($query) use ($request) {

                if (! $request->city)
                    $query->where('state', $request->state);
                else 
                    $query->where('city', $request->city)->where('state', $request->state);
                    
            })->get();
        }

        return view('company.choose', [
            'addresses' => $addresses,
            'companies' => $companies
        ]);
    }

    public function choose(Request $request)
    {
        return redirect()->route('company')->with('', 'Syarikat berjaya ditambah.');
    }

    public function registerCompany()
    {
        return view('company.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company.name' => 'required',
            'company.email' => 'required|email',
            'address.*' => 'required',
            'company.status' => 'required|in:true,false'
        ]);

        $company = Company::create($request->company);

        $company->address()->create($request->address);

        return redirect()->route('company.choose')->with('flash', 'Penambahan Syarikat Berjaya.');
    }

    public function assign(Request $request)
    {
        $request->validate([
            'company_id' => 'required|exists:companies,id'
        ]);

        $user = Auth::user();
        $registration = $user->registration;

        $currentQuota = (int) $registration->quota;
        $totalRegisteredCompany = $registration->companies->count();

        if ($totalRegisteredCompany >= $currentQuota) {
            return back()->with('flashDanger', 'Anda hanya boleh memilih '. $currentQuota .' syarikat LI sahaja.');
        }

        $user->registration->companies()->attach($request->company_id);

        return redirect()->route('company')->withFlash('Tahniah, syarikat berjaya dipilih.');
    }
}
