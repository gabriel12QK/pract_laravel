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
            <form>
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cedula</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</center>
@endsection