<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categoria_ARF_Controller;

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
});

// Rutas para productos
// Autor: ARF
Route::get('/categorias', [Categoria_ARF_Controller::class, 'index'])->name('categorias.index');
Route::get('/categorias/{id}', [Categoria_ARF_Controller::class, 'show'])->name('categorias.show');