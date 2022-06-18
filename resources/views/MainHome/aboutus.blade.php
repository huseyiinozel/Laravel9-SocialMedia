<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets')}}/apple-icon-180x180.png">
    <link href="{{asset('assets')}}/favicon.ico" rel="icon">

    <title>Hakkımızda</title>

    <link href="{{asset('assets')}}/main.3f6952e4.css" rel="stylesheet"></head>

<body class="minimal">
<div id="site-border-left"></div>
<div id="site-border-right"></div>
<div id="site-border-top"></div>
<div id="site-border-bottom"></div>
<!-- Add your content of header -->
<header>
    <nav class="navbar  navbar-fixed-top navbar-inverse">
        <div class="container">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav ">
                    <li><a href="{{route('index')}}" title="">01 : Ana Sayfa</a></li>
                    <li><a href="{{route('aboutus')}}" title="">02 : Biz Kimiz</a></li>
                    <li><a href="{{route('contact')}}" title="">03 : İletişim</a></li>
                    <li><a href="{{route('whyhere')}}"title="">04 : Neden Buradasın</a></li>
                    <li><a href="#"  title="">05 : Giriş Yap</a></li>
                    <li><a href="#"  title="">06 : Üye Ol</a></li>
                </ul>


            </div>
        </div>
    </nav>
</header>
<!-- Add your site or app content here -->
<div class="hero-full-container background-image-container white-text-container" style="background-image: url('{{asset('assets')}}/images/space.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="hero-full-wrapper">
                    <div class="text-content">
                        <h1>Merhaba,<br>
                            <span id="typed-strings">
                  <span>Biz Kimseleriz</span>
                  <span>Seni Dinlemek İçin Buradayız</span>
                  <span>Sen anlat yeter ki</span>
                </span>
                            <span id="typed"></span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        type();
        movingBackgroundImage();
    });
</script>


<script type="text/javascript" src="{{asset('assets')}}/main.70a66962.js"></script></body>

</html>
