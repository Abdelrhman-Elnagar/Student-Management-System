<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentsController;

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
Route::get('/', function () {
    return view('laravel.welcome');
});

Route::resource('student', StudentsController::class);

Route::resource('course', CourseController::class);

//,'middleware' => 'guest','auth' (explain)
Route::group(['prefix' => 'auth'],function(){
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginPost'])->name('login.post');
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'registerPost'])->name('register.post');
    Route::delete('/logout',[AuthController::class,'logout'])->name('logout');
});
