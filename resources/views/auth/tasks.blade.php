@extends('templates.defaults')


@section('content')
    <section id="main" class=" justify-content-center  ">

        <div class="row mt-5">
             <div class="row">
                  <div class="col-4">
                      <h1 style="font-size: 20px;">Dashboard</h1>
                  </div>

             </div>
            <div class="row">
                <div class="col-4">
                    <h1 style="font-size: 10px;">Dashboad->task</h1>
                </div>

            </div>
            <div class="card card-col-12 m-0" id="card">

                <table class="">
                    <thead>
                    <tr class="t-row-text">
                        <td>COURSE</td>
                        <td>TASK TITLE</td>
                        <td>DESCRIPTION</td>
                        <td>TASK FILE</td>
                        <td>TASK POINT</td>
                        <td>TIME STATUS</td>
                        <td>SUBMISSION STATUS</td>
                        <td>....</td>

                    </tr>
                    </thead>
                    <tbody>
                 @foreach($posts as $post)
                    <tr class="t-row">
                       
                        <td>{{$post->course}}</td>
                        <td>{{$post->task_title}}</td>
                        <td>{{$post->task_points}}</td>
                        <td>graded{{ $post->task_point }}:00</td>
                         <td>{{ $post->created_at->addDays(2)->diffForHumans()}}</td>
                        <td>view</td>
                        <td></td>

                    </tr>

                 @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
