<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\DashboardController as AdminDashboard;
use App\Http\Controllers\user\DashboardController as UserDashboard;
use App\Http\Controllers\konselor\DashboardController as KonselorDashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\admin\KarirController;
use App\Http\Controllers\admin\MinatController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\admin\KarirSkillController;
use App\Http\Controllers\admin\KarirMinatController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\user\RekomendasiController;
use App\Http\Controllers\user\KonsultasiController;
use App\Http\Controllers\user\HistoryController;
use App\Http\Controllers\konselor\HistoryUserController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/user/dashboard', function () {return view('user.dashboard');});
// Route::get('/admin/dashboard', function () { return view('admin.dashboard');});
Route::get('/konselor/dashboard', function () { return view('konselor.dashboard');});

Route::resource('/karir', KarirController::class);

Route::resource('/minat', MinatController::class);

Route::resource('/skill', SkillController::class);

Route::resource('/karir_skill', KarirSkillController::class);

Route::resource('/karir_minat', KarirMinatController::class);

Route::get('/admin/data-user', [UserManagementController::class, 'user']);
Route::get('/admin/data-konselor', [UserManagementController::class, 'konselor']);

Route::get('/rekomendasi', [RekomendasiController::class, 'index']);
Route::post('/rekomendasi/proses', [RekomendasiController::class, 'proses']);

Route::get('/history',[RekomendasiController::class, 'history']);

Route::get('/admin/history', [RekomendasiController::class, 'adminHistory']);

Route::get('/konsultasi', [KonsultasiController::class, 'index']);
Route::post('/konsultasi/store', [KonsultasiController::class, 'store']);
Route::get('/konselor/konsultasi', [KonsultasiController::class, 'konsultasiKonselor']);

Route::get('/konselor/konsultasi/{id}', [KonsultasiController::class,'balas']);
Route::post('/konselor/konsultasi/{id}', [KonsultasiController::class,'simpanBalasan']);

Route::get('/user/history-konsultasi', [KonsultasiController::class,'historyUser']);

Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
Route::get('/user/dashboard', [UserDashboard::class, 'index'])->name('user.dashboard');
Route::get('/user/dashboard', [KonselorDashboard::class, 'index'])->name('konselor.dashboard');

Route::get('/user/history', [HistoryController::class, 'index'])->name('user.history');

Route::get('/konselor/history', [HistoryUserController::class, 'index'])->name('konselor.history');