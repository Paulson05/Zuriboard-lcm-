<?php

namespace App\Http\Controllers;
use App\Http\Requests\SignUpRequest;
use App\Models\Posts;
use App\Models\Tasks;
use App\Models\Teams;
use App\Models\Users;
use App\Models\Tracks;
use App\Models\Generalpost;

use App\Models\Jointeams;
use App\Models\Stages;


use App\Notifications\TaskCompleted;
use Auth;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class AuthController extends Controller
{
public  function index(){
   
    $stages = Stages::all();
           
    $generalposts= Generalpost::all();
    $posts = Posts::where('track_id',auth()->user()->track_id)->get();
    return view('auth.dashboard')->with([
        'stages' => $stages,
        'posts' => $posts,
        'generalposts' =>  $generalposts
    ]);
}

    public  function getRegister(){
          $user = Users::all();
          $tracks = Tracks::all();
        return view('auth.register')->with([
            'user' => $user, 
            'tracks' => $tracks
        ]);
    }
    public  function postRegister(SignUpRequest $request){
        Alert::success('Success Title', 'Success Message');

        $rand = substr($request->first_name,0,3).rand(100000,999999).substr($request->last_name,0,3);
        $array = collect($request->validated())->forget(['confirmed_password'])
            ->put('password', bcrypt($request->password))
            ->put('student_id',$rand)->all();
        Users::create($array);
        return redirect()->back()->with('success', 'your are successfully register');
    }
    public function getLogin(){

        return view('auth.login');
    }
    public function postLogin(Request $request){
        Alert::success('Success Title', 'Success Message');

        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){

            return redirect()->back()->with('info', 'could not sign you in with those details');
        }

        return redirect()->route('home')->with('danger', 'you are successfully signed in!');

    }


    public  function getLogout(){
        Alert::success('Success Title', 'Success Message');
       Auth::logout();
       return redirect()->route('home')->with( 'success', 'logout successfully !');
    }

    public  function  tasks(){
    $posts = Posts::where('track_id',auth()->user()->track_id)->paginate(10);
    return view ('auth.tasks')->with([
        'posts' => $posts
    ]);
    }

    public function teams(){
        $teams = Teams::all();
        $users = Users::all();
    return view ('auth.teams')->with([
        'teams' => $teams,
        'users' => $users
    ]);
    }

    public function teamMember(Team $id){
        
        return view ('auth.teammember')->with([
            'users' => $id->users()->get(),

        ]);
    }
  

   public function getJoin($teamid){
         
            // dd($teamid);
         $team = Teams::find($teamid);

         if(Auth::user()->join($team)){
           
             return redirect()->back();
             
         }

         $team->join()->create(['users_id'=>auth()->id()]);
        
       
         return redirect()->back();
         
   }

    public  function posts(){
    $posts = Posts::all();
    return view ('auth.posts')->with([
           'posts' => $posts
        
        ]);
    }

    public  function userProfile(){
        $users = Users::all();
     return view ( 'auth.usersprofile')->with([
               'users' => $users
     ]);
     
    }

    
    public function dashboard(){

        $posts = Posts::all();
        $stages = Stages::all();
        
        $allposts = Posts::orderBy('updated_at', 'desc')->get();
               
        $generalposts= Generalpost::all();
        return view('auth.dashboard')->with([
                   'stages' => $stages,
                   'allposts' => $allposts,
                   'posts' => $posts,
                  'generalposts' =>  $generalposts

        ]);
    }
}

