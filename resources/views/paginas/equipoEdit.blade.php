@extends('layaouts.app')
@section('header-title')
Bienvenidos a la editar equipo
@endsection
@section('content')
<center>
<div class="col-6" >
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Formulario de edicion</h5>
        </div>
        <div class="card-body">
            <form  method="POST" action="{{url('equipo-update'. $equipo->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="" name="nombre">
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" class="form-control" placeholder="" name="foto" accept="image/*" >
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
</center>

@endsection