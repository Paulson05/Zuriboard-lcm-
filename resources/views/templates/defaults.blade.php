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


</style>
@include('templates.partials.header')
<body class="text-center ">
@include('templates.partials.navbar')

<div class="" style="z-index: 2; top: 0px;">


    @yield('content')
    @include('templates.partials.alert')
</div>

</body>

</html>
