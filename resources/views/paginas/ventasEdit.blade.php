@extends('layaouts.app')
@section('header-title')
Bienvenidos a la editar ventas
@endsection
@section('content')
<center>
<div class="col-6" >
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Formulario de edicion</h5>
        </div>
        <div class="card-body">
            <form  method="POST" action="{{url('ventas-update'. $ventas->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Producto</label>
                    <input type="text" class="form-control" placeholder="" name="nom_pro">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cantidad</label>
                    <input type="text" class="form-control" placeholder="" name="cant_pro"  >
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="text" class="form-control" placeholder="" name="pre_pro"  >
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
</center>

@endsection