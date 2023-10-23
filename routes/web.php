<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CommentController;
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
Route::prefix('login')->name('login.')->group(function () {
    Route::get('show', [LoginController::class, 'show'])->name('show');
    Route::post('auth', [LoginController::class, 'auth'])->name('auth');
});
Route::prefix('register')->name('register.')->group(function () {
    Route::get('show', [RegisterController::class, 'show'])->name('show');
    Route::post('store', [RegisterController::class, 'store'])->name('store');
});
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::prefix('users')->name('users.')->group(function () {
    Route::get('profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('update');
    Route::put('profile/image', [ProfileController::class, 'updateImage'])->name('updateImage');
    Route::get('profile/getUploadUrl', [ProfileController::class, 'getUploadUrl'])->name('getUploadUrl');
});
Route::resource('courses', CourseController::class)->only(['index', 'show']);
Route::resource('carts', CartController::class)->only(['index', 'store', 'destroy']);

Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('{courseId}/lessons/{lessonId}', [LessonController::class, 'show'])->name('lessons.show');
});

Route::resource('comments', CommentController::class)->only(['destroy']);

Route::resource('checkouts', CheckoutController::class)->only(['index', 'store']);
