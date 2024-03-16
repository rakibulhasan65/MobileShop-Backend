<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ChatController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BackupController;
use App\Http\Controllers\Backend\ModuleController;
use App\Http\Controllers\Backend\BlogTagController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\PosController;
use App\Http\Controllers\Backend\SubscriptionController;

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::resource('settings', SettingController::class);
Route::post('logoupdate', [SettingController::class, 'sitelogo'])->name('logoupdate');

//   Roles && Users

Route::resource('roles',RoleController::class);
Route::resource('users',UserController::class);

// Module Management

Route::resource('modules',ModuleController::class);

// Permission Management

Route::resource('permissions',PermissionController::class);

// Profile
Route::get('profile/', [ProfileController::class, 'index'])->name('profile.index');
Route::post('profile/', [ProfileController::class, 'update'])->name('profile.update');

// Security
Route::get('profile/security', [ProfileController::class, 'changePassword'])->name('profile.password.change');
Route::post('profile/security', [ProfileController::class, 'updatePassword'])->name('profile.password.update');


// Backups
Route::resource('backups', BackupController::class)->only(['index', 'store', 'destroy']);
Route::get('backups/{file_name}', [BackupController::class, 'download'])->name('backups.download');
Route::delete('backups', [BackupController::class, 'clean'])->name('backups.clean');


Route::get('chat',[ChatController::class,'index'])->name('chat');
Route::resource('blogtags',BlogTagController::class);
Route::resource('blogs',BlogController::class);
Route::resource('subscriptions',SubscriptionController::class);

Route::get('pos',[PosController::class,'create'])->name('pos.create');
Route::post('pos/store',[PosController::class,'checkOut'])->name('inhouse.pos.store');






