<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>لوحة تحكم الادارة</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('light/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('light/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('light/css/icons.min.css')}}" rel="stylesheet" type="text/css" />


   <link href="{{asset('light/css/app-rtl.min.css')}}" rel="stylesheet" type="text/css">
   <link href="{{asset('light/css/custom-dashboard.css')}}" rel="stylesheet" type="text/css" />

   <link href="{{asset('light/css/font.css')}}" rel="stylesheet" type="text/css">
</head>


<body class="authentication-bg">



    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                @yield('content')
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    @include('admin.layouts.footer')

</body>

</html>
