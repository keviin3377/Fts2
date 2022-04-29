<?php

use Illuminate\Support\Facades\Route;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rutas de Modulo de usuario

    // verificacion de correo 

        
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', '¡Link de verificación enviado!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');




Route::get('/', function () {
    $productos= Producto::all()->take(4);
    return view('index',  compact('productos'));
})->name('index');


Route::get('/producto', function (Request $request) {
    $id=$request->input('producto');
    $producto=Producto::all()->where('id', $id);
    return view('producto', compact('producto'));
})->name('producto');

Route::get('/busqueda', function (Request $request) {
    $buscar=$request->input('buscar');
    $producto= Producto::select()->where('n_producto', 'like' ,'%'. $buscar. '%')->get();  
    return view('busquedac', compact('producto'));
})->name('busqueda');

Route::get('/carrito', function () {
    $productos= Producto::all()->take(4);
    return view('carrito',  compact('productos'));
})->name('carrito');

Route::get('/novedades', function(){
    $productos= Producto::all()->sortByDesc('id')->take(16);
    $xbox= Producto::all()->where('id_categoria', '1')->sortByDesc('id')->take(8);
    $ps4= Producto::all()->where('id_categoria', '2')->sortByDesc('id')->take(8);
    $ps5= Producto::all()->where('id_categoria', '3')->sortByDesc('id')->take(8);
    $switch= Producto::all()->where('id_categoria', '4')->sortByDesc('id')->take(8);
    $pc= Producto::all()->where('id_categoria', '5')->sortByDesc('id')->take(8);
    return view('novedades',  compact('productos', 'xbox', 'ps4', 'ps5', 'switch', 'pc'));
})->name('novedades');

Route::get('/pasarela', function () {
    return view('pasarela');                  // Ruta Pasarela
})->name('formularios.pasarela');

Route::get('/factura', function () {
    return view('factura');                  // Ruta Pasarela
})->name('formularios.factura');

Auth::routes();
Route::resource('productos', App\Http\Controllers\ProductoController::class);
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);



