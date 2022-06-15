<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class equipoP extends Controller
{
    public function index(){
        return view('paginas.equipo');
    }
}
