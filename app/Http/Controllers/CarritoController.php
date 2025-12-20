<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\productos;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = Carrito::where('user_id', Auth::user()->id)->with('producto')->get();
        return view('producto.carrito', compact('item'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sku' => 'required',
            'cantidad' => 'required',
        ]);

        $item = Carrito::where('user_id', Auth::user()->id)
                ->where('producto_sku', $request->sku)
                ->first();
                if ($item) {
                    // Si el producto ya está en el carrito, actualizar la cantidad
                    $item->cantidad += $request->cantidad;
                    $item->save();
                } else {
                    // Si el producto no está en el carrito, crear un nuevo registro
                    Carrito::create([
                        'user_id' => Auth::user()->id,
                        'producto_sku' => $request->sku,
                        'cantidad' => $request->cantidad,
                    ]);
                }
                return redirect()->back()->with('success', 'Producto agregado al carrito');
    }
}
   