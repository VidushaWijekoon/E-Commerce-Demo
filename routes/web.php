<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\HomepageController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [HomepageController::class, 'index'])->name('frontend.index');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
Route::get('/admin/category', [DashboardController::class, 'category'])->name('admin.dashboard.category');