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
                
                    <span style="margin-right: 10px !important;">your team{{auth()->user()->teams()->first()->name}}</span>|<a style="margin-left: 10px; font-size:10px;" href="{{ route('auth.teammember',['id'=>auth()->user()->teams()->first()->id]) }}">view other members team member</a>
                 

                  
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
                        <tr class="tr-2" >



                            <td  class="td-2">{{$team->id}}</td>
                            <td  class="td-2">{{$team->name}}</td>
                            <td  class="td-2">{{$team->description}}</td>
                            <td  class="td-2">{{$team->max_members}}</td>
                            <td class="td-2">{{ $team->join->count() }} </td>
                            <td> <a href="{{ route('auth.getjoin', ['teamid' => $team->id]) }}" class="td-2-join"> join</a></td>
                              
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
