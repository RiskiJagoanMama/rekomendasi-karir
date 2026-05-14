<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\MinatController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\KarirSkillController;
use App\Http\Controllers\KarirMinatController;

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/user/dashboard', function () {return view('user.dashboard');});
Route::get('/admin/dashboard', function () { return view('admin.dashboard');});
Route::get('/konselor/dashboard', function () { return view('konselor.dashboard');});

Route::resource('/karir', KarirController::class);

Route::resource('/minat', MinatController::class);

Route::resource('/skill', SkillController::class);

Route::resource('/karir_skill', KarirSkillController::class);

Route::resource('/karir_minat', KarirMinatController::class);