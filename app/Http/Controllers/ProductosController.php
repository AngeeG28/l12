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

    public function inactivar($sku)
    {
        // findOrFail usa la PK (sku) definida en el modelo
        $productos = productos::findOrFail($sku);

        $productos->estado = 'inactivo';
        $productos->save();

        return redirect()->route('productos.index');
    }

    public function activar($sku)
    {
        $productos = productos::findOrFail($sku);

        $productos->estado = 'activo';
        $productos->save();

        return redirect()->route('productos.index');
    }
}

