<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelsPlacasController;


Route::post('/cliente', [ModelsPlacasController::class, 'register']);
Route::get('/cliente/{id}', [ModelsPlacasController::class, 'findByid']);
Route::put('/cliente/{id}', [ModelsPlacasController::class, 'update']);
Route::delete('/cliente/{id}', [ModelsPlacasController::class, 'delete']);
Route::get('/consulta/final-placa/{numero}', [ModelsPlacasController::class, 'finalPlaca']);



