@extends('admin.index')
@section('content')

  <div class="container">

      <p>{{$post->title_heading}}</p>
      <p>{{$post->title_body}}</p>
      <p>{{$post->authour}}</p>
      <p>{{$post->category}}</p>
  </div>


@endsection
