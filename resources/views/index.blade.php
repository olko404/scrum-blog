<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <title> @yield('title')</title>
            @yield('meta')

    {{-- Stylesheets --}}
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset ('css/bootstrap.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset ('css/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset ('css/swiper.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset ('css/dark.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset ('css/font-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset ('css/animate.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset ('css/magnific-popup.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset ('css/responsive.css') }}" type="text/css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>



</head>

<body class="stretched">

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93508929-1', 'auto');
    ga('send', 'pageview');

</script>

<div id="wrapper" class="clearfix">

    @include("layouts.top-bar")
    @include("layouts.header")

        {{-- dinamic part. define in each folder of page --}}
    @yield('content')
    {{-- end dinamic part --}}


    @include ("layouts.footer")

</div>

{{-- Go To Top --}}
<div id="gotoTop" class="icon-angle-up"></div>
{{--@stack('custom-scripts')--}}

{{--External JavaScripts --}}
<script src="{{ URL::asset ('js/jquery.min.js') }}"></script>
{{--<script>$(".alert").alert('close')</script>--}}
<script src="{{ URL::asset ('js/plugins.js') }}"></script>

{{-- Footer Scripts --}}
<script type="text/javascript" src="{{ URL::asset ('js/functions.js')}}"></script>



</body>
</html>