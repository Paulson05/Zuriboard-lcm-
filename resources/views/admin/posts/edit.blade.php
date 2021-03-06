@extends('admin.index')

@section('content')



                <!-- Modal body -->
                <div class="modal-body">
 
                    <form action="{{ route('posts.update',['post' => $post->id]) }}" method="post" enctype= "multipart/form-data" >
                        @method('PUT')
                        @csrf

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>TITLE Heading</strong>
                                    <input type="text" name="title_heading" class="form-control" value="{{ $post->title_heading }}" >
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>TITLE  Body</strong>
                                    <input type="text" name="title_body" class="form-control"  value="{{ $post->title_body }}"  >
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>AUTHOUR</strong>
                                    <input type="text" name="authour" class="form-control"  value="{{ $post->authour}}" >
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>Category</strong>
                                    <input type="text" name="category" class="form-control"  value="{{ $post->category}}" >
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
