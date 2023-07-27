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
Route::get('/shop', [HomepageController::class, 'shop'])->name('frontend.shop');

Route::prefix('/admin')->middleware('auth', 'isAdmin')->group(function (){
    Route::get('/dashaboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::get('/category', [DashboardController::class, 'category'])->name('admin.dashboard.category');
    Route::get('/category/create', [DashboardController::class, 'category_create'])->name('admin.dashboard.category.create');
});
 