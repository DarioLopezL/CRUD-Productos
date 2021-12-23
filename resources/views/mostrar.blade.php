@extends('plantilla.Pmostrar')

@section('Titulo')

@section('Contenido')
<header>
    <nav>
        <ul>
            <li><a href="{{route('crud')}}">Inicio</a></li>
            <li><a href="{{route('crud.create')}}">Crear Producto</a></li>
            <li><a href="{{route('crud.mostrar')}}">Productos</a></li>
        </ul>
    </nav>
    <h1>Productos Disponibles</h1>
</header>
<ul class="mostrar">
    @foreach ($productos as $producto)
        <li class="listado"><a href="{{route('crud.unico',$producto->id)}}" class="enlaces">{{$producto->name}}</a></li>
        
    @endforeach
</ul>

