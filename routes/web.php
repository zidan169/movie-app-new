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

Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Route::get('/genres/create', [GenreController::class, 'create']);
Route::post('/genres', [GenreController::class, 'store']);
Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);

Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);