@extends('admin.admin')

@section('content')
    <button type="button" class="btn btn-primary  btn-sm m-3" data-toggle="modal" data-target="#myModal">
        Create Teams
    </button>

    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header ">
                    <h4 class="modal-title">New teams</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{route('admin.postteams')}}" method="post" enctype= "multipart/form-data" >
                        @csrf

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>NAME</strong>
                                    <input type="text" name="name" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>DESCRIPTION</strong>
                                    <input type="text" name="description" class="form-control">
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>Max NUMBERS</strong>
                                    <input type="text" name="max_members" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>MEMBERS</strong>
                                    <input type="text" name="members" class="form-control" >
                                </div>
                            </div>


                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-8 ">
                            <button type="submit" class="btn btn-primary">Create Teams</button>
                        </div>
                    </form>
                </div>



            </div>
        </div>


    </div>

@endsection
