<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function index(){
        $name = "thierno";
        $age = 31;

        $tab = array('name' => "thierno", 'age' => 45);
        return view('myview', $tab);

    }
}
