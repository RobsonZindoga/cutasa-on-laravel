<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>CUT | Alumni</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">

        <link rel="stylesheet" href="css/aos.css">

        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('white') }}/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('white') }}/img/favicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('white') }}/css/nucleo-icons.css" rel="stylesheet"/>
        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('white') }}/css/white-dashboard.css?v=1.0.0" rel="stylesheet"/>
        <link href="{{ asset('white') }}/css/theme.css" rel="stylesheet"/>

        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel='icon' href='asa.ico' type='image/x-icon'>
    </head>
    <body class="white-content {{ $class ?? '' }}">
        
        @include('layouts.includes.webnav')
        @yield('content')
        @include('layouts.includes.footer')
          <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src={{ asset("js/jquery.min.js") }}></script>
  <script src={{ asset("js/jquery-migrate-3.0.1.min.js") }}></script>
  <script src={{ asset("js/popper.min.js") }}></script>
  <script src={{ asset("js/bootstrap.min.js") }}></script>
  <script src={{ asset("js/jquery.easing.1.3.js") }}></script>
  <script src={{ asset("js/jquery.waypoints.min.js") }}></script>
  <script src={{ asset("js/jquery.stellar.min.js") }}></script>
  <script src={{ asset("js/owl.carousel.min.js") }}></script>
  <script src={{ asset("js/jquery.magnific-popup.min.js") }}></script>
  <script src={{ asset("js/aos.js") }}></script>
  <script src={{ asset("js/jquery.animateNumber.min.js") }}></script>
  <script src={{ asset("js/scrollax.min.js") }}></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  {{-- <script src={{ asset('js/google-map.js') }}></script> --}}

  <script src={{ asset("js/main.js") }}></script>
        @stack('js')
    </body>
</html>
