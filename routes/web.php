<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;


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

Route::get('/home',[HomeController::class,'home']);

Route::prefix('/product')->group (function () {
    Route::get('/1',[ProductController::class,'product1']);
 
    Route::get('/2',[ProductController::class,'product2']);
 
    Route::get('/3',[ProductController::class,'product3']);
 });

 Route::get('/news/{id?}',[NewsController::class,'news']);

 Route::prefix('/program')->group (function () {
    Route::get('/1',[ProgramController::class,'program1']);
 
    Route::get('/2',[ProgramController::class,'program2']);
 
    Route::get('/3',[ProgramController::class,'program3']);
 });

Route::get('/about-us',[AboutUsController::class,'about']);

// Route::resource('/contact',[ContactUsController::class,'index']);


Route::resource('/contact',ContactUsController::class);

 