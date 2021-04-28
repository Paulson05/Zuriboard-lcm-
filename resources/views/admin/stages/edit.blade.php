@extends('admin.index')

@section('content')



                <!-- Modal body -->
                <div class="modal-body">
 
                    <form action="{{ route('stages.update',['stage' => $stage->id]) }}" method="post" enctype= "multipart/form-data" >
                        @method('PUT')
                        @csrf

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-6">
                                <div class="form-group">
                                    <strong>TITLE Heading</strong>
                                    <input type="text" name="stage" class="form-control" value="{{ $stage->stage }}" >
                                </div>
                            </div>
                           
                            
                            


                        </div>



                        <div class="col-xs-12 col-sm-12 col-md-8 ">
                            <button type="submit" class="btn btn-primary">update</button>
                        </div>

                    </form>
                </div>



            </div>
        </div>


    </div>
    <div class="col-12">


    </div>

@endsection
