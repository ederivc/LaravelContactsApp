<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.app');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

Route::get('/{user:name}/account', [AccountController::class, 'index'])->name('account');

Route::get('/{user:name}/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/{user:name}/contacts/addContact', [ContactsController::class, 'create'])->name('contacts.add');
Route::post('/{user:name}/contacts/addContact', [ContactsController::class, 'store'])->name('contacts.add');
