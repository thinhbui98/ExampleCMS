<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::match(['get', 'post'], 'auth/login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout']);
});


Route::group(['prefix' => 'cms', 'middleware' => 'auth:admin'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('index', [AdminController::class, 'index']);
        Route::match(['get', 'post'], 'edit/{id}', [AdminController::class, 'edit']);
        Route::match(['get', 'post'], 'store', [AdminController::class, 'store']);
        Route::get('show/{id}', [AdminController::class, 'show']);
        Route::get('destroy/{id}', [AdminController::class, 'destroy']);
    });
});

