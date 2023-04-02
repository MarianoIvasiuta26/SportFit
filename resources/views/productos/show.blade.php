@extends('layouts.plantilla')
@section('title', 'Producto' . $producto->name)

@section('content')
    <h1> Bienvenido al producto: {{$producto->name}} </h1> 
    <a href="{{route('productos.index')}}">Volver a los productos</a>
    <br>
    <a href="{{route('productos.edit',$producto)}}">Editar producto</a>
    <p><strong>Categoria:</strong> {{$producto->categoria}} </p>

    <form action="{{route('productos.destroy', $producto)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar producto</button>
    </form>
@endsection()
