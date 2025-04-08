<?php

use Illuminate\Support\Facades\Route;

// Existing routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/graphic-generator', function () {
    return view('graphic_generator');
})->name('graphic_generator');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// New routes for inventory management
Route::resource('medicines', 'App\Http\Controllers\MedicineController');
Route::resource('batches', 'App\Http\Controllers\BatchController');
Route::resource('inventories', 'App\Http\Controllers\InventoryController');

require __DIR__.'/auth.php';
