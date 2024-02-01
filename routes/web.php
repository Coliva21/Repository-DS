<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\PermissionController;

use GuzzleHttp\Psr7\Request;

Route::resource('inventario', InventarioController::class)->middleware('auth');
Route::resource('usuarios', UserController::class)->middleware('auth');
Route::resource('roles', RoleController::class)->middleware('auth');
Route::resource('rolusuario', UserRoleController::class)->middleware('auth');


Auth::routes();

Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

});


