<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/hello', [HomeController::class,"hello"]);
//home
Route::get('/', [HomeController::class,"viewHome"])->name("home");
//about
Route::get('/about', [HomeController::class,"viewAbout"])->name("about");
//contact

// ds product
Route::get('/products', [ProductController::class,"index"])->name("product.index");
// chi tiet product
Route::get('/products/{id}', [ProductController::class,"show"])->name("product.show");

Route::get('/contact/{name}', [HomeController::class,"viewContact"]);
