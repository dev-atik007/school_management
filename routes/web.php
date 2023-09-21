<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Auth\ChangePasswordController;
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





Route::group(['middleware' => 'admin'], function() {

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('/admin/admin/list', [AdminController::class, 'list'])->name('admin.list');
    Route::get('/admin/admin/add', [AdminController::class, 'add'])->name('admin.add');
    Route::post('/admin/admin/add', [AdminController::class, 'insert'])->name('insert');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/update/{id}', [AdminController::class, 'update'])->name('update');
    Route::get('admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

    Route::get('/admin/class/list', [ClassController::class, 'list'])->name('class.list');
    Route::get('/admin/class/add', [ClassController::class, 'add'])->name('class.add');
    Route::post('/admin/class/add', [ClassController::class, 'insert'])->name('insert');
    Route::get('/admin/class/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
    Route::post('/admin/class/update/{id}', [ClassController::class, 'update'])->name('update');
    Route::get('/admin/class/delete/{id}', [ClassController::class, 'delete'])->name('class.delete');


    Route::get('/admin/subject/list', [SubjectController::class, 'list'])->name('subject.list');
    Route::get('/admin/subject/add', [SubjectController::class, 'add'])->name('subject.add');
    Route::post('/admin/subject/add', [SubjectController::class, 'insert'])->name('insert');



    Route::get('/admin/change_password', [ChangePasswordController::class, 'changePassword']);
    Route::post('/admin/change_password', [ChangePasswordController::class, 'update_change_password']);
    
});

Route::group(['middleware' => 'teacher'], function() {

    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('/teacher/change_password', [ChangePasswordController::class, 'changePassword']);
    Route::post('/teacher/change_password', [ChangePasswordController::class, 'update_change_password']);
});

Route::group(['middleware' => 'student'], function() {

    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('/student/change_password', [ChangePasswordController::class, 'changePassword']);
    Route::post('/student/change_password', [ChangePasswordController::class, 'update_change_password']);
});

Route::group(['middleware' => 'parent'], function() {

    Route::get('parent/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('/parent/change_password', [ChangePasswordController::class, 'changePassword']);
    Route::post('/parent/change_password', [ChangePasswordController::class, 'update_change_password']);
});
