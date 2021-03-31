<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;

class IndexController extends Controller
{
    public function index(){
        $thiago = new Institution;
        $thiago->name = 'Universidade of Sao Paulo';
        $thiago->save();

        #$alec = '';

        return view('index', [
          'institutions' => Institution::all(),
        ]);
    }
}
