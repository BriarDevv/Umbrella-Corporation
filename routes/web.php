<?php

declare(strict_types=1);

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// sitio publico
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');

// autenticacion
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// area del usuario logueado (pide login)
Route::get('/mi-cuenta', [AccountController::class, 'index'])
    ->middleware('auth')
    ->name('account.dashboard');

// panel de admin (login + rol admin)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function (): void {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // ABM de la bitacora
    Route::get('/bitacora', [AdminPostController::class, 'index'])->name('posts.index');
    Route::get('/bitacora/nueva', [AdminPostController::class, 'create'])->name('posts.create');
    Route::post('/bitacora', [AdminPostController::class, 'store'])->name('posts.store');
    Route::get('/bitacora/{post}/editar', [AdminPostController::class, 'edit'])->name('posts.edit');
    Route::put('/bitacora/{post}', [AdminPostController::class, 'update'])->name('posts.update');
    Route::delete('/bitacora/{post}', [AdminPostController::class, 'destroy'])->name('posts.destroy');

    // personal
    Route::get('/personal', [AdminUserController::class, 'index'])->name('users.index');
    Route::get('/personal/{user}', [AdminUserController::class, 'show'])->name('users.show');
});
