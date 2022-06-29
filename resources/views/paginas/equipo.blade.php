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
                    <input type="file" class="form-control" placeholder="" name="foto" accept="image/*" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</center>
<div class="row justify-content-center">
<div class="col-10" >
<div class="card">
    <div class="card-body">
 <center>
        <table id="datatables-reponsive" class="table table-striped" style="width:75%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($e as $item)
                <tr>
                    <td>
                       {{$item->nombre}}
                    </td>
                    <td>
                        {{$item->foto}}
                    </td>
                    <td class="table-action">
                        <a href="{{url('equipoedit'.$item->id)}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                        <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
          
            </tbody>
        </table>
    </center>
    </div>
</div>
</div>
</div>
@endsection