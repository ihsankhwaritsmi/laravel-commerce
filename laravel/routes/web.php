<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

use App\Http\Controllers\ProductController;


use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

Route::get('/', function () {
    return redirect('/product');
});
Route::get('/product', [ProductController::class, 'index'])->name('home');
Route::post('/product/edit', [ProductController::class, 'edit'])->name('product.edit');

route::post('/product/store', [ProductController::class, 'store'])->name('product.store');