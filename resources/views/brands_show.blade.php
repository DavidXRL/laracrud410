@extends('layout.main_template')

@section('content')

<h1>Detalles de la marca</h1>
<h3>ID: {{$brand->id}}</h3>
<h3>Marca: {{$brand->brand}}</h3>
<h3>Descripción: {{$brand->description}}</h3>

{{-- TO DO SHOW IMAGE --}}
@endsection
