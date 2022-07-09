<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DatosPersona;
use App\Models\tipo;
use App\Models\especialidad;
use Livewire\WithPagination;
class Persona extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['buscar'];

    public $persona,$_id;
    public $nom,$ape,$CI, $dir,$telf,$id_tipo, $id_especialidad;
    public $button = true;
    public $buscar;

    protected $rules = [
        'nom' => 'required',
        'ape' => 'required',
        'CI' => 'required|min:10|numeric',
        'telf' => 'required|min:10',
        'dir' => 'required',
        'id_tipo' => 'required',
        'id_especialidad' => 'required',
    ];

    protected $messages = [
        'nom.required' => 'campo requerido',
        'ape.required' => 'campo requerido',
        'CI.required' => 'campo requerido',
        'CI.min' => 'minimo 10 caracteres',
        'CI.numeric' => 'solo se permiten numeros',
        'telf.required' => 'campo requerido',
        'telf.min' => 'minimo 10 caracteres',
        'dir.required' => 'campo requerido',
        'id_tipo.required' => 'campo requerido',
        'id_especialidad.required' => 'campo requerido',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $s=especialidad::where('estado',1)->get();
        $t=tipo::where('estado',1)->get();
        $p=DatosPersona::where( 'nom', 'like', '%'.$this->buscar.'%')-> where('estado',1)->paginate(5);
    return view('livewire.persona', compact('p','t','s')/* compact('t')*/ );
    }
     
    public function guardar(){
        $this->validate();
        DatosPersona ::create([
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
        session()->flash('message', 'registro guardado con exito.');
    }

    public function edit($id){
        $persona= DatosPersona::find($id);
        $this->_id = $id;
        $this->nom=$persona->nom;
        $this->ape=$persona->ape;
        $this->CI=$persona->CI;
        $this->dir=$persona->dir;
        $this->telf=$persona->telf;
        $this->id_tipo=$persona->id_tipo;
        $this->id_especialidad=$persona->id_especialidad;
        $this->button = false;
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
