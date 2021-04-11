@extends('admin.index')

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
                    <form action="{{route('teams.store')}}" method="post" enctype= "multipart/form-data" >
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
    <div class="col-12">
        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>DESCRIPTION</th>
                <th>Max MEMBERS</th>
                <th>MEMBERS</th>
                <th></th>
            </tr>
                        @foreach($teams as $team)
            <tr>



                <td>{{$team->id}}</td>
                <td>{{$team->name}}</td>
                <td>{{$team->description}}</td>
                <td>{{$team->max_members}}</td>
                <td>{{$team->members}}</td>






                <td>





                    <a href="{{route('teams.show', ['team'=>$team->id])}}" title="show">
                        <i class="btn btn-danger fas fa-eye"></i>
                    </a>
                    <a href="" >
                        <i class="btn btn-danger fas fa-edit" ></i>
                    </a>
                    <form style="display: inline-block" method="post" action="{{route('teams.destroy', ['team' => $team->id]) }}" >
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
