<?php

namespace App\Http\Controllers;
use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = productos::all();
        
        return view('Producto.index', compact('productos')); //se pasa a la variable productos -> $
    }
}

