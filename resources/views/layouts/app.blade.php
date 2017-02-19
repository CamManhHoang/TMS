<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Styles -->
    {!! Html::style('/css/app.css') !!}
    {!! Html::style('/css/pe-icon-7-stroke.css') !!}
    {!! Html::style('/css/ct-navbar.css') !!}
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

    @yield(('style'))

</head>
<body id="app-layout">

    <!-- Navigation Bar -->
    @include('layouts.partials.navbar')

    <!-- Content Section -->
    @yield('content')

    <!-- JavaScripts -->
    <script type="text/javascript" src="/js/jquery-1.9.1.js"></script>
    {!! Html::script('/js/app.js') !!}
    <script src="/js/ct-navbar.js"></script>
    @yield('script')

</body>
</html>
