<?php

namespace App\Http\Controllers;
use App\Models\Stages;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StageController extends Controller
{
 
    public function index(){
        $stages = Stages::all();
        return view ('admin.stages.index')->with([
            'stages' => $stages
        ]);
    }


    public function store(Request $request){
        Alert::success('Success Title', 'Success Message');
        $array=collect($request->only(['stage']))->all();

        Stages::create($array);
        return redirect()->back()->with('success', 'stage created succecfully');
    }

    public function destroy(Request $request, Stages  $stage)
    {

        Alert::success('Success Title', 'Success Message');
        $stage->delete();
        return redirect()->back()->with('success', 'stage deleted sucessfully!');
    }
}
