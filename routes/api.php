<?php

use App\Http\Controllers\HomeownerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//make route class
Route::get('/homeownersIndex', [HomeownerController::class, 'index']);
Route::post('/homeownersStore', [HomeownerController::class, 'store']);
Route::get('/homeownersShow', [HomeownerController::class, 'show']);
Route::put('/homeownersUpdate', [HomeownerController::class, 'update']);
Route::delete('/homeownersDelete', [HomeownerController::class, 'destroy']);