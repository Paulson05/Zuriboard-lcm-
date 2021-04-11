@extends('admin.index')

@section('content')
    <button type="button"  id="btn" class="btn btn-primary  btn-sm m-3" data-toggle="modal" data-target="#myModal">
        Create Posts
    </button>

    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header ">
                    <h4 class="modal-title">New Posts</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{route('posts.store')}}" method="post" enctype= "multipart/form-data" >
                        @csrf

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>TITLE Heading</strong>
                                    <input type="text" name="title_heading" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>TITLE  Body</strong>
                                    <input type="text" name="title_body" class="form-control" >
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>AUTHOUR</strong>
                                    <input type="text" name="authour" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>Category</strong>
                                    <input type="text" name="category" class="form-control">
                                </div>
                            </div>


                        </div>



                        <div class="col-xs-12 col-sm-12 col-md-8 ">
                            <button type="submit" class="btn btn-primary">Create Posts</button>
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
                <th>Tittle heading</th>
                <th>Title body</th>
                <th>Authour</th>
                <th>category</th>
                <th></th>
            </tr>

            @foreach($posts as $post)
                <tr>



                    <td>{{$post->id}}</td>
                    <td>{{$post->title_heading}}</td>
                    <td>{{$post->title_body}}</td>
                    <td>{{$post->authour}}</td>
                    <td>{{$post->category}}</td>
                    <td>





                        <a href="{{ route('posts.show', ['post'=>$post->id])}}" title="show">
                            <i class="btn btn-danger fas fa-eye"></i>
                        </a>
                        <a href="" >
                            <i class="btn btn-danger fas fa-edit" ></i>
                        </a>
                        <form style="display: inline-block" method="post" action="{{ route('posts.destroy',['post' => $post->id]) }}" >
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
