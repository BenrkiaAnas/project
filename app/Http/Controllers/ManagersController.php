<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Managers;


class ManagersController extends Controller
{
    //

    public function list()
    {
        $managers = Managers::all();
        return view('managers.list')->with('managers',$managers);
    }

    public function create()
    {
        return view('managers.create');
    }

    public function store(Request $request)
    {
        $manager = new Managers();
        $manager->firstname = $request->firstname;
        $manager->lastname = $request->lastname;
        $manager->age = $request->age;
        $manager->save();
        return redirect('/managers');

    }

    public function edit($id)
    {
        $manager = Managers::find($id);
        return view('managers.edit')->with('manager',$manager);
    }

    public function update(Request $request,$id)
    {
        $manager = Managers::find($id);
        $manager->firstname = $request->firstname;
        $manager->lastname = $request->lastname;
        $manager->age = $request->age;
        $manager->save();
        return redirect('/managers');

    }

}
