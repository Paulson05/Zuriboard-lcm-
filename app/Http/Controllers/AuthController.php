<?php

namespace App\Http\Controllers;
use App\Http\Requests\SignUpRequest;
use App\Models\Posts;
use App\Models\Tasks;
use App\Models\Teams;
use App\Models\Users;

use App\Notifications\TaskCompleted;
use Auth;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class AuthController extends Controller
{
public  function index(){


    return view('auth.index');
}

    public  function getRegister(){
        return view('auth.register');
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
    $tasks = Tasks::all();
    return view ('auth.tasks')->with([
        'tasks' => $tasks
    ]);
    }

    public function teams(){
        $teams = Teams::all();
    return view ('auth.teams')->with([
        'teams' => $teams
    ]);
    }

    public  function posts(){
    $posts = Posts::all();
    return view ('auth.posts')->with([
           'posts' => $posts
        ]);
    }

    protected  function userProfile(){
        $users = Users::all();
     return view ( 'auth.usersprofile')->with([
               'users' => $users
     ]);
     
    }
    public function dashboard(){
        return view('auth.dashboard');
    }
}

