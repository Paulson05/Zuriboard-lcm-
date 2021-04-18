@extends('admin.index')

@section('content')



                <div class="container">
                    <div class="col-12">

                        <form action="" method="post" enctype= "multipart/form-data" >
                            @csrf

                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-6">
                                    <div class="form-group">
                                        <strong>Course</strong>
                                        <input type="text" name="course" class="form-control" value = "{{Request::old('course') ?: ''}}"  >
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-6">
                                    <div class="form-group">
                                        <strong>Task Title</strong>
                                        <input type="text" name="task_title" class="form-control" value = "{{Request::old('task_title') ?: ''}}">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-6">
                                    <div class="form-group">
                                        <strong>DESCRIPTION</strong>
                                        <input type="text" name="description" class="form-control"  value = "{{Request::old('description') ?: ''}}" >
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-6">
                                    <div class="form-group">
                                        <strong>Task FILE</strong>
                                        <input type="text" name="task_file" class="form-control"  value = "{{Request::old('task_file') ?: ''}}" >
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-6">
                                    <div class="form-group">
                                        <strong>Task Points</strong>
                                        <input type="text" name="task_points" class="form-control" value="" >
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
                                <button type="submit" class="btn btn-primary">Edit Tasks</button>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>


    </div>
    <div class="col-12">

    </div>
@endsection
