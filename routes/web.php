<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\payments\mpesa\MPESAController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('products');
    Route::get('/products/create', 'create')->name('createProduct');
    Route::post('/store', 'store');
    Route::get('/mpesa', 'mpesa')->name('mpesa');
});

Route::post('/get-token', [MPESAController::class, 'getAccessToken']);

