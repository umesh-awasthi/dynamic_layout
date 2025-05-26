<?php
 use App\Http\Controllers\SettingController;
 use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::match(['get', 'post'], '/admin/layout/settings', [SettingController::class, 'layoutForm'])->name('admin.category.layout')->middleware(['auth', 'admin']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

