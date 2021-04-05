<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
public  function index(){
    return view('auth.index');
}

    public  function getRegister(){
        return view('auth.register');
    }
    public  function postRegister(Request $request){

        $this->validate($request, [
            'last_name' => 'required|max:30',
            'first_name' => 'required|max:20',
            'middle_name' => 'required|max:30',
            'username' => 'required|max:300',
            'gender' => 'required',
            'age' => 'required',
            'track' => 'required',
            'experience' => 'required',
            'employment' => 'required',
            'education' => 'required',
            'email'   =>  'required',
            'password' => 'required',
            'confirmed_password' => 'required',
            'info' => 'required'
        ]);


        $array = collect($request->only(['first_name', 'last_name', 'middle_name', 'username', 'gender', 'age', 'track', 'experience', 'employment', 'education', 'email', 'info']))->put('password', bcrypt($request->password))->put('confirmed_password', bcrypt($request->confirmed_password))->all();
        Users::create($array);
        return redirect()->back()->with('info', 'your are successfully register');
    }
    public function getLogin(){

        return view('auth.login');
    }
    public function postLogin(Request $request){

        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){

            return redirect()->back()->with('info', 'could not sign you in with those details');
        }

        return redirect()->route('home')
            ->with('info', 'you are successfully signed in!');

    }


    public  function getLogout(){
       Auth::logout();
       return redirect()->route('home');
    }

    public  function  tasks(){
    return view ('auth.tasks');
    }

    public function teams(){
    return view ('auth.teams');
    }

    public  function posts(){
    return view ('auth.posts');
    }

    protected  function userProfile(){

     return view ( 'auth.usersprofile');
    }
    public function dashboard(){
        return view('auth.dashboard');
    }
}
