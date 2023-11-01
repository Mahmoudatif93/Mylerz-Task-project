<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SimulatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index']);
Route::post('/', [AuthController::class, 'login']);

Route::middleware('auth')->group(function(){

    //////////////////////// Main Page

    Route::get('/home', [ HomeController::class, 'index' ])->name('home');

    /////////////// Run simulator/////////////////////////////////
    Route::any('simulator/{type}', [ SimulatorController::class, 'simulator' ] )->name('simulator');
//////////////////////////////////////////////////////////////
});
