<?php
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MovieController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/products', function () {
    return view('product');
});

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/review', [ReviewController::class, 'index']);
Route::get('/movies', [MovieController::class, 'index']);