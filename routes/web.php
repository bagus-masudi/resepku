<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/', [AuthController::class, 'loginStore'])->name('loginPost');

Route::post('/register', [AuthController::class, 'registerStore'])->name('registerPost');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::post('/home', [HomeController::class, 'likeStore'])->name('likePost');

    Route::get('/myresep', [HomeController::class, 'show'])->name('show');

    Route::get('/create', [HomeController::class, 'create'])->name('create');

    Route::get('detail/{recipe:id}', [HomeController::class, 'detail'])->name('detail');

    Route::post('/create', [HomeController::class, 'createStore'])->name('createPost');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});