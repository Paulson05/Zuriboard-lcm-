<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin');
    }





    public  function usersProfile(){
        return view('admin.usersprofile');
    }
    public  function  postUsersprofile(){

    }
}