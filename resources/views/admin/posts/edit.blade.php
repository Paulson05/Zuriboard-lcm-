@extends('admin.index')

@section('content')



                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('posts.edit',['post' => $post->id]) }}" method="post" enctype= "multipart/form-data" >
                        @csrf

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>TITLE Heading</strong>
                                    <input type="text" name="title_heading" class="form-control" value="{{$post->title_heading}}"  >
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


    </div>

@endsection
