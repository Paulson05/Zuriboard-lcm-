<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Notifications\TaskCompleted;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $user = user::find(1);
        User::find(1)->notify(new TaskCompleted);
        return view('home');
    }
}
