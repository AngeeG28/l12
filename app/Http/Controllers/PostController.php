<?php

namespace App\Http\Controllers;
use App\Models\productos;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = productos::all();
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new productos();
        $producto->nombre = $request->input('nombre');
        $producto->autor = $request->autor;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->valor = $request->valor;
        $producto->estado = "activo";
        $producto->save();
        return redirect()->back()->with('success', 'Libro creado exitosamente, agregar la imagen en la carpeta imagenes/Stock.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $sku)
    {
        $productos = productos::findOrFail($sku);

        return view('Producto.detalle', compact('productos','sku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
