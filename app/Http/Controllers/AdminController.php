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
      
        return view('admin.users.index')->with([
          
        ]);
}

   
    public  function  postUsersprofile(){

    }
}
