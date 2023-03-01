<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employees;

use App\Models\Managers;

class EmployeesController extends Controller
{
    //

    
    public function list()
    {
        $employees = Employees::all();
        return view('employees.list')->with('employees',$employees);
    }

    public function create()
    {
        $managers = Managers::all();
        return view('employees.create')->with('managers',$managers);
    }

    public function store(Request $request)
    {
        $employee = new Employees();
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->seniority = $request->seniority;
        $employee->manager_id = $request->manager;
        $employee->save();
        return redirect('/employees');

    }

    public function edit($id)
    {
        $managers = Managers::all();
        $employee = Employees::find($id);
        return view('employees.edit')->with('employee',$employee)->with('managers',$managers);
    }

    public function update(Request $request,$id)
    {
        $employee = Employees::find($id);
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->seniority = $request->seniority;
        $employee->manager_id = $request->manager;
        $employee->save();
        return redirect('/employees');

    }
}
