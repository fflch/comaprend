<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;

class InstitutionController extends Controller
{
    public function index(){
        # how to get all instutituins form database ?
        $institutions = Institution::all();
        return view('institutions.index',[
            'institutions' => $institutions,
        ]);
    }

    # we do not have institutions created yet? so, we can create a form to create ones? 

    public function create(){
        # FOLDER.FILE-NAME: instutions.create means instutions/create.blade.php
        return view('institutions.create'); # means instutions/create.blade.php
    }

    # method to receive the data
    public function store(Request $request){
        $institution = new Institution;

        $institution->initials = $request->initials;
        $institution->name = $request->name;
        $institution->country = $request->country;
        $institution->save(); # now the data is in database

        return redirect('/institutions');
    }

    public function edit(Institution $institution){
        return view('institutions.edit',[
            'institution' => $institution
        ]);
    }

    public function update(Request $request, Institution $institution){

        $institution->initials = $request->initials;
        $institution->name = $request->name;
        $institution->country = $request->country;
        $institution->save(); # now the data is in database

        return redirect('/institutions');
    }

    public function destroy(Institution $institution){
        $institution->delete();
        return redirect('/institutions');
    }

}
