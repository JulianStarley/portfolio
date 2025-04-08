<?php

use Illuminate\Http\Request;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('medicines', MedicineController::class);
Route::apiResource('batches', BatchController::class);
Route::apiResource('inventories', InventoryController::class);
