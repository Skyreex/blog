<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\StagiaireController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionController;


Route::view('/', 'home')->name('home');

// IMC
Route::get('/bmi', [HomeController::class, 'bmi'])->name('bmi.index');
Route::post('/bmi/calculate', [ActionController::class, 'calculateBMI'])->name('bmi.calculate');

// Convertisseur
Route::get('/convertisseur', [HomeController::class, 'convertisseur'])->name('convertisseur.index');
Route::post('/convertisseur/calculate', [ActionController::class, 'convertisseur'])->name('convertisseur.calculate');

// Mensualité
Route::get('/mensualite', [HomeController::class, 'mensualite'])->name('mensualite.index');
Route::post('/mensualite/calculate', [ActionController::class, 'mensualite'])->name('mensualite.calculate');

Route::resource('stagiaires', StagiaireController::class);
Route::resource('modules', ModuleController::class);
Route::post('/stagiaires/update', [StagiaireController::class, 'update'])->name('stagiaires.update');
Route::post('/modules/update', [ModuleController::class, 'update'])->name('modules.update');
