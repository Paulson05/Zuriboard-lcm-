<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Teams;
use App\Models\Users;

use Illuminate\Http\Request;
use Alert;
class TeamController extends Controller
{
    public function index(){
        $teams = Teams::all();
        return view('admin.teams.index')
        ->with([ 
            'teams' => $teams
        ]);
    }
    public  function store(Request  $request){
        Alert::success('Success Title', 'Success Message');
        $array=collect($request->only(['name','description', 'max_members', 'members']))->all();

        Teams::create($array);
        return redirect()->back()->with('success', 'team created successful');
    }
    public function show(Teams   $team){

        return view ('admin.teams.show')->with([
            'team'=> $team  // note id is post

        ]);
    }
    public function destroy(Request $request, Teams  $team)
    {

        Alert::success('Success Title', 'Success Message');
        $team->delete();
        return redirect()->back()->with('success', 'team deleted sucessfully!');
    }

    public function teamMembers(Teams $id){
    
        return view('auth.teammember')->with([
            'users' => $id->users()->get(),

        ]);
    }
}
