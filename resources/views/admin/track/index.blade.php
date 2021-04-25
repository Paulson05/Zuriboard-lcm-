@extends('admin.index')

@section('content')
    <button type="button" class="btn btn-primary  btn-sm m-3" data-toggle="modal" data-target="#myModal">
        Create Track
    </button>

    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header ">
                    <h4 class="modal-title">New track</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('admin.posttrack') }}" method="post" enctype= "multipart/form-data" >
                        @csrf

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-12">
                                <div class="form-group">
                                    <strong>NAME</strong>
                                    <input type="text" name="track_name" class="form-control" >
                                </div>
                            </div>
                            

                        </div>
                        
                         


                        <div class="col-xs-12 col-sm-12 col-md-8 ">
                            <button type="submit" class="btn btn-primary">Create stage</button>
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
                <th>Tracks</th>
                <th>All Tracks</th>
                
               
            </tr>
                        @foreach($tracks as $track)
            <tr>


                <td>{{$track->id }}</td>
                <td>{{$track->track_name }}</td>
               
               






                <td>





                    {{--  <a href="{{route('teams.show', ['team'=>$team->id])}}" title="show">  --}}
                        <i class="btn btn-danger fas fa-eye"></i>
                    </a>
                    <a href="" >
                        <i class="btn btn-danger fas fa-edit" ></i>
                    </a>
                    





                </td>

            </tr>
                        @endforeach
        </table>
    </div>
@endsection
