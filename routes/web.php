<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::prefix('perpus-smecone')->group(function () {
    Route::get('/daftar', [AuthController::class, 'register'])->name('register');
    Route::post('/masuk-proses', [AuthController::class, 'check_login'])->name('check-login');
    Route::get('/beranda', [HomeController::class, 'index'])->name('home');
    Route::get('/book', [HomeController::class, 'book'])->name('book');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/post', [HomeController::class, 'post'])->name('post');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
    Route::prefix('admin-page')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/data-article', [DashboardController::class, 'dataArticle'])->name('data-article');
        Route::get('/make-article', [DashboardController::class, 'makeArticle'])->name('make-article');
        Route::get('/make-category', [DashboardController::class, 'makeCategory'])->name('make-category');
    });
});
