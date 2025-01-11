<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductsController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductsController::class,'create'])->name('products.create');
Route::post('/products',[ProductsController::class,'store'])->name('products.store');
Route::get('/products/{id}',[ProductsController::class,'show'])->name('products.show');
Route::get('/products/{id}/edit',[ProductsController::class,'edit'])->name('products.edit');
Route::put('/products/{id}',[ProductsController::class,'update'])->name('products.update');
Route::delete('/products/{id}',[ProductsController::class,'destroy'])->name('products.destroy');
