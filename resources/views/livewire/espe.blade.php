
<div class="justify-content-center">
    <div class="col-6 " >
        <form wire:submit.prevent="guardar">
        <div class="card ">
            <div class="card-header">
                <h5 class="card-title">Tipo de Especialidad</h5>
            </div>
            <div class="card-body">         
                   <div class="mb-3">
                        <label class="form-label">Especialidad</label>
                        <input type="text" class="form-control" placeholder="" wire:model="especi">
                        @error('especi') <span class="error">{{ $message }}</span> @enderror
                   </div>
               
                   @if ($button)
                   <button type="button" class="btn btn-primary" wire:click="guardar">Guardar</button>
               @else
                   <button type="button" class="btn btn-primary" wire:click="update">Actualizar</button>
               @endif
                  
                    
        </div>
    </div>
</form>

<div class="mb-3">
    <label>Buscar</label>
    <input type="text" class="form-control" wire:model="buscar" >
</div>

@if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

    </div>
    <div class="row justify-content-center">
        <div class="col-10" >
        <div class="card">
            <div class="card-body">
     
                <table id="datatables-reponsive" class="table table-striped" style="width:75%" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Especialidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($s as $item)
                        <tr>
                            <td>
                               {{$item->id}}
                            </td>
                            <td>
                                {{$item->especialidad}}
                            </td>
                            <td class="table-action">
                                
                                <a ><i class="align-middle fas fa-fw fa-pen" wire:click="edit({{ $item->id }})" style="cursor: pointer "></i></i></a>
                                <a ><i class="align-middle fas fa-fw fa-trash " wire:click="destroyL({{$item->id}})" style="cursor: pointer "></i></i></a>
                            </td>
                        </tr>
                        @endforeach
                        {{ $s->links() }}
                    </tbody>
                </table>
    
            </div>
        </div>
        </div>
        </div>
    </div>
    