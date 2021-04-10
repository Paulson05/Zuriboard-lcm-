<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class PostsController extends Controller
{
    public function  posts(){
        $posts = Posts::all();
        return view('admin.posts')->with([
             'posts' => $posts
        ]);
    }
    public  function postPosts(Request  $request){
        Alert::success('Success Title', 'Success Message');
        $array=collect($request->only(['title_heading', 'title_body','authour', 'category']))->all();

        Posts::create($array);
        return redirect()->back()->with('success', 'post created succecfully');

    }
    public function show($id){

        return view ('')->with([
            'id'=> $id,

        ]);
    }
    public function edit($id)
    {

        return view ('')->with([
            'id'=> $id,

        ]);
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
