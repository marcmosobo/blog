<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="48x48" href="assets/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Fontawesome CSS-->
    <link rel="stylesheet" href="assets/css/all.css" />

    <!-- slick css -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/preloader.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/dark.css" />

    <title>{{config('app.name')}} - @yield('title')</title>
</head>

<body class="kavya-dark">
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
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/ResizeSensor.min.js"></script>
<script src="assets/js/theia-sticky-sidebar.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>
