
<div class="justify-content-center">
<div class="col-6 " >
    <div class="card ">
        <div class="card-header">
            <h5 class="card-title">Tipo de Usuario</h5>
        </div>
        <div class="card-body">         
               <div class="mb-3">
                    <label class="form-label">Tipo</label>
                    <input type="text" class="form-control" placeholder="" wire:model="tipos">
               </div>
           
               <button type="button" class="btn btn-primary" wire:click="guardar">guardar</button>
              
               <button type="button" class="btn btn-primary" wire:click="update">actualizar</button>
              
                
    </div>
</div>
</div>
<div class="row justify-content-center">
    <div class="col-10" >
    <div class="card">
        <div class="card-body">
 
            <table id="datatables-reponsive" class="table table-striped" style="width:75%" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($t as $item)
                    <tr>
                        <td>
                           {{$item->id}}
                        </td>
                        <td>
                            {{$item->tipo}}
                        </td>
                        <td class="table-action">
                            
                            <a ><i class="align-middle fas fa-fw fa-pen" wire:click="edit({{ $item->id }})" style="cursor: pointer "></i></i></a>
                            <a ><i class="align-middle fas fa-fw fa-trash " wire:click="destroyL({{$item->id}})" style="cursor: pointer "></i></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    </div>
    </div>
</div>
