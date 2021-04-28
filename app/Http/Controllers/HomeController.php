<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Stages;
use App\Models\Generalpost;
use App\Models\Posts;

use App\Notifications\TaskCompleted;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $users = users::find(1);
        // Users::find(1)->notify(new TaskCompleted);
    
        $stages = Stages::all();

        $posts = Posts::where('track_id',optional(auth()->user())->track_id)->get();
        $allposts = Posts::orderBy('updated_at', 'desc')->get();
        
        $generalposts= Generalpost::all();
        return view('home')->with([
            'stages' => $stages,
            'posts' => $posts,
            'allposts' => $allposts,
            'generalposts' =>  $generalposts
        ]);
    }
}
