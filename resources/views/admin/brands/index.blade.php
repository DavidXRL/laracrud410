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
        <th>ID</th>
        <th>MARCA</th>
        <th>DESCRIPCIÓN</th>
        <th>ACCIONES</th>
    </thead>
    <tbody>
        @foreach ($brands as $b)
            <tr>
                <td>{{$b ->id}}</td>
                <td>{{$b ->brand}}</td>
                <td>{{$b ->description}}</td>
                <td><button><a href="{{route("brands.show", $b)}}">Mostrar</a></button>
                    <button><a href="{{route("brands.edit", $b)}}">Editar</a></button>
                    <form action="{{route("brands.destroy", $b)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Eliminar</button>
                    </form>
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
        border: black 2px solid;
        text-align: center;
    }

    th
    {
        padding: 20px;
    }
    button
    {
        text-decoration: none;

        padding: 10px;
        margin: 10px;
        border-radius: 15px;
    }

    a
    {
        text-decoration: none;
        color: black;
    }
</style>




