@extends('layout.main_template')

@section('content')

@include('fragments.formstyle')

<h1>Create de productos</h1>


<form action="{{route('products.store')}}" method="post">
    @csrf
    <label for="">Nombre del producto</label>
    <input type="text" name="name_product">

    <br>
    <br>

    <label for="">Marca</label>
    <select name="brand_id">
        <option value="">Selecciona...</option>
        @foreach ( $brands as  $brand => $id)
        <option value="{{$id}}">{{$brand}}</option>
        @endforeach
    </select>

    <br>
    <br>

    <label for="">Cantidad</label>
    <input type="number" name="nameProduct">

    <br>
    <br>

    <label for="">Precio unitario</label>
    <input type="text" name="unit_price">

    <br>
    <br>

    <label for="">Imagen</label>
    <input type="file" name="imagen">

    <button type="submit">Registrar</button>
</form>
@endsection
