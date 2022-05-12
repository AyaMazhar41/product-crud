<!DOCTYPE html>
<html lang="en">
    @include('admin.layouts.header')

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('admin.layouts.nav')

            @include('admin.layouts.sidebar')

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        @yield('content')

                    </div> <!-- container-fluid -->

                </div> <!-- content -->
            </div>


        </div>
        <!-- END wrapper -->

        @include('admin.layouts.footer')
    </body>
</html>
