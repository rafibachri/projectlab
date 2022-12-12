<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\CategoryController;

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

Route::get('/home', [ProductController::class, 'data']);
Route::get('/productdetail/{id}', [ProductController::class, 'detail']);

// Route::get('/publisher', [PublisherController::class,'publish']);
// Route::get('/publisherdetail/{id}', [PublisherController::class,'publishdetail']);

// Route::get('/category/{id}', [CategoryController::class,'category1']);

// Route::get('/contact', function () {
//     return view('contact');
// });