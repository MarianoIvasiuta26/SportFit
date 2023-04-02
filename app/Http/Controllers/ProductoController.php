<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProducto;
use App\Models\Producto;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $producto = Producto::orderBy('id', 'desc')->paginate();
        return view('productos.index', compact('producto'));
    }

    public function create(){
        return view('productos.create');
    }

    public function store(StoreProducto $request){
        $producto = Producto::create($request->all());

        return redirect()->route('productos.show', $producto);
    }

    public function show(Producto $producto){
        return view('productos.show', compact('producto'));
    }

    

    public function edit(Producto $producto){
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto){
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.show', $producto);
    }

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->route('productos.index', $producto);
    }

}
