<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;
use Illuminate\Support\Str;


class equipoBD extends Controller
{
    public function guardarEquipo(Request $request){
        $Equipo = new equipo();
        $Equipo->nombre = $request->nombre;
        $Equipo->foto=$request->foto;
        if($request->hasFile("foto")){
            $imagen=$request->file("foto");
            $nomfoto= Str::slug($request->nombre).".".$imagen->guessExtension();
            $ruta=public_path("img/photo/");
            $imagen->move($ruta,$nomfoto);
            $Equipo->foto = $nomfoto;
        }   
        $Equipo->save();
        return back();

    }
}
