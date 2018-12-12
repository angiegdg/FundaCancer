<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Fundacion manos vacias</title>
        <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Custom Theme files -->
        <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{asset('css/menu.css')}}" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        </script>
        <!--start-smoth-scrolling-->
        <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
        
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!--start-smoth-scrolling-->
        <!-- webfonts -->
        <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- webfonts-->
        <!--start-top-nav-script-->
        <script>
            $(function() {
                        var pull        = $('#pull');
                            menu        = $('nav ul');
                        menuHeight  = menu.height();
                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
                $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
            });
            });
        </script>
        <!--//End-top-nav-script-->
    </head>
<body>
    <div class="what">
        <nav class="header">
            <div class="container">
                

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                           <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



        @yield('content')



    </div>
    <div class="clearfix"> </div>
    <div class="clearfix"> </div>
<!--/start-footer-->
    <div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-4 footer-grid-icons">
                    <h3>Siguenos en:</h3>
                    <ul>
                        <li><a class="twitter" href="#"><span> </span></a></li>
                        <li><a class="fb" href="#"><span> </span></a></li>
                        <li><a class="you" href="#"><span> </span></a></li>
                        <li><a class="in" href="#"><span> </span></a></li>
                        <div class="clearfix"> </div>
                    </ul>
          
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
