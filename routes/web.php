<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
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

Route::get ('posts',[AuthController::class, 'posts'])->name('auth.posts');
 Route::get ('task', [AuthController::class, 'tasks'])->name('auth.tasks');
 Route::get('teams',[AuthController::class, 'teams'])->name('auth.teams');
 Route::get('userprofile', [AuthController::class, 'userProfile'])->name('auth.userprofile');
Route::get('dashboard',[AuthController::class, 'dashboard'])->name('auth.dashboard');


Route::get('admin/index',[AdminController::class, 'index'])->name('admin.index');
Route::get('admin/posts', [PostsController::class, 'posts'])->name('admin.posts');
Route::post('admin/post/posts', [PostsController::class, 'postPosts'])->name('admin.postposts');

Route::get('admin/tasks', [TaskController::class, 'tasks'])->name('admin.tasks');
Route::post('admin/post/tasks', [TaskController::class, 'postTasks'])->name('admin.posttasks');

Route::get('admin/teams', [TeamController::class, 'teams'])->name('admin.teams');
Route::post('admin/post/teams', [TeamController::class, 'postTeams'])->name('admin.postteams');

Route::get('admin/usersprofile', [AdminController::class, 'usersProfile'])->name('admin.usersprofile');
Route::post('admin/post/usersprofile', [AdminController::class, 'postUsersprofile'])->name('admin.postsusersprofile');

