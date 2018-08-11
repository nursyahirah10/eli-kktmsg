<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company');
    }

    public function chooseCompany()
    {
        return view('company.choose', [
            'companies' => Company::with(['address'])->get()
        ]);
    }

    public function choose(Request $request)
    {
        return redirect()->route('company')->with('', 'Company berjaya ditambah.');
    }

    public function registerCompany()
    {
        return view('company.register');
    }

    public function store(Request $request)
    {
        $company = Company::create($request->company);

        $company->address()->create($request->address);

        return redirect()->route('company.choose')->with('flash', 'Penambahan Syarikat Berjaya.');
    }
}
