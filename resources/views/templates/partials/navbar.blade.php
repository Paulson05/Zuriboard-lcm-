
<nav class="navbar navbar-light navbar-expand-md" style="position: fixed; z-index: 2; width: 100%; padding: 9px;box-shadow: 0px 1px 3px rgb(240,240,245); ">
     @if(Auth::check())

        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
            <i class="glyphicon glyphicon-align-left"></i>
            <span><i class="fa fa-bars" style="color: yellow; font-size: 40px;"></i></span>
        </button>
     @endif

    <div class="container-fluid"><a class="navbar-brand" href="#" style="width: 124px;height: 28px; background-color: black!important;" ></a>

        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                @if(!Auth::check())
                <li class="nav-item text-center" style="text-align: center;"><a class="nav-link active" href="{{route('auth.login')}}" style="width: 74px;text-align: center;border-radius: 17px;padding: 7px;">LOGIN</a><a class="nav-link" href="{{route('auth.register')}}" style="width: 93px;text-align: center;border-radius: 21px;">REGISTER</a></li>
                @else
                    <li class="nav-item"><a href="{{route('auth.logout')}}">log out</a>
                @endif
                <li class="nav-item"></li>

            </ul>
        </div>
    </div>
</nav>
