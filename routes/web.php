<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

Route::get('/', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('forgot-password', [ForgotPasswordController::class, 'PostForgotPassword']);
Route::get('/reset/{token}', [ResetPasswordController::class, 'reset']);
Route::post('/reset/{token}', [ResetPasswordController::class, 'postReset']);




Route::get('/admin/admin/list', [AdminController::class, 'list']);


Route::group(['middleware' => 'admin'], function() {

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'teacher'], function() {

    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'student'], function() {

    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'parent'], function() {

    Route::get('parent/dashboard', [DashboardController::class, 'dashboard']);
});
