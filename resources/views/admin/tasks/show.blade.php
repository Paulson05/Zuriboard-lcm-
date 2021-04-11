@extends('admin.index')
@section('content')

    <div class="container">
        <a href="{{route('tasks.index')}}">Go Back</a>
        <p>{{$task->id}}</p>
        <p>course:{{$task->course}}</p>
        <p>titile:{{$task->task_title}}</p>
        <p>descripton:{{$task->description}}</p>
        <p>file:{{$task->task_file}}</p>
        <p>points:{{$task->task_points}}</p>
        <p>status:{{$task->time_status}}</p>
        <p>admission:{{$task->submission_status}}</p>


    </div>


@endsection
