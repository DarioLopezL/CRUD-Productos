@extends('plantilla.Pcrear')

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
</header>
<div class="contenedor">
<h1>Editar Producto {{$productos->name}}</h1>

<br><br>
<form action="{{route('crud.update',$productos)}}" method="post" >
@csrf
@method('PUT');
<label for="">Nombre del Producto: </label>
<br>
<input type="text" name="name">
<br> <br>
<label for="">Tipo de Producto: </label>
<br>
<input type="text" name="tipo">
<br><br>
<label for="">Descripción del Producto:</label>
<br>
<input type="text" name="descripcion">
    <br><br>
    <button>Guardar cambios</button>
</form>
</div>
@endsection