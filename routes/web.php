<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', [AdminDashboardController::class, 'adminDashboard'])-> middleware('admin')->name('admin.dashboard');
Route::get('admin/login', [AdminLoginController::class, 'loginForm'])-> name('admin.login.form');
Route::post('admin/login', [AdminLoginController::class, 'AdminLoginSystem'])-> name('admin.login');
