<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menu extends Controller
{
    public function showT()
    {
       
       return view('paginas.tipos');
    }
    public function showE()
    {
       
      return view('paginas.especialidad');
    }
    public function showP()
    {
       
      return view('paginas.person');
    }
}
