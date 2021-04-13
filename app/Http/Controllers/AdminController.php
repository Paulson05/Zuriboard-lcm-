<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }



    public function users(){
        $users = Users::all();
        return view('admin.users.index')->with([
            'users' => $users
        ]);
}

    public  function usersProfile(){
        return view('admin.usersprofile');
    }
    public  function  postUsersprofile(){

    }
}
