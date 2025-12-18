<!-- Se ponen todas las rutas -->

<?php

use Illuminate\Support\Facades\Route;
 
// Instanciar el controlador, cada que se haga uno nuevo debe de aplicarse, para llamarlo:
use App\Http\Controllers\ProductosController; 

// RUTA LLAMANDO UNA VISTA:
Route::get('/', function () {
    return view('inicio');
});

// RUTA POR MEDIO DE UN CONTROLADOR:
Route::get('/productos', [ProductosController::class, 'productos']);

// RUTA DEVUELVE CADENA DE TEXTO:
Route::get('/nosotros', function () {
    return "Estos domos nosotros";
});

Route::get('/detalle/{id}', function ($id) {
    return view('detalle', compact('id'));
});


// EJEMPLO
// Route::get('/detalle', function () {
//     return view('detalle');
// });