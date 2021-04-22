@extends('templates.defaults')
@section('content')
<div style="padding-top:120px;" >
    <ul 
        @foreach($users as $key => $value)
        <li>{{ $value->getNameOrUsername() }} </li>
        @endforeach
    </ul>


</div>
@endsection
