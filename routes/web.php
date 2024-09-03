<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('articulos', App\Http\Controllers\ArticuloController::class);
Route::resource('cajas', App\Http\Controllers\CajaController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('consultas', App\Http\Controllers\ConsultaController::class);
Route::resource('entradas', App\Http\Controllers\EntradaController::class);
Route::resource('facturas', App\Http\Controllers\FacturaController::class);
Route::resource('inventarios', App\Http\Controllers\InventarioController::class);
Route::resource('pedidos', App\Http\Controllers\PedidoController::class);
Route::resource('proveedores', App\Http\Controllers\ProveedorController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('rutas', App\Http\Controllers\RutaController::class);
Route::resource('salidas', App\Http\Controllers\SalidaController::class);
Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);
Route::resource('ventas', App\Http\Controllers\VentaController::class);
