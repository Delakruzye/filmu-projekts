<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DemoController;

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('movies', [FrontController::class, 'movies'])->name('movies.index');
Route::get('about-us', [FrontController::class, 'aboutUs'])->name('about.us');
Route::get('/movies/{id}',[FrontController::class, 'aboutFilm']);
Route::get('/movies/actor/{aid}',[FrontController::class, 'aboutActor']);

Route::get('/searchmovie/{id}', [FrontController::class, 'MovieQ']);
Route::get('/searchactor/{aid}', [FrontController::class, 'ActorBio']);
// Route::get('/', [DemoController::class, 'index']);
// Route::get('/demo', [DemoController::class, 'index']);
// Route::get('/demo/index', [DemoController::class, 'index']);
// Route::get('/demo/ajax', [DemoController::class, 'ajax']);
