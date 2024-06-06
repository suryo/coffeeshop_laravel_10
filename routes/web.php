<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductBrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Login
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::get('/register',[RegisterController::class,'index'])->name('register')->middleware('guest');

//Awal
Route::get('/', [DashboardController::class, 'index']);

//Front
Route::get('/home', [HomeController::class, 'index']);
Route::get('/product_details', [HomeController::class, 'product_details']);

//logout
Route::get('/logout', [ProductController::class, 'create'])->name('logout');

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

//products
Route::get('/product', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/product/update/{product}', [ProductController::class, 'update'])->name('products.update');
Route::get('/product/delete/{product}', [ProductController::class, 'destroy'])->name('products.delete');

//Category Product
Route::get('/productcategory', [ProductCategoryController::class, 'index'])->name('product_categories.index');
Route::get('/productcategory/create', [ProductCategoryController::class, 'create'])->name('product_categories.create');
Route::post('/productcategory/store', [ProductCategoryController::class, 'store'])->name('product_categories.store');
Route::get('/productcategory/show/{category}', [ProductCategoryController::class, 'show'])->name('product_categories.show');
Route::get('/productcategory/edit/{category}', [ProductCategoryController::class, 'edit'])->name('product_categories.edit');
Route::post('/productcategory/update/{category}', [ProductCategoryController::class, 'update'])->name('product_categories.update');
Route::get('/productcategory/delete/{category}', [ProductCategoryController::class, 'destroy'])->name('product_categories.delete');

//Brand Product
Route::get('/productbrand', [ProductBrandController::class, 'index'])->name('product_brands.index');
Route::get('/productbrand/create', [ProductBrandController::class, 'create'])->name('product_brands.create');
Route::post('/productbrand/store', [ProductBrandController::class, 'store'])->name('product_brands.store');
Route::get('/productbrand/show/{brand}', [ProductBrandController::class, 'show'])->name('product_brands.show');
Route::get('/productbrand/edit/{brand}', [ProductBrandController::class, 'edit'])->name('product_brands.edit');
Route::post('/productbrand/update/{brand}', [ProductBrandController::class, 'update'])->name('product_brands.update');
Route::get('/productbrand/delete/{brand}', [ProductBrandController::class, 'destroy'])->name('product_brands.delete');

//Customers
Route::get('/customer', [CustomerController::class, 'index']);

//Orders
Route::get('/order', [OrderController::class, 'index']);