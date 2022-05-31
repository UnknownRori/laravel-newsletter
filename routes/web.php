<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
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

Route::get('/', [NewsController::class, 'index']);

Route::prefix('auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [AuthController::class, 'login']);
        Route::post('auth', [AuthController::class, 'auth']);
    });
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [NewsController::class, 'dashboard']);
});
