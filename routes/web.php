<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'viewWelcome'])->name('welcome');
Route::get('/register', [UserController::class, 'viewRegister'])->name('register.view');
Route::post('/register', [UserController::class, 'registerUser'])->name('register.user');
Route::get('/login', [UserController::class, 'viewLogin'])->name('login.view');
Route::post('/login', [UserController::class, 'loginUser'])->name('login.user');
Route::get('/dashboard', [UserController::class, 'viewDashboard'])->name('dashboard.view');
Route::get('/admin/dashboard', [UserController::class, 'viewAdminDashboard'])->name('admin.dashboard.view');
Route::get('/user/details/{id}', [UserController::class, 'viewUserDetails'])->name('user.details.view');
