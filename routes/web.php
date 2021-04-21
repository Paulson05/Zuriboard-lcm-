<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\StageController;
use Illuminate\Support\Facades\Route;

//use RealRashid\SweetAlert\Facades\Alert;


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

Route::get ('auth/posts',[AuthController::class, 'posts'])->name('auth.posts');

 Route::get ('auth/task', [AuthController::class, 'tasks'])->name('auth.tasks');
 Route::get('auth/teams',[AuthController::class, 'teams'])->name('auth.teams');
 Route::get('auth/{teamid}/teams',[AuthController::class, 'getJoin'])->name('auth.getjoin');

 Route::get('userprofile', [AuthController::class, 'userProfile'])->name('auth.userprofile');
Route::get('dashboard',[AuthController::class, 'dashboard'])->name('auth.dashboard');


Route::get('admin/index',[AdminController::class, 'index'])->name('admin.index');
Route::get('admin/users', [AdminController::class, 'users'])->name('admin.users');



Route::get('admin/usersprofile', [AdminController::class, 'usersProfile'])->name('admin.usersprofile');
Route::post('admin/post/usersprofile', [AdminController::class, 'postUsersprofile'])->name('admin.postsusersprofile');

Route::resource('posts', PostsController::class)->only(['index','store','show','update','destroy','edit',  ]);
Route::resource('tasks', TaskController::class)->only(['index','store','show','update','destroy','edit',  ]);
Route::resource('teams', TeamController::class)->only(['index','store','show','update','destroy','edit',  ]);
Route::resource('stages', StageController::class)->only(['index','store','show','update','destroy','edit',  ]);

