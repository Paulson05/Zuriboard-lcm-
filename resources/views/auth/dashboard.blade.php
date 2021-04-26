@extends('templates.defaults')

@section('content')
    <div id="main">

        <div class="container">

            <div class="row">
                <div class="col-4">
                    <h1 style="font-size: 20px;">hello {{auth()->user()->getNameOrUsername()}}</h1>
                </div>

            </div>
            <div class="row">
                <div class="col-4">
                    <h1 class="" style="font-size: 10px;">student id: {{strtoupper(auth()->user()->student_id)}}</h1>
                </div>

            </div>
            <div class="row">

                <div class="card card-col-3 ml-1 ">
                    <i class="fa fa-signal" aria-hidden="true"></i>
                    <a href="">Stages</a>
                   
                  
                   @foreach($stages as $stage)
                   <span>{{$stage->stage}}</span>
                   @endforeach
                
                </div>

                <div class="card card-col-3">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <a href="">Total Stages</a>
                    <span>10</span>
                </div>
                <div class="card card-col-3">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                    <a href="">Total points</a>
                    <span>6/8</span>
                </div>
                <div class="card card-col-3">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                    <a href="">Track & Course</a>
                    <span>{{auth()->user()->track()->first()->track_name}}</span>
                </div>


            </div>

            <div class="row">

                <div class="card card-col-5">
                    <h1 class="text-left">Recent Posts</h1>
                    <div class="table-content">
                        <table  class="table">
                            <thead>
                               
                            <tr  class="t-row t-row-text" >
                               
                                <td>TITLE</td>
                                <td>AURTHOR</td>
                                <td>CATEGORY</td>
                            </tr>
                            </thead>
                            <tbody>
                               
                                @foreach($allposts as $post)
                            <tr  >
                              
                                <td>
                                   
                                    <h4 style="font-size: 10px;">{{$post->title_heading}}</h4>
                                   <h5 style="font-size: 10px;"> {{$post->title_body}}</h5>
                                   <h2  style="font-size: 10px;">{{date ('M j, Y ', strtotime($post->created_at))}}</h2>
                                </td>
                                <td>{{$post->authour}}</td>
                               
        
                                <td >{{$post->category}}</td>
                               
        



                            </tr>
                            @endforeach
                            
                            </tbody>

                        </table>
                        <a class="show-all-post" href="{{ route('auth.posts')}}" >
                           
                            show all post
                        </a>
                    </div>

                </div>

                <div class="card card-col-5">
                    <h1 class="text-left">Latest Tasks</h1>
                    <div class="table-content">
                        <table  class="table">
                            <thead style="width:10px !important;">
                            <tr class="t-row-text">
                                <td class="td">COURSE</td>
                                <td class="td">TASK TITLE</td>
                                <td class="td">TASK POINT</td>
                                <td class="td">STATUS</td>
                                <td class="td">DEADLINE</td>
                                <td class="td">....</td>
                            </tr>
                            </thead>
                            <tbody>

                                <td>
                                    <h1 style="font-size: 10px; color:red;">General</h1>
                                </td>
                                @foreach($generalposts as $post)
                            <tr  >
                               
                                <td>{{$post->course}}</td>
                                <td>{{$post->task_title}}</td>
                                <td>{{$post->task_points}}</td>
                                <td>graded(2.00)</td>
                                 <td>{{ $post->created_at->addDays(2)->diffForHumans()}}</td>
                                <td>view</td>
                                <td></td>
        
                            </tr>
                            @endforeach
                                <td>
                                    <h1 style="font-size: 10px; color:red;">PHP</h1>
                                </td>
                                @foreach($posts as $post)
                            <tr  >
                                <td>
                                    <h4 style="font-size: 10px;">{{$post->title_heading}}</h4>
                                   <h5 style="font-size: 10px;">bacend</h5>
                                </td>
                                <td>{{$post->authour}}</td>
                               
        
                                <td >{{$post->category}}</td>
                                <td>graded(2.00)</td>
                                 {{--  <td>{{Carbon::parse($post->deadline)->diffforhuman()}}</td>  --}}
                                <td>view</td>
                                <td></td>



                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                        <button class="show-all-post">show all post</button>
                    </div>

                </div>


                <div class="row">
                    <div class="card card-col-12 m-0" id="card">
                        <h1 class="text-left">Courses Enrolled in</h1>
                        <table class="">
                            <thead>
                            <tr class="t-row-text">
                                <td>TRACK</td>
                                <td>COURSE NAME</td>
                                <td>DESCRIPTION</td>

                            </tr>
                            </thead>
                            <tbody>

                            <tr class="t-row">

                                <td>BACKEND</td>
                                <td>PHP</td>
                                <td>PHP classes</td>

                            </tr>
                            <tr class="t-row">

                                <td>General</td>
                                <td>General introduction</td>
                                <td>General introduction</td>


                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection
