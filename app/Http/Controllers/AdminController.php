<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin');
    }

    public function  posts(){
        return view('admin.posts');
    }

    public function teams(){
        return view('admin.teams');
    }

    public function tasks(){
        return view('admin.tasks');
    }

    public  function usersProfile(){
        return view('admin.usersprofile');
    }
}
