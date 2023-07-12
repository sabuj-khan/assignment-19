<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, 'homePage']);
Route::get('/contact', [ContactController::class, 'contactPage']);
Route::get('/about', [AboutController::class, 'aboutPage']);


Route::get('/posts/{id}', [PostController::class, 'singlePost']);



//Ajux
Route::get('/socialData', [CommonController::class, 'socialData']);

Route::post('/contactRequest', [ContactController::class, 'contactRequest']);


