<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="48x48" href="{{asset('assets/images/favicon.png')}}">

    <!-- Google Fonts -->
@include('blog.partials.google_fonts')
    <!-- Bootstrap CSS -->
@include('blog.partials.bootstrap_css')

    <!-- Fontawesome CSS-->
@include('blog.partials.font_awesome_css')

    <!-- slick css -->
@include('blog.partials.slick_css')

    <!-- Custom CSS -->
@include('blog.partials.custom_css')

    <title>{{config('app.name')}} - @yield('title')</title>
</head>

<body>
<!-- Preloader -->
<div class="preloader-wrapper">
    <div class="preloader">
        <div class="preloader-circle" id="status">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- Preloader end -->

<!-- Header -->
<header>
@include('blog.partials.header')
</header>
<!-- header end -->


@yield('content')


<!-- Footer section -->
<footer class="footer-section">
    @include('blog.partials.footer')
</footer>
<!-- Footer section end -->

<!-- Scroll to top -->
<div id="stop" class="scroll-to-top">
    <span><a href="#"><i class="fas fa-arrow-up"></i></a></span>
</div>
<!-- Scroll to top end -->

<!-- Javascript -->
@include('blog.partials.javascript')
</body>

</html>
