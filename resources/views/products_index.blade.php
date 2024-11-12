@extends('layout.main_template')

@section('content')
<h2>Index products</h2>
<br>
<button><a href="{{route('products.create')}}">Crear producto</a></button>
<br>
<br>
<table>
    <thead>
        <th>Nombre del producto</th>
        <th>ID</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($products as $p)
            <tr>
                <td>{{$p -> name_product}}</td>
                <td>{{$p -> brand_id}}</td>
                <td>{{$p -> stock}}</td>
                <td>{{$p -> unit_price}}</td>
                <td>{{$p -> imagen}}</td>
                <td><button><a href="{{route("products.show", $p)}}">Mostrar</a></button></td>
                <td><button><a href="">Editar</a></button></td>
                <td><button><a href="">Eliminar</a></button></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection


<style>
    table th, td
    {
        padding-left: 15px;
        padding-right: 15px;
    }
</style>
