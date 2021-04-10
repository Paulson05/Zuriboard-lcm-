<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class TaskController extends Controller
{
    public function tasks(){
        $tasks = Tasks::all();
        return view('admin.tasks')->with([
            'tasks' => $tasks
        ]);
    }
    public  function postTasks(Request  $request){
        Alert::success('Success Title', 'Success Message');
        $array=collect($request->only(['course','task_title', 'description', 'task_file', 'task_points', 'time_status', 'submission_status']))->all();

        Tasks::create($array);

        return redirect()->back()->with('success', 'task created successfully');
    }

}
