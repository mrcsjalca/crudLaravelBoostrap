<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumneController;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\EnsenyamentController; // <--- añadir esto

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('alumne', AlumneController::class)->middleware('auth');
Route::resource('centre', CentreController::class)->middleware('auth');
Route::resource('ensenyaments', EnsenyamentController::class); // ya funciona
Route::resource('centre', CentreController::class)->middleware('auth');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
