<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
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
Route::prefix('users')->name('users.')->group(function () {
    Route::get('profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('update');
});
Route::resource('courses', CourseController::class)->only(['index', 'show']);
Route::resource('carts', CartController::class)->only(['index', 'store', 'destroy']);

Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('{courseId}/lessons/{lessonId}', [LessonController::class, 'show'])->name('lessons.show');
});
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'updatePassWord'])->name('password.update');
