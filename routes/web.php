<?php

use App\Http\Controllers\PoolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// GET           /pools                      index   pools.index
// GET           /pools/create               create  pools.create
// POST          /pools                      store   pools.store
// GET           /pools/{pool}               show    pools.show
// POST          /pools/{pool}               vote    pools.vote
// GET           /pools/{pool}/edit          edit    pools.edit
// PUT|PATCH     /pools/{pool}               update  pools.update
// DELETE        /pools/{pool}               destroy pools.destroy
Route::resource('pools', PoolController::class);


Route::post('/pools/{pool}', [PoolController::class, 'vote'])->name('pools.vote');