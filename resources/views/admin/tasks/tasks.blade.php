@extends('admin.index')

@section('content')
    <button type="button" class="btn btn-primary  btn-sm m-3" data-toggle="modal" data-target="#myModal">
        Create Tasks
    </button>

    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header ">
                    <h4 class="modal-title">New Tasks</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->



                <div class="modal-body">
                    <form action="{{route('tasks.store')}}" method="post" enctype= "multipart/form-data" >
                        @csrf

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>Course</strong>
                                    <input type="text" name="course" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>Task Title</strong>
                                    <input type="text" name="task_title" class="form-control">
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>DESCRIPTION</strong>
                                    <input type="text" name="description" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>Task FILE</strong>
                                    <input type="text" name="task_file" class="form-control" >
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>Task Points</strong>
                                    <input type="text" name="task_points" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>Time Status</strong>
                                    <input type="text" name="time_status" class="form-control" placeholder="create new categories">
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-12">
                                <div class="form-group">
                                    <strong>Submission Status</strong>
                                    <input type="text" name="submission_status" class="form-control">
                                </div>
                            </div>



                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 ">
                            <button type="submit" class="btn btn-primary">Create Tasks</button>
                        </div>
                    </form>
                </div>



            </div>
        </div>


    </div>
    <div class="col-12">
        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>#</th>
                <th>course</th>
                <th>task_title</th>
                <th>description</th>
                <th>task_file</th>
                <th>task_points</th>
                <th>time_status</th>
                <th>submission_status</th>
                 <th></th>
            </tr>
                        @foreach($tasks as $task)
            <tr>



                <td>{{$task->id}}</td>
                <td>{{$task->course}}</td>
                <td>{{$task->task_title}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->task_file}}</td>
                <td>{{$task->task_points}}</td>
                <td>{{$task->time_status}}</td>
                <td>{{$task->submission_status}}</td>



                <td>





                    <a href="{{ route('tasks.show', ['task' =>$task->id])}}" title="show">
                        <i class="btn btn-danger fas fa-eye"></i>
                    </a>
                    <a href="" >
                        <i class="btn btn-danger fas fa-edit" ></i>
                    </a>
                    <form style="display: inline-block" method="post" action="{{ route('tasks.destroy',['task' => $task->id]) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm p-0"><i class="btn btn-danger fas fa-trash-alt" ></i></button>
                    </form>





                </td>

            </tr>
                        @endforeach
        </table>
    </div>
@endsection
