@extends('templates.defaults')

@section('content')
  <div class="row mt-5">
  <div class="col-10 mt-5" >
      <button class="tablink" onclick="openPage('Home', this, 'red')">Home</button>
      <button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">News</button>
      <button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
      <button class="tablink" onclick="openPage('About', this, 'orange')">About</button>
      <button class="tablink" onclick="openPage('option', this, 'yellow')">option</button>


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
      <div class="col-2">

      </div>
  </div>
    </section>
@endsection
