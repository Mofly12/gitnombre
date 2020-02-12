@extends('layouts.default')
@section('content')
<form action="AgregarPedido" method="POST">
    @csrf
    <img src="img/{{$producto->path_img}}"/>
    <br/>
    <p>{{$producto->name}}</p>
    <p>{{$producto->price}}€</p>
    <input type="number" hidden name="id" value="{{$producto->product_id}}"/>
    <input type="number"  name="cantidad"/>
    <input type="submit" value="Modificar" name="modificar" />
    <input type="submit" value="Agregar"/>

</form>

@endsection
