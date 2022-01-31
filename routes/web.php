<?php

use App\Http\Controllers\DefaultController;
use Illuminate\Support\Facades\Route;

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
//Création de la route / => appel du controller
Route::get('/', [DefaultController::class,'index'])->name('accueil');
Route::get('/posts/{id}', [DefaultController::class,'show'])->whereNumber('id')->name('post');
Route::get('/contact', [DefaultController::class,'contact'])->name('contact');

