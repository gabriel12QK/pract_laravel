<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Registro de Personas</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label>Tipos</label>
                            <select class="form-control select2" data-bs-toggle="select2" wire:model="id_tipo">
                               @foreach ($t as $item)
                                   <option>{{$item->tipo}}</option>
                               @endforeach                         
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" class="form-control" wire:model="nom" >
                        </div>
                        <div class="mb-3">
                            <label>Apellido</label>
                            <input type="text" class="form-control" wire:model="ape" >
                        </div>
                        
                        <div class="mb-3">
                            <label>Telefono</label>
                            <input type="text" class="form-control" wire:model="telf">
                        </div>  
                        <button type="button" class="btn btn-primary" wire:click="guardar">guardar</button>                   
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label>Especialidad</label>
                            <select class="form-control select2" data-bs-toggle="select2" wire:model="id_espe">
                               @foreach ($s as $item2)
                                   <option>{{$item2->especialidad}}</option>
                               @endforeach                         
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Cedula</label>
                            <input type="text" class="form-control" wire:model="CI">
                        </div>
                        <div class="mb-3">
                            <label>Direccion</label>
                            <input type="text" class="form-control" wire:model="dir">                          
                        </div>
                    </div>
                       
                </div>
            </div>
        </div>
    </div>
     
</div>
