<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/',[PagesController::class,'inicio'])->name('inicio');

Route::get('/fotos',[PagesController::class,'fotos'])->name('foto');

Route::get('/blog',[PagesController::class,'blog'])->name('blog');

Route::get('/nosotros/{nombre?}',[PagesController::class,'nosotros'])->name('nosotros');

