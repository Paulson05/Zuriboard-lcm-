@extends('templates.defaults')

@section('content')
  

  

    <p>{{Auth::user()->userprofile->organization}}</p>
        


       {{--  <section id="main" style="background-color: yellow;">
           <h1 style="font-size: 10px;">Dashboard</h1>
             <p style="font-size: 10px;">dashboard->{{  Auth::user()->getNameOrUsername()}}'s profile</p> 
           <div class="row">
            <div class="col-2">

                <p>Who we are and what we do. mjn </p>

            </div>

            <div class="col-10 ">
                <h1 style="font-size: 10px;">okofu onyebuchi tsemye</h1>
                <h2 style="font-size: 10px;">student id:zuri 2939</h2>
                <h3 style="font-size: 10px;">student <span style="background-color: #0069d9; border-radius: 20px; color: white;" >backend</span></h3>

                <button class="tablink" onclick="openPage('Home', this, 'red')" id="defaultOpen">about</button>
                <button class="tablink" onclick="openPage('News', this, 'green')" >Employment history</button>
                <button class="tablink" onclick="openPage('Contact', this, 'blue')">Education History</button>
                <button class="tablink" onclick="openPage('About', this, 'orange')">Tech History</button>
                <button class="tablink" onclick="openPage('option', this, 'yellow')">Additional Information</button>


                <div id="Home" class="tabcontent">
                    <h3>Home</h3>
                    <p>Home is where the heart is..</p>
                </div>

                <div id="News" class="tabcontent">
                    <h3>News</h3>
                    <p>Some news this fine day!</p>
                </div>

                <div id="Contact" class="tabcontent">
                    <h3>Contact</h3>
                    <p>Get in touch, or swing by for a cup of coffee.</p>
                </div>

                <div id="About" class="tabcontent">
                    <h3>About</h3>
                    <p>Who we are and what we do.</p>
                </div>
                <div id="option" class="tabcontent">
                    <h3>About</h3>
                    <p>Who we are and what we do.</p>
                </div>


            </div>

        </div>
        </section>    --}}
@endsection
