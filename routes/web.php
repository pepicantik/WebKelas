<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MomentController;

Route::get('/', [SiswaController::class, 'welcome']);
Route::get('/home', [SiswaController::class, 'home']);

Route::resource('siswa', SiswaController::class);
Route::resource('moment', MomentController::class);

Route::get('/login', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
