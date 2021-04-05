@extends('templates.defaults')
@section('content')
    @if(!Auth::check())
        <div class="jumbotron text-center" style="height: 100vh;width: 100%;">
            <h1 class="text-center" style="font-size: 37px;color: rgb(100,102,103);width: 100%;height: 107px;"><br><br><strong>Welcome to Zuri Training's landing page</strong><br><br></h1>
            <p style="font-size: 11px;color: rgb(100,102,103);height: 107px;margin: 0px;width: 100%;"><br>Login / Register to get started<br><br></p>
        </div>
    @endif

  @if(Auth::check())


      <!-- Use any element to open the sidenav -->

   @include('auth.dashboard')

      <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

    @endif
@endsection
