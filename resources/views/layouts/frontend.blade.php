<!doctype html>

<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>JKConnect</title>

        @yield('styles')

        <script src="{{ asset('css/app.css') }}" defer></script>
        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
     
    </head>
	
	<body>
        <div id="app">
           
                        <div class="preloader">
                            <div class="spin">
                                
                                <div class="cube2"></div>
                            </div>
                        </div> 
                        <!--welcome-hero start -->
                    <header id="home" class="welcome-hero">
                                              

                                     <!-- top-area Start -->
                                                <div class="top-area">
                                                    <div class="header-area">
                                                        <!-- Start Navigation -->
                                                        <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="20" data-speed="1000">

                                                            

                                                            <div class="container">            
                                                                <!-- Start Atribute Navigation -->
                                                                <div class="attr-nav">
                                                                    <ul>
                                                                        <!--
                                                                        <li class="search">
                                                                            <a href="#"><span class="lnr lnr-magnifier"></span></a>
                                                                        </li>/.search-->
                                                                        <!--
                                                                            <li class="nav-setting">
                                                                            <a href="#"><span class="lnr lnr-cog"></span></a>
                                                                        </li>
                                                                       -->
                                                                        <!--/.search-->
                                                                        <li class="dropdown">
                                                                        
                                                                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                                                                <span class="lnr lnr-cart"></span>
                                                                                <span class="badge badge-bg-1">2</span>
                                                                            </a>-->

                                                                            <ul class="dropdown-menu cart-list s-cate">
                                                                                <li class="single-cart-list">
                                                                                    <a href="#" class="photo"><img src="assets/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
                                                                                    <div class="cart-list-txt">
                                                                                        <h6><a href="#">arm <br> chair</a></h6>
                                                                                        <p>1 x - <span class="price">$180.00</span></p>
                                                                                    </div><!--/.cart-list-txt-->
                                                                                    <div class="cart-close">
                                                                                        <span class="lnr lnr-cross"></span>
                                                                                    </div><!--/.cart-close-->
                                                                                </li><!--/.single-cart-list -->
                                                                                <li class="single-cart-list">
                                                                                    <a href="#" class="photo"><img src="assets/images/collection/arrivals2.png" class="cart-thumb" alt="image" /></a>
                                                                                    <div class="cart-list-txt">
                                                                                        <h6><a href="#">single <br> armchair</a></h6>
                                                                                        <p>1 x - <span class="price">$180.00</span></p>
                                                                                    </div><!--/.cart-list-txt-->
                                                                                    <div class="cart-close">
                                                                                        <span class="lnr lnr-cross"></span>
                                                                                    </div><!--/.cart-close-->
                                                                                </li><!--/.single-cart-list -->
                                                                                <li class="single-cart-list">
                                                                                    <a href="#" class="photo"><img src="assets/images/collection/arrivals3.png" class="cart-thumb" alt="image" /></a>
                                                                                    <div class="cart-list-txt">
                                                                                        <h6><a href="#">wooden arn <br> chair</a></h6>
                                                                                        <p>1 x - <span class="price">$180.00</span></p>
                                                                                    </div><!--/.cart-list-txt-->
                                                                                    <div class="cart-close">
                                                                                        <span class="lnr lnr-cross"></span>
                                                                                    </div><!--/.cart-close-->
                                                                                </li><!--/.single-cart-list -->
                                                                                <li class="total">
                                                                                    <span>Total: $0.00</span>
                                                                                    <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
                                                                                </li>
                                                                            </ul>
                                                                        </li><!--/.dropdown-->
                                                                    </ul>
                                                                </div><!--/.attr-nav-->
                                                                <!-- End Atribute Navigation -->

                                                                <!-- Start Header Navigation -->
                                                                <div class="navbar-header">
                                                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                                                        <i class="fa fa-bars"></i>
                                                                    </button>
                                                                    <a class="navbar-brand" >JKConnect</a>

                                                                </div><!--/.navbar-header-->
                                                                <!-- End Header Navigation -->
                                                                

                                                                <!-- Collect the nav links, forms, and other content for toggling -->
                                                                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                                                                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                                                        <li class=" scroll active"><a href="#home">home</a></li>
                                                                        <li class="scroll"><a href="#new-arrivals">new arrival</a></li>
                                                                        <li class="scroll"><a href="#feature">features</a></li>
                                                                        <li class="scroll"><a href="#blog">blog</a></li>
                                                                        <li class="scroll"><a href="#newsletter">contact</a></li>
                                                                       
                                                                        @if (Route::has('login'))  <li class="nav-item" ><a href="/checkout"> 
                                                                
                                                                            @auth
                                                                                <cart />
                                                                            @else
                                                                            </li>
                                                                            
                                                                            <li class="nav-item">
                                                                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                                                            </li>
                                                                                @if (Route::has('register'))
                                                                                <li class="nav-item">
                                                                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endauth
                                                                        
                                                                    @endif
                                                                    </ul><!--/.nav -->
                                                                </div><!-- /.navbar-collapse -->
                                                            </div><!--/.container-->
                                                        </nav><!--/nav-->
                                                        <!-- End Navigation -->
                                                    </div><!--/.header-area-->
                                                    <div class="clearfix"></div>

                                                </div><!-- /.top-area-->
                                                <!-- top-area End -->

              </header><!--/.welcome-hero-->
    <!--welcome-hero end -->  
    @yield('content') 
        </div>


    	

<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Include all js compiled plugins (below), or include individual files as needed -->

<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        @yield('script')
        <script>
            window.onbeforeunload= function(){
                window.scrollTo(0,0);
            }
            </script>
    </body>
	
</html>