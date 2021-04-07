@extends('templates.defaults')


@section('content')
    <section id="main" class=" justify-content-center  ">

        <div class="row mt-5">
            <div class="row">
                <div class="col-4">
                    <h1 style="font-size: 20px;">POST</h1>
                </div>

            </div>
            <div class="row">
                <div class="col-4">
                    <h1 style="font-size: 10px;">Dashboad->post</h1>
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
                        <td></td>


                    </tr>
                    </thead>
                    <tbody>

                    <tr class="t-row">
                        <td>BACKEND</td>
                        <td>PHP</td>
                        <td>BACKEND</td>
                        <td>PHP</td>
                        <td>PHP classes</td>

                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
