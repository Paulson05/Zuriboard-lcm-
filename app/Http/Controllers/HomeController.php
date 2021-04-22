<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Stages;
use App\Notifications\TaskCompleted;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $users = users::find(1);
        // Users::find(1)->notify(new TaskCompleted);
        $stages = Stages::all();
        return view('home')->with([
            'stages' => $stages
        ]);
    }
}
