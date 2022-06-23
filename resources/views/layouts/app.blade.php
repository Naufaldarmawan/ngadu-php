<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - Ngadu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('/landingpage/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{url('/landingpage/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('/landingpage/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('/landingpage/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{url('/landingpage/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('/landingpage/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('/landingpage/css/style.css')}}" rel="stylesheet">
</head>

<body>
    @include('components.navbar')
    @yield('content')

</body>

 <!-- Vendor JS Files -->
  <script src="{{url('/landingpage/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{url('/landingpage/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{url('/landingpage/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('/landingpage/lib/easing/easing.min.js')}}"></script>
  <script src="{{url('/landingpage/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{url('/landingpage/lib/wow/wow.min.js')}}"></script>
  <script src="{{url('/landingpage/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{url('/landingpage/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{url('/landingpage/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('/landingpage/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('/landingpage/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{url('/landingpage/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('/landingpage/js/main.js')}}"></script>
</html>