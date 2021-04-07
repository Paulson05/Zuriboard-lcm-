<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function tasks(){
        return view('admin.tasks');
    }
    public  function postTasks(Request  $request){
        $array=collect($request->only(['course','task_title', 'description', 'task_file', 'task_points', 'time_status', 'submission_status']))->all();

        Tasks::create($array);

        return redirect()->back()->with('info', 'your are successfully register');
    }

}
