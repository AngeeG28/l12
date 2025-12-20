<?php

namespace App\Http\Controllers;
use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = productos::where('estado', 'activo')->get();
        
        return view('Producto.index', compact('productos')); //se pasa a la variable productos -> $
    }

    public function detalle($sku)
    {
        // Buscar por PK (sku) y lanzar 404 si no existe
        $productos = productos::findOrFail($sku);

        return view('Producto.detalle', compact('productos','sku'));
    }
}

