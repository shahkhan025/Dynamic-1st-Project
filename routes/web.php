<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/product', [HomeController::class,'product'])->name('product');
Route::get('/Pro-Details/{id}', [HomeController::class, 'prodetail'])->name('Pro-Details');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blogDetails/{id}', [HomeController::class, 'blogDetails'])->name('blogDetails');
Route::get('/registration', [HomeController::class, 'register'])->name('registration');
Route::post('/newReg', [HomeController::class, 'newreg'])->name('newReg');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/userLogin', [HomeController::class, 'userLogin'])->name('userLogin');
