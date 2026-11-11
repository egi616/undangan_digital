<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UndanganController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UndanganController::class, 'index'])->name('undangan');


Route::post('/reservasi', [UndanganController::class, 'store'])->name('reservasi');
