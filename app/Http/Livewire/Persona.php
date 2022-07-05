<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DatosPersona;
use App\Models\tipo;
use App\Models\especialidad;
class Persona extends Component
{
    public $persona,$_id;
    public function render()
    {
        $s=especialidad::where('estado',1)->get();
        $t=tipo::where('estado',1)->get();
        $p=DatosPersona::where('estado',1)->get();
    return view('livewire.persona', compact('p','t'), compact('s'),/* compact('t')*/ );
    }
     
    public function guardar(){
        // $persona= new DatosPersona();
        // $persona->nom=$this->nom;
        // $persona->ape=$this->ape;
        // $persona->CI=$this->CI;
        // $persona->dir=$this->dir;
        // $persona->telf=$this->telf;
        // $persona->id_tipo=$this->id_tipo;
        // $persona->id_especialidad=$this->id_especialidad;
        // $persona->estado=1;
        DatosPersona::create([
            'nom' => $this->nom,
            'ape' => $this->ape,
            'CI' => $this->CI,
            'dir' => $this->dir,
            'telf' => $this->telf,
            'estado' => 1,
            'id_tipo' => $this->id_tipo,
            'id_especialidad' => $this->id_especialidad,
            
        ]);
        $this->reset();
    }

    public function edit($id){
        $persona= DatosPersona::find($id);
        $this->_id = $id;
       // $this->tipos=$tipos->tipo;//mostrar el dato al realizar la busqueda primero ubicamos el nombre del cuadro de texto luego la variable y por ultimo el nombre de la columna
    }

    public function update(){
        $persona =DatosPersona::find( $this->_id);
        $persona->update([
            'nom' => $this->nom,
            'ape' => $this->ape,
            'CI' => $this->CI,
            'dir' => $this->dir,
            'telf' => $this->telf,
            'estado' => 1,
            'id_tipo' => $this->id_tipo,
            'id_especialidad' => $this->id_especialidad,
        ]);
        $this->reset();
    }

    public function destroyL($id){
        
        $persona = DatosPersona::find($id);
        $persona->update([
            'estado' => 0
        ]);
        $this->reset();
    }
}
