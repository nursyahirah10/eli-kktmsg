<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use Spatie\QueryBuilder\QueryBuilder;
use App\Address;

class ManageCompanyController extends Controller
{
    public function index(Request $request)
    {
        $companies = QueryBuilder::for(Company::class)
        ->byState($request->input('state') ?? '')
        ->get();


        return view('admin.company.index', [
            'addresses' => Address::where('addressable_type', 'App\Company')->groupBy('state')->get(),
            'companies' => $companies
        ]);
    }

    public function edit(Company $company)
    {
        return view('admin.company.edit', [
            'company' => $company
        ]);
    }

    public function update(Company $company, Request $request)
    {
        $request->validate([
            'company.name' => 'required',
            'company.email' => 'required|email',
            'address.*' => 'required',
            'company.status' => 'required|boolean'
        ]);
        
        $company->update($request->company);

        $company->address->update($request->address);

        return redirect()->route('admin.manage.company.edit', $company->id)->with('flash', 'Kemaskini Syarikat Berjaya.');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return back()->with('flash', 'Berjaya dibuang!');
    }
}
