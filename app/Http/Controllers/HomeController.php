<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Notifications\TaskCompleted;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $users = users::find(1);
        Users::find(1)->notify(new TaskCompleted);
        return view('home');
    }
}
