@extends('templates.defaults')
@section('content')
    @if(!Auth::check())
        <div class="jumbotron text-center" style="height: 100vh;width: 100%;">
            <h1 class="text-center" style="font-size: 37px;color: rgb(100,102,103);width: 100%;height: 107px;"><br><br><strong>Welcome to Zuri Training's landing page</strong><br><br></h1>
            <p style="font-size: 11px;color: rgb(100,102,103);height: 107px;margin: 0px;width: 100%;"><br>Login / Register to get started<br><br></p>
        </div>
    @endif

  @if(Auth::check())
      <div id="id"></div>

      <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="sidebar-menu">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <a href="">Dashboard</a>
          </div>
          <div class="sidebar-menu">
              <i class="fa fa-tasks" aria-hidden="true"></i>
              <a href="">Tasks</a>
          </div>
          <div class="sidebar-menu">
              <i class="fa fa-users" aria-hidden="true"></i>
              <a href="">TEAMs</a>
          </div>
          <div class="sidebar-menu">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <a href="">Posts</a>
          </div>
          <div class="sidebar-menu">
              <i class="fa fa-user" aria-hidden="true"></i>
              <a href="">Users profile</a>
          </div>
          <div class="sidebar-menu">

          </div>




      </div>

      <!-- Use any element to open the sidenav -->
      @if(Auth::check())
          <span onclick="openNav()" class="openbtn"><i class="fa fa-bars"></i></span>

      @endif
      <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
      <div id="main">
          <div class="container">
              <div class="row">

                  <div class="card card-col-3 ml-1 ">
                      <i class="fa fa-signal" aria-hidden="true"></i>
                      <a href="">Stages</a>
                      <span>0</span>
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
                      <span>Back End-php</span>
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

                              <tr  >
                                  <td>Functions in Dart
                                      Tue 30, Mar 2021</td>
                                  <td>Rhemi</td>



                              </tr>
                              <tr >
                                  <td>Functions in Dart
                                      Tue 30, Mar 2021</td>
                                  <td>Rhemi</td>



                              </tr>
                              </tbody>

                          </table>
                          <button class="show-all-post">show all post</button>
                      </div>

                  </div>

                  <div class="card card-col-5">
                      <h1 class="text-left">Latest Tasks</h1>
                      <div class="table-content">
                          <table  class="table">
                              <thead style="width:10px !important;">
                              <tr class="t-row-text">
                                  <td class="td">TITLE</td>
                                  <td class="td">AURTHOR</td>
                                  <td class="td">CATEGORY</td>
                                  <td class="td">TITLE</td>
                                  <td class="td">AURTHOR</td>
                                  <td class="td">CATEGORY</td>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td class="td">TITLE</td>
                                  <td class="td">AURTHOR</td>
                                  <td class="td">CATEGORY</td>
                                  <td class="td">TITLE</td>
                                  <td class="td">AURTHOR</td>
                                  <td class="td">CATEGORY</td>
                              </tr>

                              <tr>
                                  <td class="td">TITLE</td>
                                  <td class="td">AURTHOR</td>
                                  <td class="td">CATEGORY</td>
                                  <td class="td">TITLE</td>
                                  <td class="td">AURTHOR</td>
                                  <td class="td">CATEGORY</td>
                              </tr>


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
    @endif
@endsection
