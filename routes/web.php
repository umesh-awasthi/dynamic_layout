<?php
 use App\Http\Controllers\SettingController;

use Illuminate\Support\Facades\Route;


Route::match(['get', 'post'], '/admin/layout/settings', [SettingController::class, 'layoutForm'])->name('admin.category.layout');
