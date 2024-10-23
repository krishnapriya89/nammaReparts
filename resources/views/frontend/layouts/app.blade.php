<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="generator" content="Codeply">
  <title>Namma Reparts</title>
  <base target="_self">

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
  {{-- toastr --}}
</head>

<body>
  {{-- header --}}
  @include('frontend.layouts.header')

  @yield('content')

  {{-- footer --}}
  @include('frontend.layouts.footer')
  @include('frontend.layouts.toastr-message')

  <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
  <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>