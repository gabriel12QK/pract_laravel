<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;
use Illuminate\Support\Str;

class equipoP extends Controller
{
    public function index(){
        //return view('paginas.equipo');
        $e=equipo::all();
        return view('paginas.equipo', compact('e'));
    }
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
    public function editequipo($id){
        $equipo=equipo::find($id);
    }
}
