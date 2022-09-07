<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoriesController;
use \App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SizesController;
use App\Http\Controllers\StocksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    // Category
    Route::resource('categories',CategoriesController::class);
    Route::get('/api/categories', [CategoriesController::class, 'getCategoriesJson']);
    // Brand
    Route::resource('brands',BrandController::class);
    Route::get('/api/brands', [BrandController::class, 'getBrandsJson']);
    // Size
    Route::resource('sizes',SizesController::class);
    Route::get('/api/sizes', [SizesController::class, 'getSizesJson']);

    // Product
    Route::resource('products',ProductsController::class);
    Route::get('/api/products', [ProductsController::class, 'getProductsJson']);

    // Stock
    Route::get('/stocks',[StocksController::class, 'stock'])->name('stock');
    Route::post('/stocks',[StocksController::class, 'stockSubmit'])->name('stockSubmit');
    Route::get('/stocks/history',[StocksController::class, 'history'])->name('stockHistory');


});


// Category Create
// Route::resource('categories',CategoriesController::class);




// Route::get('/template',function()
// {
//     return view('layouts.master');
// });