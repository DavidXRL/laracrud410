@extends('layout.main_template')

@section('content')

@include('fragments.formstyle')

<h1>Create de marcas</h1>


<form action="{{route('brands.store')}}" method="post">
    @csrf
    <label for="">Nombre de la marca</label>
    <input type="text" name="brand">

    <br>
    <br>
    <label for="">Descripción:</label>
    <input type="text" name="description">
    <button type="submit">Registrar</button>
</form>
@endsection
