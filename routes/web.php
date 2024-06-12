<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
   dd(auth()->user());
});

Route::middleware(['auth', 'Admin'])->group(function () {
   Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
   Route::get('/data', [DataController::class, 'index'])->name('data_anggota');
   Route::get('/users', [UsersController::class, 'index'])->name('users');
});

Auth::routes();
