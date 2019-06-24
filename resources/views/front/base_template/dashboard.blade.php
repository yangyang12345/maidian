<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
  <link rel="stylesheet" href="{{ asset("/fonts/icomoon/style.css")}}">
  <link rel="stylesheet" href="{{ asset("/fonts/flaticon/font/flaticon.css")}}">
  <link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{ asset("/css/magnific-popup.css")}}">
  <link rel="stylesheet" href="{{ asset("/css/jquery-ui.css")}}">
  <link rel="stylesheet" href="{{ asset("/css/owl.carousel.min.css")}}">
  <link rel="stylesheet" href="{{ asset("/css/owl.theme.default.min.css")}}">
  <link rel="stylesheet" href="{{ asset("/css/aos.css")}}">
  <link rel="stylesheet" href="{{ asset("/css/style.css")}}">
  <link rel="stylesheet" href="{{ asset("/css/index.css")}}">
  <link rel="stylesheet" href="{{ asset("/css/demo.css")}}">
  <link rel="stylesheet" href="{{ asset("/css/cs-select.css")}}">
  <link rel="stylesheet" href="{{ asset("/css/cs-skin-underline.css")}}">
  @stack('common-css')
  

</head>
<body>
@include('front/base_template/sidebar')

@yield('content')

@include('front/base_template/login')

@if(Route::currentRouteName() != 'index')
    @include('front/base_template/footer')
@endif




<script src="{{ asset("/js/jquery-3.3.1.min.js")}}"></script>
<script src="{{ asset("/js/jquery-migrate-3.0.1.min.js")}}"></script>
<script src="{{ asset("/js/jquery-ui.js")}}"></script>
<script src="{{ asset("/js/jquery.easing.1.3.js")}}"></script>
<script src="{{ asset("/js/popper.min.js")}}"></script>
<script src="{{ asset("/js/bootstrap.min.js")}}"></script>
<script src="{{ asset("/js/owl.carousel.min.js")}}"></script>
<script src="{{ asset("/js/jquery.stellar.min.js")}}"></script>
<script src="{{ asset("/js/jquery.countdown.min.js")}}"></script>
<script src="{{ asset("/js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{ asset("/js/bootstrap-datepicker.min.js")}}"></script>
<script src="{{ asset("/js/aos.js")}}"></script>
<script src="{{ asset("/js/main.js")}}"></script>
<script src="{{ asset("/js/indexInput.js")}}"></script>
<script src="{{ asset("/js/index.js")}}"></script>
<script src="{{ asset("/js/selectFx.js")}}"></script>
<script src="{{ asset("/js/classie.js")}}"></script>
<script src="{{ asset("/js/myJS.js")}}"></script>

@stack('common-js')

</body>

</html>