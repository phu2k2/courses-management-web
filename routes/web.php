<?php

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
Route::prefix('login')->name('login.')->group(function () {
    Route::get('show', [LoginController::class, 'show'])->name('show');
    Route::post('auth', [LoginController::class, 'auth'])->name('auth');
});
Route::prefix('register')->name('register.')->group(function () {
    Route::get('show', [RegisterController::class, 'show'])->name('show');
    Route::post('store', [RegisterController::class, 'store'])->name('store');
});
Route::resource('profiles', ProfileController::class)->only(['edit', 'update']);
Route::resource('courses', CourseController::class)->only(['index', 'show']);
Route::resource('lessons', LessonController::class)->only(['index', 'show']);
Route::resource('carts', CartController::class)->only(['index', 'store', 'destroy']);
