<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::resource('login', LoginController::class)->only(['show', 'auth']);
Route::resource('register', RegisterController::class)->only(['show', 'store']);
Route::resource('profiles', ProfileController::class)->only(['edit', 'update']);
Route::resource('courses', CourseController::class)->only(['index', 'show']);
Route::resource('lessons', LessonController::class)->only(['index', 'show']);
Route::resource('carts', CartController::class)->only(['index', 'store', 'destroy']);
