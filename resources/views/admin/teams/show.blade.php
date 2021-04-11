@extends('admin.index')
@section('content')

    <div class="container">

        <p>{{$team->id}}</p>
        <p>{{$team->name}}</p>
        <p>{{$team->description}}</p>
        <p>{{$team->max_members}}</p>
        <p>{{$team->members}}</p>

    </div>


@endsection
