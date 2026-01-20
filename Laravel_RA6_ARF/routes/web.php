<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardARFController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardARFController::class, 'index'])->name('dashboard');
