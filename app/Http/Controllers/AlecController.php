<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlecController extends Controller
{
    public function alec(){
        $var = 21;
        return view('alec', [
            'var' => $var
        ]);
    }
}
