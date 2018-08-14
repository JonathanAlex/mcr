<!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <title>Mcr Proyectos y Desarrollo</title>
    <!-- Meta-Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="Premier Realty a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->
    <!-- Custom-Theme-Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <!-- //Custom-Theme-Files -->
    <!-- Web-Fonts -->
    <link rel="stylesheet" href="{{ asset('//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800') }}" 
          type="text/css">
    <link rel="stylesheet" href="{{ asset('//fonts.googleapis.com/css?family=Montserrat:400,700') }}" type="text/css">
    <!-- //Web-Fonts -->
    <!-- Default-JavaScript-File -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
        <script>
                $(function () {
                    $("#slider").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: true,
                        speed: 1000,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });
                });
            </script>
            


</head>
<!-- //Head -->
<!-- Body -->
<body>
    <!-- Header -->
    <div class="header w3layouts-1">
        <!-- Top-Bar -->
            
                <div class="top-bar w3-1">
                <div class="container">
                    <div class="header-nav w3-agileits-1">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <h1><a class="navbar-brand" href="{{ url('/') }}">MCR</a></h1>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav ">
                                    <li><a class=" active" href="{{ URL('/') }}">Inicio</a></li>
                                    <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                                    <li><a href="{{ route('galeria') }}">Galeria</a></li>
                                    <li><a href="{{ route('contactanos') }}">Contactanos</a></li>

                                    <li>
                                        <a id="modalBtn" 
                                            class="btn" 
                                            href="{{ route('login') }}">Login
                                        </a>
                                    </li>
                                    <!-- <li><a href="contact.html">Contact</a></li> -->
                                </ul>
                            </div>
                            <!-- /navbar-collapse -->
                            <!-- search-scripts -->
                            <script src="js/classie.js"></script>
                            <script src="js/uisearch.js"></script>
                                <script>
                                    new UISearch( document.getElementById( 'sb-search' ) );
                                </script>
                            <!-- //search-scripts -->
                        </nav>
                    </div>
                </div>
            </div>
        <!-- //Top-Bar -->

        @yield('content')

        <!-- footer -->
<div class="footer w3-agile-1">
    <div class="container">
        
        <ul class="fb_icons2 agile-1">
            <li><a class="fb" href="#"></a></li>
            <li><a class="twit" href="#"></a></li>
            <li><a class="goog" href="#"></a></li>
            <li><a class="pin" href="#"></a></li>
            <li><a class="drib" href="#"></a></li>
        </ul>
    </div>
    <p class="copyright">© 2017 Premier Realty. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
</div>
<!-- footer -->
<!--FlexSlider-->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script src="js/login.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
      </script>
<!--End-slider-script-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion           
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                        });
                    });
                   </script>
</body>
<!-- //Body -->
</html>