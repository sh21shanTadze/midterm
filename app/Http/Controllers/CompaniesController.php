<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Empoloyee;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index(){

        $companies = Company::all();
        $employee = Empoloyee::all();
        return view('data')->with(['companies' => $companies, 'employee' => $employee]);
    }
    public function create(Request $request){
        $comp = new Company();
        $comp->create($request->except("_token"));
        return redirect()->route('comp');

    }
    public function edit(Company $company){
        return view('company_edit')->with('company', $company);
    }
    public function update(Company $company, Request $request){
        $company->update($request->except("_token"));
        return redirect()->route('comp');
    }
    public function delete(Company $company){
        $company->destroy($company->id);
        return redirect()->route('comp');
    }
}
