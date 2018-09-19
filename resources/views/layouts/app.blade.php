<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '旅游') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.css"/>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.min.css"/>

    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/app.css"/>
    <style>
        .navbar{
            margin-bottom:0;
        }
        .admin{
            margin-right:7px
        }
    </style>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper-4.3.3.min.js"></script>


    <script src="js/respond.min.js"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><span class="glyphicon glyphicon-home admin"></span>首页</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user admin"></span>关于我们</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-hand-right admin"></span>私人定制</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-backward admin"></span>精选路线 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">国内旅游精选路线</a></li>
                                <li><a href="#">国外旅游精选路线</a></li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-send admin"></span>旅游攻略 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">国内旅游攻略</a></li>
                                <li><a href="#">国外旅游攻略</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-phone-alt admin"></span>联系我们</a></li>
                    </ul>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                    <a href="/user/set_icon">头像设置</a>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


</div>
{{--footer--}}
<div id="fh5co-started">

    <div class="container">

        <div class="row animate-box ding">
            <div class="col-md-2 col-xs-4 col-sm-2  fh5co-heading tu" style="text-align: center;">

                <img src="images/1111.png" />

            </div>
            <div class="col-md-7 col-xs-8 col-sm-7   fh5co-heading tu">
                <h3>
                    来一次说走走的旅行吧！
                </h3>
                <p>
                    旅行是一个过程，一次发现。是一个自我发现的过程。真正的旅行让我们直面自我。
                </p>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-3  tu">
                <form class="form-inline">
                    <div class="col-md-10 col-md-offset-3 col-sm-10 tu">
                        <a href="contact.html" class="btn btn-default btn-block ">联系我们</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="row animate-box">

        </div>
    </div>
</div>
<footer class="footer_wrapper" id="contact">
    <section class="lianxi">
        <div class="container">
            <div class="b-nav wow fadeInUp" data-wow-delay=".1s">
                <a href="#">首页</a>
                <a href="#">关于我们</a>
                <a href="#">私人定制</a>
                <a href="#">精选路线</a>
                <a href="#">旅游攻略</a>
                <a href="#">联系我们</a>
            </div>
            <p class="copy">Copyright © 2017-2027 维京游轮 | 维京游轮</p>
            <p class="copy">苏ICP备12345678号-9&nbsp;&nbsp;&nbsp;<a href="http://www.17sucai.com/" target="_blank" style="    color: rgb(139, 147, 157);">网页模板</a></p>
        </div>
    </section>
</footer>

<script>
    var mySwiper = new Swiper('.swiper-container', {
        speed:300,
        autoplay : {
            delay:3000
        },
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    })
</script>
<!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}

    {{--<!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}




</body>
</html>
