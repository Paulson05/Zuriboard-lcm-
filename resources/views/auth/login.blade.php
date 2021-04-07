@extends('templates.defaults')
@section('content')
<div>
    <div class="jumbotron" style="height: 100vh; width:100%; padding: 150px 90px;">
       <div>
           <h1 class="text-center" style="font-size: 20px;">WELCOME BACK</h1>
       </div>
        <div>
            <h1 class="text-sm-center " style="font-size: 20px;">LOGIN HERE</h1>

        </div>
        <div class="container">
            <div class="container-fluid  ">

                <form method="post" action="{{route('auth.postlogin')}}">
                    @csrf
                    <div class="card container" style="width: 40%; height: 79%; border-radius: 9px;">
                        <div class="row">
                            <div class="  col-12 mt-2" >
                                <div>
                                    <label class="block" >Email</label>
                                </div>
                                <input class="form-control mt-2" name="email">
                                <label class="" style="margin: 0px;">Password</label>

                                <input type="password" class="form-control mt-2 mb-2" name="password">

                            </div>
                            <input type="checkbox" checked class="m-2"><span>remember me</span>

                        </div>
                        <button type="submit" class="btn btn-success justify-content-end " style="background-color: #880000!important;">login</button>

                    </div>
                </form>
            </div>
        </div>

</div>
@endsection
