<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('account')->name('account.')->group(function () {
    Route::get('/edit-profile', [ProfileController::class, 'editProfile'])->name('edit-profile');
    Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('update-profile');
});

Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('/list-courses', [CourseController::class, 'getListCourses'])->name('list-course');
    Route::get('course-detail/{id}', [CourseController::class, 'getCourseDetail'])->name('course-detail');
});

Route::prefix('cart')->name('cart')->group(function () {
    Route::get('/', [CartController::class, 'showCart']);
    Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');
});
