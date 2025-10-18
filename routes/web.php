<?php

use App\Http\Controllers\PoolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/create',[PoolController::class,'create']);
Route::post('/pools',[PoolController::class,'store']);