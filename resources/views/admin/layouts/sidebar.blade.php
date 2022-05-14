<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('light/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-lg">
            <div class="dropdown">
                <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">Nowak Helme</a>

            </div>

        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">


                <li>
                    <a href="{{route('products.index')}}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> products </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('activities.index')}}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> logs </span>
                    </a>
                </li>








            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
