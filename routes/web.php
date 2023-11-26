<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::view('/', 'home')->name('home');

// IMC
Route::get('/bmi', [HomeController::class, 'bmi'])->name('bmi.index');
Route::post('/bmi/calculate', [UserController::class, 'calculateBMI'])->name('bmi.calculate');

// Converrtisseur
Route::get('/convertisseur', [HomeController::class, 'convertisseur'])->name('convertisseur.index');
Route::post('/convertisseur/calculate', [UserController::class, 'convertisseur'])->name('convertisseur.calculate');

// Mensualité
Route::get('/mensualite', [HomeController::class, 'mensualite'])->name('mensualite.index');
Route::post('/mensualite/calculate', [UserController::class, 'mensualite'])->name('mensualite.calculate');

// TP4
Route::group(['prefix' => 'tp4', 'as' => 'tp4.'], function () {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/apropos', [PageController::class, 'apropos'])->name('apropos');
    Route::resource('packages', PackageController::class);
});
