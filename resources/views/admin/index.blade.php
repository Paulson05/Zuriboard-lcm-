<!DOCTYPE html>
<html>

@include('admin.partials.head')

<body id="page-top">
<div id="wrapper">
   @include('admin.partials.navbar')
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
          @include('admin.partials.sidebar')
                @yield('content')
            </div>
           </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
@include('admin.partials.footer')
@include('admin.partials.script')
@include('sweetalert::alert')
</body>

</html>
