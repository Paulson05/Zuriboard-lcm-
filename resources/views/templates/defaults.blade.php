<!DOCTYPE html>
<html>

<style>
    nav{
        background-color: white;
    }
    label{
        float: left!important;
        font-weight: lighter!important;
        font-size: 10px!important;
    }
    option{
        font-weight: lighter!important;
        font-size: 10px!important;
    }
  .btn-text{
        float: right;
        margin-left: 190px!important;
      margin-bottom: 20px;
    }

  @media (max-width: 1200px) {
      .card{
          /*background-color: blue!important;*/
          width: 60%!important;
          margin: auto;
          padding: 3px!important;

      }
  }

    @media (max-width: 600px) {
        .card{
            /*background-color: red!important;*/
            width: 100%!important;
            padding: 3px!important;
        }
        .btn-text{
            float: right;
            margin: 5px!important;
            width: 100%;


        }
    }

    h2{
        text-transform: capitalize;
        font-size: large;
        font-style: italic ;
        border:1px solid white;
        letter-spacing: 2px;
        width: 50%;
        text-align:center;
        margin: auto;
        margin-bottom:5px;
        color: rgb(214, 201, 13);
    }

    #id{

        /* clip-path:polygon(100% 0, 100% 82%, 45% 100%, 0 100%, 0 0) ; */
        width: 100%;
        overflow: hidden;
        height: 100%;
        position: absolute;
        z-index: -1;



    }
    #mySidenav{
        display: inline-block;
    }


    /* The side navigation menu */
    .sidenav {
        height: 100%; /* 100% Full-height */
        width: 0; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 3; /* Stay on top */
        top: 0px;
        left: 0;
        /*background-color: rgb(221, 214, 214); !* Black*!*/
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 60px; /* Place content 60px from the top */
        transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
    }

    /* The navigation menu links */
    .sidenav a {
        text-align: center;
        text-decoration: none;
        font-size: 15px;
        color: #818181;
        display: block;
        transition: 0.3s
    }
    .overlay {
        position: absolute;
        bottom: 0;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5); /* Black see-through */
        color: #f1f1f1;
        width: 100%;
        transition: .5s ease;
        opacity:0;
        color: white;
        font-size: 20px;
        padding: 20px;
        text-align: center;
    }


    /* When you mouse over the container, fade in the overlay title */
    .container:hover .overlay {
        opacity: 1;
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover, .offcanvas a:focus{
        color: #f1f1f1;
    }
    .openbtn{
        display:block;
    }

    /* Position and style the close button (top right corner) */
    .closebtn {
        position: absolute;
        top: 0;


        right: 5px;
    color: red !important;
        font-size: 46px !important;
        border-radius: 20px;
      text-decoration:  none !important;
        margin-left: 50px;
    }


    /* Style page content - use ths if you want to push the page content to the right when you open the side navigation */
    #main {
        transition: margin-left .5s;
        padding: 20px;
        height: 100vh;

    }
   .container{

       margin-top: 50px !important;
   }
    .sidebar-menu{
        background: white;
        margin-top: 1px ;
        height: 75px;
    }
    .sidebar-menu,.fa{
        text-align: center;
        font-size: 20px;
    }
    .row{
        width: 100%;
        display: flex !important;
        padding-left: 25px !important;
    }


    .card{
        padding: 2px !important;
        height: 130px;
        margin: 2px;
        text-align: center;
        border-radius: 12px !important;

    }
    .card-col-3{
        width: 24% !important;
        padding-top: 23px !important;
        font-size: 14px;
    }
    .card-col-3 i{
        font-size: 30px !important;
        color: rgb(142, 164, 204);
    }

    .card-col-5{
        width: 49% !important;
        height: 100% !important;

    }

    .card-col-12{
        width: 100% !important;
        height: 100% !important;
    }
    .text-left{
        font-size: 15px;
        padding: 10px;
        float: left !important;
    }
    /* .table{
        background-color: red !important;
    } */
    .table-content{
        height: 500px;
    }
    .t-row {
        border-top: 1px solid rgb(243, 240, 240) !important;
        font-size: 20px;
    }
    td{
        font-size: 10px;
    }

    .t-row-text{
        color: rgb(142, 164, 204);
    }
    .btn{
        border-radius: 12px  !important;

        border: 1px solid black !important;
        margin-top:2px;
        color: rgb(65, 63, 63) ;
        font-size: 10px !important;
    }
    .show-all-post{

        width: 27%;
        background-color: red;
        border-radius: 12px;
        border: 1px solid  !important;
        color: white;
        float: left !important;
        margin: 10px;

    }
  .task{

  }



    /* Set height of body and the document to 100% to enable "full page tabs" */
    body, html {
        height: 100%;
        margin: 0;
        font-family: Arial;
    }

    /* Style tab links */
    .tablink {
        background-color: #555;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        font-size: 17px;
        width: 25%;
    }

    .tablink:hover {
        background-color: #777;
    }

    /* Style the tab content (and add height:100% for full page content) */
    .tabcontent {
        color: white;
        display: none;
        padding: 100px 20px;
        height: 100%;
    }

    #Home {background-color: red;}
    #News {background-color: green;}
    #Contact {background-color: blue;}
    #About {background-color: orange;}





</style>
@include('templates.partials.header')
<body class="text-center ">
@include('templates.partials.navbar')

<div class="" style="z-index: 2; top: 0px;">

   @include('templates.partials.sidebar')
    @yield('content')
{{--    @include('templates.partials.alert')--}}
</div>
 @include('templates.partials.script')
</body>

</html>
