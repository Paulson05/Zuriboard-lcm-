<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function teams(){
        $teams = Teams::all();
        return view('admin.teams')->with([
            'teams' => $teams
        ]);
    }
    public  function postTeams(Request  $request){
        $array=collect($request->only(['name','description', 'max_members', 'members']))->all();

        Teams::create($array);
        return redirect()->back()->with('info', 'your are successfully register');
    }
}
