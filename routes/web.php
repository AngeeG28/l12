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
Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');

Route::get('/productos/inactivar/{sku}', [ProductosController::class, 'inactivar'])->name('productos.inactivar');
Route::get('/productos/activar/{sku}', [ProductosController::class, 'activar'])->name('productos.activar');

Route::get('/detalle/{sku}', [ProductosController::class, 'detalle']);


// Route::get('/productos', function () {
//     return view('productos');
// });

// RUTA DEVUELVE CADENA DE TEXTO:
// Route::get('/productos', function () {
//     return "Estos domos nosotros";
// });

// Route::get('/detalle/{id}', function ($id) {
//     return view('detalle', compact('id'));
// });


// EJEMPLO
Route::get('/detalle', function () {
    return view('detalle');
});