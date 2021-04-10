<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;
use Alert;
class TeamController extends Controller
{
    public function teams(){
        $teams = Teams::all();
        return view('admin.teams')->with([
            'teams' => $teams
        ]);
    }
    public  function postTeams(Request  $request){
        Alert::success('Success Title', 'Success Message');
        $array=collect($request->only(['name','description', 'max_members', 'members']))->all();

        Teams::create($array);
        return redirect()->back()->with('success', 'team created successful');
    }
}
