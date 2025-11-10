<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto_ARF_Controller;

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
});

// Rutas para productos
// Autor: ARF
Route::get('/productos', [Producto_ARF_Controller::class, 'index'])->name('productos.index');
Route::get('/productos/{id}', [Producto_ARF_Controller::class, 'show'])->name('productos.show');