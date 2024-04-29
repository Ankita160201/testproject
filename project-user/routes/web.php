<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AdminController::class, 'index'])->name('registration');
Route::post('registration/action', [AdminController::class, 'registrationAction'])->name('registrationAction');
Route::get('login', [AdminController::class, 'login'])->name('login');
Route::post('login/action', [AdminController::class, 'loginAction'])->name('loginAction');
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('addUser', [UserController::class, 'index'])->name('addUser');
Route::post('add/action', [UserController::class, 'addAction'])->name('addAction');
Route::get('listUser', [UserController::class, 'list'])->name('listUser');

// Route::resource('admin', AdminController::class);

