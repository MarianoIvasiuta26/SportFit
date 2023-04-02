@extends('layouts.plantilla')
@section('title', 'Productos')

@section('content')
    
    <h1>Bienvenido a la Tienda deportiva SportFit</h1>

    <a href="{{route('productos.create')}}">Crear Producto</a>
    <ul>
        
        @foreach ($producto as $producto)
            <li>
                <a href="{{route('procuctos.show', $producto)}}">{{$producto->name}}</a>
            </li>

        @endforeach

    </ul>

    {{$producto->links()}}
@endsection()