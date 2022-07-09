<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\especialidad;
use Livewire\WithPagination;
class Espe extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['buscar'];


    public $especi,$_id;
    public $button = true;
    public $buscar;

    protected $rules = [
        'especi' => 'required',
    ];

    protected $messages = [
        'especi.required' => 'campo requerido',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }



    public function render()
    {
        $s=especialidad::where('especialidad', 'like', '%'.$this->buscar.'%')-> where('estado',1)->paginate(5);
        return view('livewire.espe', compact('s'));
    }
     
    public function guardar(){
        $this->validate();
        especialidad::create([
            'especialidad' => $this->especi,
            'estado'=>1,
        ]);
        $this->reset();
        session()->flash('message', 'registro guardado con exito.');
    }

    public function edit($id){
        $especi= especialidad::find($id);
        $this->_id = $id;
        $this->especi=$especi->especialidad;//mostrar el dato al realizar la busqueda primero ubicamos el nombre del cuadro de texto luego la variable y por ultimo el nombre de la columna
        $this->button = false;
    }

    public function update(){
        $especi =especialidad::find( $this->_id);
        $especi->update([
            'especialidad' => $this->especi
        ]);
        $this->reset();
    }

    public function destroyL($id){
        
        $especi = especialidad::find($id);
        $especi->update([
            'estado' => 0
        ]);
        $this->reset();
    }
}
