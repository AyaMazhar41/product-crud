<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('light/images/favicon.ico')}}">

     <!--Morris Chart-->
     <link rel="stylesheet" href="{{asset('light/libs/morris-js/morris.css')}}">



    <!-- App css -->
    <link href="{{asset('light/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('light/css/icons.min.css')}}" rel="stylesheet" type="text/css">


   <link href="{{asset('light/css/app-rtl.min.css')}}" rel="stylesheet" type="text/css">


    @stack('styles')


</head>
