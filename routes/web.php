<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {return view('landing');})->name('landing');

Route::get('/dashboard', function () {return view('dashboard');})->middleware('auth')->name('dashboard');

Route::get('/about', function () {return view('about');})->name('about');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
Route::post('/manage-users/add', [UserController::class, 'store'])->name('users.store');

Route::put('/manage-users/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/manage-users/delete', [UserController::class, 'destroy'])->name('users.delete');

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});