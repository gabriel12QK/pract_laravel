<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ventas;

class ventasP extends Controller
{
// mostrar pagina de ventas
    public function principal(){
        $v=ventas::all();
        return view('paginas.ventas', compact('v'));
    }
// agregar venta
    public function guardarVentas(Request $request){
    $venta=new ventas();
    $venta->nom_pro=$request->nom_pro;
    $venta->pre_pro=$request->pre_pro;
    $venta->cant_pro=$request->cant_pro;
    $venta->save();
    return back();
    }
//metodo para muestra una pagina de edicion buscando por el id 
    public function editPage($id){
        $ventas=ventas::find($id);
        $v=ventas::all();
        return view('paginas.ventasEdit', compact('v'), compact('ventas'));
    }
//metodo de actualizacion este se uimplemebta despues de realizar la busqueda mediante una vista aparte
    public function update(Request $request, $id){
        $venta= ventas::find($id);
        $venta->nom_pro=$request->nom_pro;
        $venta->pre_pro=$request->pre_pro;
        $venta->cant_pro=$request->cant_pro;
        $venta->save();
        return redirect('ventas');
        }
//metodo de borrar
        public function delete ($id){
            $ventas=ventas::find($id);
            $ventas->delete();
            return redirect('ventas');
        }

}
