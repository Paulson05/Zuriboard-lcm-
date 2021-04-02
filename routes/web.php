<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('login',[AuthController::class, 'getLogin'])->name('auth.login');
Route::post('postlogin',[AuthController::class, 'postLogin'])->name('auth.postlogin');
Route::get('register', [AuthController::class, 'getRegister'])->name('auth.register');
Route::post('postregister', [AuthController::class, 'postRegister'])->name('auth.postregister');
Route::get ('index', [AuthController::class, 'index'])->name('auth.index');

Route::get('dashboard',[AuthController::class, 'dashboard'])->name('auth.dashboard');
