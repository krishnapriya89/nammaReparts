<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">

    <title>Codeply simple HTML/CSS/JS preview</title>
    <base target="_self">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


  </head>
  <body>
@yield('content')
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>

    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>



  </body></html>
