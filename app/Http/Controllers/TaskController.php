<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class TaskController extends Controller
{



    public function index(){
        $tasks = Tasks::all();
        return view('admin.tasks.tasks')->with([
            'tasks' => $tasks
        ]);
    }
    public  function store(Request  $request){
        Alert::success('Success Title', 'Success Message');
        $array=collect($request->only(['course','task_title', 'description', 'task_file', 'task_points', 'time_status', 'submission_status']))->all();

        Tasks::create($array);

        return redirect()->back()->with('success', 'task created successfully');
    }

public  function edit(Tasks $tasks){


    $tasks = Tasks::all();

    return view ('admin.tasks.edit')->with([

        'tasks' => $tasks

    ]);
}
    public function show(Tasks   $task){

        return view ('admin.tasks.show')->with([
            'task'=> $task  // note id is post

        ]);
    }


    public function destroy(Request $request, Tasks $task)
    {
        Alert::success('Success Title', 'Success Message');
        $task->delete();
        return redirect()->back()->with('success', 'task deleted!');
    }

}
