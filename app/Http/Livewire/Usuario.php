<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\tipo;
class Usuario extends Component
{
    public $tipos;
    public function render()
    {
        return view('livewire.usuario');
    }
     
    public function guardar(){
        $tipos= new tipo();
        $tipos->tipo=$this->tipos;
        $tipos->estado=1;
        $tipos->save();
    }

}
