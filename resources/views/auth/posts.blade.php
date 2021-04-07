@extends('templates.defaults')


@section('content')
    <section id="main" class=" justify-content-center  ">

        <div class="row mt-5">
            <div class="row">
                <div class="col-4">
                    <h1 style="font-size: 20px;">POST</h1>
                </div>

            </div>
            <div class="row">
                <div class="col-4">
                    <h1 style="font-size: 10px;">Dashboad->post</h1>
                </div>

            </div>
            <div class="card card-col-12 m-0" id="card">

                <table class="">
                    <thead>
                    <tr class="t-row-text">
                        <td>TRACK</td>
                        <td>COURSE NAME</td>
                        <td>DESCRIPTION</td>
                        <td>TRACK</td>
                        <td></td>


                    </tr>
                    </thead>
                    <tbody>
     @foreach($posts as $post)
                    <tr class="t-row">
                        <td>
                            <h4 style="font-size: 10px;">{{$post->title_heading}}</h4>
                           <h5 style="font-size: 10px;"> {{$post->title_body}}</h5>
                        </td>

                        <td>{{$post->authour}}</td>
                        <td>{{$post->category}}</td>

                    </tr>

     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
