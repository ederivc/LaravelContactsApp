<?php

use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('admin');

Route::get('/address', [AddressController::class, 'show'])->name('showAddress');
Route::get('/address/{address:address_id}/details', [AddressController::class, 'edit'])
  ->name('editAddress');
Route::post('/address/{address:address_id}/details', [AddressController::class, 'update']);

Route::get('/addAddress', [AddressController::class, 'index'])->name('address');
Route::post('/addAddress', [AddressController::class, 'store']);
