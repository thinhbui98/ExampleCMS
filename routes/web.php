<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function () {
    Route::any('/', function () {
        return redirect('admin/login');
    });
    Route::any('login', [AdminController::class, 'login']);

    Route::get('index', [AdminController::class, 'index']);

    Route::any('store', [AdminController::class, 'store']);

    Route::put('show/{id}', [AdminController::class, 'show']);

    Route::delete('destroy/{id}', [AdminController::class, 'destroy']);
});