<?php

namespace App\Http\Controllers;

use App\Models\Empoloyee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function create(Request $request){
        $emp = new Empoloyee ();
        $emp->create($request->except("_token"));
        return redirect()->route('comp');

    }
    public function edit(Empoloyee $employee){
        return view('employee_edit')->with('employee', $employee);
    }
    public function update(Empoloyee $employee, Request $request){
        $employee->update($request->except("_token"));
        return redirect()->route('comp');
    }
    public function delete(Empoloyee $employee){
        $employee->destroy($employee->id);
        return redirect()->route('comp');
    }
}
