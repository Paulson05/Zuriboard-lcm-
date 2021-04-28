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


    public function edit(Stages $stage)
    {
            
        return view ('admin.stages.edit')->with([
            'stage'=> $stage,

        ]);
    }



    public function store(Request $request){
        Alert::success('Success Title', 'Success Message');
        $array=collect($request->only(['stage']))->all();

        Stages::create($array);
        return redirect()->back()->with('success', 'stage created succecfully');
    }
    public function update(Request $request, Stages $stage)
    {
        // $this->validate($request,[
        //    'title'=>'required|max:250',
        //    'slug'=>'required|alpha_num|max:250',
        //     'body'=>'required|max:4000',
        //     'category_id'=>'required|exists:categories,id'
        // ]);

            $stage->update($request->only(['stage']));

        return redirect()->route('stages.index')
            ->with('success', 'stage updated sucessfully!');
    }
    public function destroy(Request $request, Stages  $stage)
    {

        Alert::success('Success Title', 'Success Message');
        $stage->delete();
        return redirect()->back()->with('success', 'stage deleted sucessfully!');
    }
}
