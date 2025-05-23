<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\RecetaIngredienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Tus otras rutas CRUD
    Route::resource('recetas', RecetaController::class);
    Route::resource('ingredientes', IngredienteController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('receta_ingredientes', RecetaIngredienteController::class);
    // etc...
});

require __DIR__.'/auth.php';
