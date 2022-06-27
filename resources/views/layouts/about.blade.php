<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/home/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/vendor/select2/select2.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/vendor/lightcase/lightcase.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/home/vendor/bootstrap/category.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
@include('home.header')

@include('home.sidebar')

@section('content')
@show

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="{{asset('assets')}}/home/vendor/bootstrap/popper.min.js"></script>
<script src="{{asset('assets')}}/home/vendor/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/home/vendor/select2/select2.min.js "></script>
<script src="{{asset('assets')}}/home/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/home/vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('assets')}}/home/vendor/isotope/isotope.min.js"></script>
<script src="{{asset('assets')}}/home/vendor/lightcase/lightcase.js"></script>
<script src="{{asset('assets')}}/home/vendor/waypoints/waypoint.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- Main JS -->
<script src="{{asset('assets')}}/home/js/app.min.js "></script>
<script src="//localhost:35729/livereload.js"></script>
@include('home.footer')
</body>
</html>
