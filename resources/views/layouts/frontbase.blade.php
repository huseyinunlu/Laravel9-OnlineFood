<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>App Name - @yield('title')</title>
    <!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/js/masterslider/style/masterslider.css">
    <link rel="stylesheet" href="{{asset('assets')}}/js/masterslider/skins/black-2/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('head')
</head>

<body>


@include('home.header')


@show

<div id="page-content">
    @include('home.slider')
    @yield('content')
</div>
@include('home.footer')
@yield('foot')
</body>
</html>
