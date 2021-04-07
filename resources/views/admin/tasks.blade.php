@extends('admin.admin')

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
                    <form action="{{route('admin.posttasks')}}" method="post" enctype= "multipart/form-data" >
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

@endsection
