<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class PostsController extends Controller
{


    public function index(){
        $posts = Posts::all();
        return view('admin.posts.posts')->with([
            'posts' => $posts
        ]);
    }
    public function show(Posts   $post){

        return view ('admin.posts.show')->with([
            'post'=> $post  // note id is post

        ]);
    }
    public function store(Request $request){
        Alert::success('Success Title', 'Success Message');
        $array=collect($request->only(['title_heading', 'title_body','task_title', 'task_point','authour', 'deadline','category', 'track_id']))->all();

        Posts::create($array);
        return redirect()->back()->with('success', 'post created succecfully');
    }



    public function edit(Posts $post)
    {
            
        return view ('admin.posts.edit')->with([
            'post'=> $post,

        ]);
    }

    public function update(Request $request, Posts $post)
    {
        $post->update($request->only(['title_heading', 'title_body','task_title', 'task_point','authour', 'deadline','category', 'track_id']));

        return redirect()->route('posts.index')
            ->with('success', 'post updated sucessfully!');
    }

    public function destroy(Request $request, Posts $post)
    {
        Alert::success('Success Title', 'Success Message');
        $post->delete();
        return redirect()->back()->with('success', 'post deleted successfully!');
    }
}
