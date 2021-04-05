@extends('templates.defaults')

@section('content')
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
    @endsection
