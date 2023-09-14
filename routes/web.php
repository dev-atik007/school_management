<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authLogin']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/admin/list', [AdminController::class, 'list']);
