<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);

Route::prefix('auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('auth', [AuthController::class, 'auth']);

        Route::get('signup', [UserController::class, 'create']);
        Route::post('signup', [UserController::class, 'store']);
    });
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');
});

Route::resource('news', NewsController::class)->only(['show', 'index'])->scoped([
    'news' => 'slug'
]);

Route::middleware('auth')->group(function () {
    Route::resource('news', NewsController::class)->except(['show', 'index']);
    Route::get('dashboard', DashboardController::class);
});
