<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegUserController;


Route::get('/', function () {
    return view('index');
});

Route::get('/index', [RegUserController::class, 'index']);
Route::get('/regForm', [RegUserController::class, 'create']);
Route::post('/regFormStore', [RegUserController::class, 'store']);
Route::get('/editRegForm/{id}', [RegUserController::class, 'edit']);
Route::post('/editRegFormStore', [RegUserController::class, 'update']);
Route::get('/refUserDelete/{id}', [RegUserController::class, 'destroy']);
