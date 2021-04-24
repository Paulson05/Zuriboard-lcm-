<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Users;
use App\Models\Tracks; 
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

public  function track(){
           $tracks = Tracks::all();

    return view ('admin.track.index')->with([
        'tracks' => $tracks
    ]);
}

public  function postTrack(Request $request){
          
    Alert::success('Success Title', 'Success Message');

        $array=collect($request->only(['track_name']))->all();

        Tracks::create($array);
        return redirect()->back()->with('success', 'track created succecfully');
}
    public  function  postUsersprofile(){

    }
}
