<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ReviewController;
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('actor', [FrontController::class, 'actor'])->name('actor');
Route::get('/', [FrontController::class, 'movies'])->name('movies.index');
Route::get('/movies/{id}',[FrontController::class, 'aboutFilm']);
Route::get('/movies/actor/{aid}',[FrontController::class, 'aboutActor']);

Route::get('/searchmovie/{id}', [FrontController::class, 'MovieQ']);
Route::get('/searchmovie/{id}', [FrontController::class, 'Credits']);
Route::get('/shortdata/{id}', [FrontController::class, 'shortdata']);
Route::get('/searchgenre/{id}', [FrontController::class, 'genres']);
Route::get('/alike/{id}', [FrontController::class, 'alike']);
Route::get('/combine', [FrontController::class, 'combineresponses']);
Route::get('/searchactor/{aid}', [FrontController::class, 'ActorBio']);

Route::get('/create', [ReviewController::class, 'create'])->name('review.create');
Route::post('/store', [ReviewController::class, 'store'])->name('review.store');

Route::get('reviews', [ReviewController::class, 'index'])->name('reviews');
