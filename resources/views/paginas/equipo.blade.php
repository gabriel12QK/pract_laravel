@extends('layaouts.app')
@section('header-title')
Bienvenidos a la pagina de persona
@endsection
@section('content')
<center>
<div class="col-6" >
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Basic form</h5>
        </div>
        <div class="card-body">
            <form  method="POST" action="{{url('equipo/post')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="" name="nombre">
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" class="form-control" placeholder="" name="foto" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</center>
@endsection