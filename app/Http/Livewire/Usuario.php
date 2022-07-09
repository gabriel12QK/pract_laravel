<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\tipo;
use Livewire\WithPagination;
class Usuario extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['buscar'];

    public $tipo,$_id;
    public $button = true;
    public $buscar;

    protected $rules = [
        'tipo' => 'required',
    ];

    protected $messages = [
        'tipo.required' => 'campo requerido',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        $t=tipo::where( 'tipo', 'like', '%'.$this->buscar.'%' )-> where('estado',1)->paginate(5);
        return view('livewire.usuario', compact('t'));
    }
     
    public function guardar(){
        $this->validate();
      tipo::create([
        'tipo' => $this->tipo,
        'estado'=>1,
    ]);
    $this->reset();
    session()->flash('message', 'registro guardado con exito.');
    }

    public function edit($id){
        $tipo= tipo::find($id);
        $this->_id = $id;
        $this->tipo=$tipo->tipo;//mostrar el dato al realizar la busqueda primero ubicamos el nombre del cuadro de texto luego la variable y por ultimo el nombre de la columna
        $this->button = false;
    }

    public function update(){
        $tipo =tipo::find( $this->_id);
        $tipo->update([
            'tipo' => $this->tipo
        ]);
        $this->reset();
    }

    public function destroyL($id){
        
        $tipo = tipo::find($id);
        $tipo->update([
            'estado' => 0
        ]);
        $this->reset();
    }
}
