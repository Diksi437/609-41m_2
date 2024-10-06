<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halls', [HallController::class, 'index'])->name('halls.index');
Route::get('/halls/{id}', [HallController::class, 'show'])->name('halls.show');

Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
