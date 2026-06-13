<?php

use Illuminate\Support\Facades\Route;

// 1. SEMUA "USE" HARUS BERADA DI SINI, DI ATAS!
use App\Http\Controllers\Api\GunplaController;
use App\Http\Controllers\Api\InventoryController;
use App\Http\Controllers\Api\OrderController; // Pindahkan ke sini

// 2. BARU SETELAH ITU, TULIS SEMUA "ROUTE" DI BAWAHNYA
Route::get('/gunplas', [GunplaController::class, 'index']);

Route::get('/inventory', [InventoryController::class, 'index']);
Route::post('/inventory', [InventoryController::class, 'store']);
Route::put('/inventory/{id}', [InventoryController::class, 'update']);
Route::delete('/inventory/{id}', [InventoryController::class, 'destroy']);

Route::post('/checkout', [OrderController::class, 'checkout']);