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
                    <h1 style="font-size: 10px;">Dashboad->teams</h1>
                </div>

            </div>
            <div class="card card-col-12 m-0" id="card">

                <table class="">
                    <thead>
                    <tr class="t-row-text">
                        <td>#</td>
                        <td>NAME</td>
                        <td>DESCRIPTION</td>
                        <td>Max NUMBERS</td>
                        <td>MEMEBERS</td>
                        <td>...</td>


                    </tr>
                    </thead>
                    <tbody>


                    @foreach($teams as $team)
                        <tr>



                            <td>{{$team->id}}</td>
                            <td>{{$team->name}}</td>
                            <td>{{$team->description}}</td>
                            <td>{{$team->max_members}}</td>
                            <td>{{$team->members}}</td>

                            <td>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
