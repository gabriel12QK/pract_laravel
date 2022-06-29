@extends('layaouts.app')
@section('header-title')
Bienvenidos a la pagina de ventas
@endsection
@section('content')
<center>
<div class="col-6" >
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Form Ventas</h5>
        </div>
        <div class="card-body">
            <form  method="POST" action="{{url('ventas/post')}}" >
                @csrf
                <div class="mb-3">
                    <label class="form-label">Producto</label>
                    <input type="text" class="form-control" placeholder="" name="nom_pro">
                </div>
                <div class="mb-3">
                    <label class="form-label">cantidad</label>
                    <input type="text" class="form-control" placeholder="" name="cant_pro" >
                </div>
                <div class="mb-3">
                    <label class="form-label">precio</label>
                    <input type="text" class="form-control" placeholder="" name="pre_pro" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10" >
    <div class="card">
        <div class="card-body">
     <center>
            <table id="datatables-reponsive" class="table table-striped" style="width:75%" >
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($v as $item)
                    <tr>
                        <td>
                           {{$item->nom_pro}}
                        </td>
                        <td>
                            {{$item->cant_pro}}
                        </td>
                        <td>
                            {{$item->pre_pro}}
                        </td>
                        <td class="table-action">
                            
                            <a href="{{url('ventas-edit'.$item->id)}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                            <form  method="POST" action="{{url('ventas-delete'.$item->id)}}">
                                @csrf
                                @method('delete')
                                <input type="submit" class="align-middle fas fa-fw fa-trash " value="eliminar">
                        </form>
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