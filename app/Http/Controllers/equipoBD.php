<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;
use Illuminate\Support\Str;


class equipoBD extends Controller
{
    
    public function index($id){
        $equipo=equipo::find($id);
        $e=equipo::all();
        return view('paginas.equipoEdit', compact('e'),compact('equipo'));
    }
    public function update(Request $request, $id){
        $equipo=equipo::find($id);
        $equipo->nombre = $request->nombre;
        $equipo->foto=$request->foto;
        if($request->hasFile("foto")){
            $imagen=$request->file("foto");
            $nomfoto= Str::slug($request->nombre).".".$imagen->guessExtension();
            $ruta=public_path("img/photo/");
            $imagen->move($ruta,$nomfoto);
            $equipo->foto = $nomfoto;
        }   
        $equipo->save();
        return redirect('equipo');
    }
    
}
