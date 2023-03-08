<?php

use App\Http\Controllers\product;
use App\Http\Controllers\usercontrollers;
use App\Models\producting;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [product::class,'index']);

Route::get('/viewing/create',[product::class,'create'])->middleware('auth');

Route::post('/viewing',[product::class,'store']);

Route::get('/viewing/{producting}/edit',[product::class,'edit'])->middleware('auth');

Route::put('/viewing/{producting}',[product::class,'update'])->middleware('auth');

Route::delete('/viewing/{producting}',[product::class,'delete'])->middleware('auth');

Route::get('/viewing/manage',[product::class,'manage'])->middleware('auth');

Route::get('/onepost/{producting}',[product::class,'show']);

Route::get('/register',[usercontrollers::class,'register'])->middleware('guest');

Route::post('/users',[usercontrollers::class,'storeusers']);

Route::post('/logout',[usercontrollers::class,'logout'])->middleware('auth');

Route::get('/login',[usercontrollers::class,'login'])->name('login')->middleware('guest');

Route::post('/users/authenicate',[usercontrollers::class,'authenicate']);

