<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class=" js flexbox no-touch"> <!--<![endif]-->
    <head>
        <meta charset="utf-8"/>
        <title></title>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="Author" content="hieuhx"/>
        @yield('page-meta')
        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <link rel="shortcut icon" href="" type="image/x-icon">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend/newstarland/css/app.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend/newstarland/css/lightslider.css') }}" />
        <script type="text/javascript" src="{{ asset('frontend/newstarland/js/lightslider.js') }}" ></script>


        @yield('page-css')

    </head>
    <body  id="app-layout" class="home page-template page-template-template-front-page-slider page-template-template-front-page-slider-php page page-id-7 siteorigin-panels siteorigin-panels-home esg-blurlistenerexists">
        <div id="app">
            <div class="boxed-container">
                <!-- header -->
                @include('layouts.newstarland.header')
                <!-- /header -->
                <!-- nav -->
                @include('layouts.newstarland.menu')
                <!-- /nav -->

                <!-- content -->
                @yield('content')
                <!-- /content -->

                @include('layouts.newstarland.footer')
            </div>
        </div>
        <!-- SCRIPT -->
        <!-- Global Js
       ================================================== -->
        @yield('page-script')

    </body>
</html>