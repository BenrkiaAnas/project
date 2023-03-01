<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employees;

use App\Models\Managers;

use DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $allocations = DB::table('managers')
        ->join('employees','managers.id','=','employees.manager_id')
        ->select('managers.firstname as manager_firstname','managers.lastname as manager_lastname', 'employees.firstname as employee_firstname', 'employees.firstname as employee_lastname')
        ->get();
        return view('dashboard')->with('allocations',$allocations);
    }
}
