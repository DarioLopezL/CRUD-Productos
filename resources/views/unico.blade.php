@extends('plantilla.Punico')

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
    <h1>Bienvenido </h1>
    </header>
    
    <div class="contenedor">
        <h2 class="titulo_camis">Nombre del producto: {{$productos->name}}</h2>
    <br><br>
        <div class="contenedor1">
        <h2 class="tipo">Tipos de productos:{{$productos->tipo}} </h2>
    </div>
    <br><br>
    <div class="contenedor2">
        <h2 class="descripcion">Descripcion del producto: {{$productos->descripcion}}</h2>
    </div>
    <br><br>
    <p><a href="{{route('crud.editar',$productos->id)}}" class="edita">Editar producto</a></p>
    <br><br>
    <form action="{{route('crud.destroy',$productos)}}" method="POST">
    @method('delete')
    @csrf
    <button>Eliminar producto</button>
    </form>
    
</div>

@endsection