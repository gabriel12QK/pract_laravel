<div class="row">
    

    <form wire:submit.prevent="guardar">
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
                            <select class="form-control select2" data-bs-toggle="select2" wire:model="id_tipo" style="cursor: pointer ">
                                <option>Select...</option>
                                @foreach ($t as $item)
                                   <option value="{{$item->id}}">{{$item->tipo}}</option>
                               @endforeach       
                                                
                            </select>
                            @error('id_tipo') <span class="error">{{ $message }}</span> @enderror 
                        </div>
                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" class="form-control" wire:model="nom" >
                            @error('nom') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Apellido</label>
                            <input type="text" class="form-control" wire:model="ape" >
                            @error('ape') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label>Telefono</label>
                            <input type="text" class="form-control" wire:model="telf">
                            @error('telf') <span class="error">{{ $message }}</span> @enderror
                        </div>  
                        @if ($button)
                        <button type="button" class="btn btn-primary" wire:click="guardar">Guardar</button>
                    @else
                        <button type="button" class="btn btn-primary" wire:click="update">Actualizar</button>
                    @endif
                                        
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label>Especialidad</label>
                            <select class="form-control select2" data-bs-toggle="select2" wire:model="id_especialidad" style="cursor: pointer ">
                                <option>Select...</option>
                                @foreach ($s as $item2)
                                   <option value="{{$item2->id}}">{{$item2->especialidad}}</option>
                               @endforeach 
                                                      
                            </select>
                            @error('id_especialidad') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Cedula</label>
                            <input type="text" class="form-control" wire:model="CI">
                            @error('CI') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Direccion</label>
                            <input type="text" class="form-control" wire:model="dir">      
                            @error('dir') <span class="error">{{ $message }}</span> @enderror                    
                        </div>
                    </div>
                   
                </div>
              
            </div>
        </div>
    </div>
    
    <div class="mb-3">
        <label>Buscar</label>
        <input type="text" class="form-control" wire:model="buscar" >
    </div>

    </form>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    

    <div class="row justify-content-center">
        <div class="col-12" >
        <div class="card">
            <div class="card-body">
     
                <table id="datatables-reponsive" class="table table-striped" style="width:100%" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cedula</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Tipo</th>
                            <th>Especialidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p as $item)
                        <tr>
                            <td>
                               {{$item->id}}
                            </td>
                            <td>
                                {{$item->nom}}
                            </td>
                            <td>
                                {{$item->ape}}
                            </td>
                            <td>
                                {{$item->CI}}
                            </td>
                            <td>
                                {{$item->dir}}
                            </td>
                            <td>
                                {{$item->telf}}
                            </td>

                            @foreach ($t as $tipos)
                            @if ($tipos->id == $item->id_tipo)
                            <td>
                                {{$tipos->tipo}}
                            </td>
                            @endif
                            @endforeach

                            @foreach ($s as $espe)
                            @if ($espe->id == $item->id_especialidad)
                            <td>
                                {{$espe->especialidad}}
                            </td>
                            @endif
                            @endforeach
                            

                            <td class="table-action">
                                
                                <a ><i class="align-middle fas fa-fw fa-pen" wire:click="edit({{ $item->id }})" style="cursor: pointer "></i></i></a>
                                <a ><i class="align-middle fas fa-fw fa-trash " wire:click="destroyL({{$item->id}})" style="cursor: pointer "></i></i></a>
                            </td>
                        </tr>
                        @endforeach
                        {{ $p->links() }}
                    </tbody>
                </table>
    
            </div>
        </div>
        </div>
        </div>
</div>
