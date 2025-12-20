<!-- Se ponen todas las rutas -->

<?php

use Illuminate\Support\Facades\Route;
 
// Instanciar el controlador, cada que se haga uno nuevo debe de aplicarse, para llamarlo:
use App\Http\Controllers\PostController; 

// RUTA LLAMANDO UNA VISTA:
Route::get('/', function () {
    return view('inicio');
});

Route::resource('productos', PostController::class);