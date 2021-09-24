<?php

use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.app');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');
