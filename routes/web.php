<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('login',[AuthController::class, 'getLogin'])->name('auth.login');
Route::post('postlogin',[AuthController::class, 'postLogin'])->name('auth.postlogin');
Route::get('register', [AuthController::class, 'getRegister'])->name('auth.register');
Route::post('postregister', [AuthController::class, 'postRegister'])->name('auth.postregister');
Route::get ('index', [AuthController::class, 'index'])->name('auth.index');
Route::get ('logout', [AuthController::class, 'getLogout'])->name('auth.logout');

Route::get ('posts',[AuthController::class, 'posts'])->name('auth.posts');
 Route::get ('task', [AuthController::class, 'tasks'])->name('auth.tasks');
 Route::get('teams',[AuthController::class, 'teams'])->name('auth.teams');
 Route::get('userprofile', [AuthController::class, 'userProfile'])->name('auth.userprofile');
Route::get('dashboard',[AuthController::class, 'dashboard'])->name('auth.dashboard');


Route::get('admin/index',[AdminController::class, 'index'])->name('admin.index');
