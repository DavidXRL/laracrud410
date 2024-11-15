@extends('layout.main_template')

@section('content')

@include('fragments.formstyle')

<h1>Editar Marcas</h1>


<form action="{{route('brands.update', $brand->id)}}" method="post">
    @csrf
    @method('PUT')
    <label for="">Nombre de la marca:</label>
    <input type="text" name="brand"  value="{{$brand->brand}}">

    <br>
    <br>

    <label for="">Descripcion: </label>
    <input type="text" name="description"  value="{{$brand->brand}}">

    <br>
    <br>
    <button type="submit">Registrar</button>
</form>
@endsection
