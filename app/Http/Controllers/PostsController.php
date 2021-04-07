<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function  posts(){
        $posts = Posts::all();
        return view('admin.posts')->with([
             'posts' => $posts
        ]);
    }
    public  function postPosts(Request  $request){

        $array=collect($request->only(['title_heading', 'title_body','authour', 'category']))->all();

        Posts::create($array);
        return redirect()->back()->with('info', 'your are successfully register');

    }
}
