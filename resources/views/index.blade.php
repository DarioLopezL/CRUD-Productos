@extends('plantilla.Pindex')

@section('Titulo')

@section('Contenido')
<header>
    <nav>
        <ul>
            <li><a href="{{route('crud.create')}}">Crear Producto</a></li>
            <li><a href="{{route('crud.mostrar')}}">Productos</a></li>
        </ul>
    </nav>
    <h1>Bienvenido a la pagina principal del proyecto </h1>
</header>
@endsection