<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Users;
use App\Models\Tracks;
class TrackController extends Controller
{

    public  function index(){
        $tracks = Tracks::all();

 return view ('admin.track.index')->with([
     'tracks' => $tracks
 ]);
}

public  function store(Request $request){
          
    Alert::success('Success Title', 'Success Message');

        $array=collect($request->only(['track_name']))->all();

        Tracks::create($array);
        return redirect()->back()->with('success', 'track created succecfully');
}

public function edit(Tracks $track)
{
        
    return view ('admin.track.edit')->with([
        'track' =>$track

    ]);
}

public function update(Request $request, Tracks $track)
{
    // $this->validate($request,[
    //    'title'=>'required|max:250',
    //    'slug'=>'required|alpha_num|max:250',
    //     'body'=>'required|max:4000',
    //     'category_id'=>'required|exists:categories,id'
    // ]);

        $track->update($request->only(['track_name']));

    return redirect()->route('track.index')
        ->with('success', 'track updated sucessfully!');
}

}
