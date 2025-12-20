<!-- Se ponen todas las rutas -->
<?php

use Illuminate\Support\Facades\Route;
 
// Instanciar el controlador, cada que se haga uno nuevo debe de aplicarse, para llamarlo:
use App\Http\Controllers\PostController; 
use App\Http\Controllers\LoginController;


// RUTA LLAMANDO UNA VISTA:
Route::get('/', function () {
    return view('inicio');
});

Route::resource('productos', PostController::class);

//RUTA PARA MOSTRAR PÁGINA DE LOGIN

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

//RUTA PARA PROCESAR EL LOGIN
Route::post('login', [LoginController::class, 'loginCustom'])->name('login.custom');

//RUTA PARA MOSTRAR EL VISTA DEL CARRITO
Route::get('carrito', function () {
    return view('Producto.carrito');
})->name('Producto.carrito.index')->middleware('auth');

Route::post('logout',function() {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');
