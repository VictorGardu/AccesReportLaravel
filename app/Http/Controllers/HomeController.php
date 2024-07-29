<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function inicio(){
        return view('inicio');
    }
    public function register(){
        return view('registro');
    }
}
