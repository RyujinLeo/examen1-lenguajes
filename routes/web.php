<?php

use App\Http\Controllers\ProfileController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;
use App\Http\Controllers\contactoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio', function () {
    return view('directorio');
});

Route::get('/directorios/agregar', function () {
    return view('crearEntrada');
}) ;

Route::get('/directorios/agregarnuevo', [directorioController::class, 'guardardirectorio'])->name('directorio.guardar');


Route::get('/directorios', [directorioController::class, 'mostrardirectorios']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

