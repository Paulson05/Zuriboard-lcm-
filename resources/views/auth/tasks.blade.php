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
                        <td>TRACK</td>
                        <td>COURSE NAME</td>
                        <td>DESCRIPTION</td>
                        <td>TRACK</td>
                        <td>COURSE NAME</td>
                        <td>DESCRIPTION</td>
                        <td>COURSE NAME</td>
                        <td>DESCRIPTION</td>

                    </tr>
                    </thead>
                    <tbody>
                 @foreach($tasks as $task)
                    <tr class="t-row">
                        <td>{{$task->id}}</td>
                        <td>{{$task->course}}</td>
                        <td>{{$task->task_title}}</td>
                        <td>{{$task->description}}</td>
                        <td>{{$task->task_file}}</td>
                        <td>{{$task->task_points}}</td>
                        <td>{{$task->time_status}}</td>
                        <td>{{$task->submission_status}}</td>
                    </tr>

                 @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
