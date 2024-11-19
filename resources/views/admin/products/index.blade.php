@extends('layout.main_template')

@section('content')
<center>
<h2>Index products</h2>
<br>
<button><a href="{{route('products.create')}}">Crear Producto</a></button>
<button><a href="{{route('brands.create')}}">Crear Marca</a></button>
<button><a href="{{route('brands.index')}}">Ver Marcas</a></button>
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
                <td><button><a href="{{route("products.show", $p)}}">Mostrar</a></button>
                <button><a href="{{route("products.edit", $p)}}">Editar</a></button>
                <button><a href="{{route("products.delete", $p)}}">Eliminar</a></button>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
</center>
@endsection


<style>

    table th, td
    {
        padding-left: 15px;
        padding-right: 15px;
        border: 2px;
    }

    button
    {
        text-decoration: none;
        border: none;
        padding: 20px;2
        margin: 10px;
    }

    a
    {
        text-decoration: none;
        color: black;
    }
</style>



