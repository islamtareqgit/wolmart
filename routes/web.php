<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Customer\CustomerLoginController;
use App\Http\Controllers\Customer\CustomerDashboardController;
use App\Http\Controllers\Customer\CustomerSignupController;


Route::get('/', function () {
    return view('welcome');
});

// Admin dashboard login and logout system

Route::get('admin/dashboard', [AdminDashboardController::class, 'adminDashboard'])-> middleware('admin')->name('admin.dashboard');
Route::get('admin/login', [AdminLoginController::class, 'loginForm'])-> name('admin.login.form');
Route::get('admin', [AdminLoginController::class, 'AdminLoginRedirect']);
Route::post('admin/login', [AdminLoginController::class, 'AdminLoginSystem'])-> name('admin.login');
Route::get('admin/logout', [AdminLoginController::class, 'AdminLogout'])-> name('admin.logout');


// Customer dashboard login and logout system
Route::get('customer/dashboard', [CustomerDashboardController::class, 'customerDashboard'])-> middleware('customer')->name('customer.dashboard');
Route::get('customer/login', [CustomerLoginController::class, 'loginFormShow']);
Route::get('customer/signup', [CustomerSignupController::class, 'signupFormShow']);
Route::post('customer/signup', [CustomerSignupController::class, 'create']);
Route::post('customer/login', [CustomerLoginController::class, 'CustomerLoginSystem'])-> name('customer.login');



// Admin role CRUD

Route::resource('role', RoleController::class);
Route::get('all-roles', [RoleController::class, 'allRoles']);
Route::get('del-role/{id}', [RoleController::class, 'delRoles']);




