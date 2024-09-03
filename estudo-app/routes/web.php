<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


    Route::get('/products', [ProdutoController::class , 'index'])->name('product.index');
    Route::get('/products/create', [ProdutoController::class, 'create'])->name('product.create');
    Route::post('/products/store', [ProdutoController::class, 'store'])->name('product.store');
    Route::get('/products/edit/{produto}', [ProdutoController::class, 'edit'])->name('product.edit');
    Route::put('/products/update/{produto}', [ProdutoController::class, 'update'])->name('product.update');


});

require __DIR__.'/auth.php';
