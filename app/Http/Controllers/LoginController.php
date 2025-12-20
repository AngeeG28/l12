<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Muestra la página de login
    public function showLoginForm(){
    return view("Producto.login");
}

// Procesa los datos
    public function loginCustom(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // REDIRECCIÓN AL CARRITO CON MENSAJE

            return redirect()->route('Producto.carrito.index')
                    ->with('bienvenida', "Bienvenido " . Auth::user()->name . ", ya puedes iniciar con el proceso de compra de tus productos");
            }

            return back()->withErrors([
                    'email' => 'Las credenciales proporcionadas no son correctas.',
                ])->withInput();
        }
}