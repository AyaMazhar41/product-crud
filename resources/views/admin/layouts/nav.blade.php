<!-- Topbar Start -->
<div class="navbar-custom">


    <ul class="list-unstyled topnav-menu float-right mb-0">



        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('light/images/users/user-1.jpg')}}" alt="user-image' class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{auth()->user()->name}} <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                <a style="color: #000; cursor:pointer" class="dropdown-item notify-item"
                    onclick="document.getElementById('logout_form').submit()">
                    <i class="fe-log-out"></i>
                    <span> تسجيل الخروج</span>
                </a>
            </div>
        </li>

    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo text-center">
            <span class="logo-lg">
                <img src="{{ asset('light/images/users/user-1.jpg')}}" alt="" height="16" >
                <!-- <span class="logo-lg-text-light">Xeria</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">X</span> -->
                <img src="{{ asset('light/images/users/user-1.jpg')}}" alt="" height="24" >
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile disable-btn waves-effect">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li>
            <h4 class="page-title-main">Dashboard</h4>
        </li>

    </ul>



</div>
<!-- end Topbar -->
<form style="display: none;" id="logout_form" action="{{ route('logout') }}" method="post">@csrf
</form>
