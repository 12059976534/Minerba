
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Mobile viewport optimized -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- Meta Tags - Description for Search Engine purposes -->
    <meta name="description" content="Cariera - Job Board HTML Template">
    <meta name="keywords" content="cariera job board, HTML Template, job board html, job listing, job portal, job postings, jobs, recruiters, recruiting, recruitment">
    <meta name="author" content="GnoDesign">

    <!-- Website Title -->
    <title>E-Minerba</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700,800|Varela+Round" rel="stylesheet">
    
    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/spacing.min.css')}}">
    @yield('css')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <!-- =============== Start of Header 1 Navigation =============== -->
    <header class="header1">
        <nav class="navbar navbar-default navbar-static-top fluid_header centered">
            <div class="" style="margin-left: 40px; margin-right: 40px;">
                
                <!-- Logo -->
                <div class="col-md-2 col-sm-6 col-xs-8 nopadding">
                    <a class="navbar-brand nomargin" href="index.html"><img src="{{ asset('assets/images/web.png')}}" alt="logo"></a>
                    <!-- INSERT YOUR LOGO HERE -->
                </div>

                <!-- ======== Start of Main Menu ======== -->
                <div class="col-md-10 col-sm-6 col-xs-4 nopadding">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Start of Main Nav -->
                    <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="main-nav">
                        <ul class="nav navbar-nav pull-right">

                            <!-- Mobile Menu Title -->
                            <li class="mobile-title">
                                <h4>main menu</h4></li>
                                  
                            <!-- Simple Menu Item -->
                            <li class="dropdown simple-menu ">
                                <a href="{{ route('home-web') }}" >home</a>
                            </li>

                            <!-- Simple Menu Item -->
                            <li class="dropdown simple-menu ">
                                <a href="{{ url('news/all') }}" >News</a>
                            </li>
                            {{-- <li class="dropdown simple-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">News<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                        
                                    <li><a href="{{url('news/MINING IVESTMENT')}}">MINING INVESTEMENT</a></li>
                                    <li><a href="{{url('news/MINING OPERATION')}}">MINING OPERATION</a></li>
                                    <li><a href="{{url('news/ENVIROMENTAL CSR AND HSE')}}">ENVIROMENTAL CSR AND HSE</a></li>
                                    <li><a href="{{url('news/MINING REGULATION')}}">MINING REGULATION</a></li>
                                    <li><a href="{{url('news/ENERGY')}}">ENERGY</a></li>
                                    
                                </ul>
                            </li> --}}
                             <!-- Simple Menu Item -->

                            <!-- Mega Menu Item -->
                            <li class="dropdown simple-menu ">
                                <a href="{{ route('comodity') }}" >Komoditas</a>
                            </li>
                            <!-- End of Mega Menu Item -->

                            <!-- Simple Menu Item -->
                           <!-- Mega Menu Item -->
                           <li class="dropdown simple-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Kostraktor<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/contruktor">COAL BATUBARA</a></li>
                                    <li><a href="find-candidate-2.html">GOLD EMAS</a></li>
                                    <li><a href="post-job.html">NICKEL NIKEL</a></li>
                                </ul>
                            </li>
                            <!-- End of Mega Menu Item -->

                            <!-- Simple Menu Item -->
                            <li class="dropdown simple-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Konsultan<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/contruktor">COAL BATUBARA</a></li>
                                    <li><a href="find-candidate-2.html">GOLD EMAS</a></li>
                                    <li><a href="post-job.html">NICKEL NIKEL</a></li>
                                </ul>
                            </li>

                            <!-- Simple Menu Item -->
                            <li class="dropdown simple-menu ">
                                <a href="{{ route('karir') }}" >Karir</a>
                            </li>

                            <!-- Simple Menu Item -->
                            <li class="dropdown simple-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Tender<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/contruktor">JOB</a></li>
                                    <li><a href="find-candidate-2.html">DATABASE</a></li>
                                    <li><a href="post-job.html">PART TIME</a></li>
                                </ul>
                            </li>

                            @if(!auth()->check())
                                <li class="menu-item btn btn-blue">
                                    <a href="{{ route('login') }}" style="color:#fff" role="button"><i class="fa fa-lock"></i> Login</a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{ route('register') }}" role="button">Register</a>
                                </li>
                            @else
                                <li class="menu-item btn btn-blue">
                                    <a href="{{ route('logout') }}" style="color:#fff" role="button" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <!-- End of Main Nav -->
                </div>
                <!-- ======== End of Main Menu ======== -->

            </div>
        </nav>
    </header>
    <!-- =============== End of Header 1 Navigation =============== -->

    @yield('content')

    <!-- =============== Start of Footer 1 =============== -->
    <footer class="footer1">

        <!-- ===== Start of Footer Information & Links Section ===== -->
        <div class="footer-info ptb80">
            <div class="container">

                <!-- 1st Footer Column -->
                <div class="col-md-3 col-sm-6 col-xs-6 footer-about">

                    <!-- Your Logo Here -->
                    <a href="index.html">
                        <img src="{{ asset('images/logo-white.svg')}}" alt="">
                    </a>

                    <!-- Small Description -->
                    <p class="pt40">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type changed.</p>

                    <!-- Info -->
                    <ul class="nopadding">
                        <li><i class="fa fa-map-marker"></i>New York City, USA</li>
                        <li><i class="fa fa-phone"></i>(123) 456 789 0012</li>
                        <li><i class="fa fa-envelope-o"></i>youremail@cariera.com</li>
                    </ul>
                </div>

                <!-- 2nd Footer Column -->
                <div class="col-md-3 col-sm-6 col-xs-6 footer-links">
                    <h3>useful links</h3>

                    <!-- Links -->
                    <ul class="nopadding">
                        <li><a href="post-job.html"><i class="fa fa-angle-double-right"></i>add job</a></li>
                        <li><a href="blog-right-sidebar-v1.html"><i class="fa fa-angle-double-right"></i>blog</a></li>
                        <li><a href="search-jobs-1.html"><i class="fa fa-angle-double-right"></i>find jobs</a></li>
                        <li><a href="faq.html"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="login.html"><i class="fa fa-angle-double-right"></i>login</a></li>
                        <li><a href="privacy-policy.html"><i class="fa fa-angle-double-right"></i>privacy policy</a></li>
                        <li><a href="register.html"><i class="fa fa-angle-double-right"></i>register</a></li>
                        <li><a href="shop-right-sidebar.html"><i class="fa fa-angle-double-right"></i>shop</a></li>
                        <li><a href="submit-resume.html"><i class="fa fa-angle-double-right"></i>submit resume</a></li>
                    </ul>
                </div>

                <!-- 3rd Footer Column -->
                <div class="col-md-3 col-sm-6 col-xs-6 footer-posts">
                    <h3>popular posts</h3>

                    <!-- Single Post 1 -->
                    <div class="footer-blog-post">

                        <!-- Thumbnail -->
                        <div class="thumbnail-post">
                            <a href="blog-post-right-sidebar.html">
                                <img src="https://statik.tempo.co/data/2019/08/21/id_865997/865997_720.jpg" alt="">
                            </a>
                        </div>

                        <!-- Link -->
                        <div class="post-info">
                            <a href="blog-post-right-sidebar.html">blog post 1</a>
                            <span>1 day ago</span>
                        </div>
                    </div>

                    <!-- Single Post 2 -->
                    <div class="footer-blog-post">

                        <!-- Thumbnail -->
                        <div class="thumbnail-post">
                            <a href="blog-post-right-sidebar.html">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQewI1jSs01MsHlihRoVLi3hL6ka1qCsOuI-hzS0AebildnDUc996iEt_8joXhnGiqX6TM&usqp=CAU" alt="">
                            </a>
                        </div>

                        <!-- Link -->
                        <div class="post-info">
                            <a href="blog-post-right-sidebar.html">blog post 2</a>
                            <span>2 day ago</span>
                        </div>
                    </div>

                    <!-- Single Post 3 -->
                    <div class="footer-blog-post">

                        <!-- Thumbnail -->
                        <div class="thumbnail-post">
                            <a href="blog-post-right-sidebar.html">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQewI1jSs01MsHlihRoVLi3hL6ka1qCsOuI-hzS0AebildnDUc996iEt_8joXhnGiqX6TM&usqp=CAU" alt="">
                            </a>
                        </div>

                        <!-- Link -->
                        <div class="post-info">
                            <a href="blog-post-right-sidebar.html">blog post 3</a>
                            <span>4 day ago</span>
                        </div>
                    </div>
                </div>

                <!-- 4th Footer Column -->
                <div class="col-md-3 col-sm-6 col-xs-6 footer-newsletter">
                    <h3>newsletter</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                    <!-- Subscribe Form -->
                    <form action="#" class="form-inline mailchimp mtb30" novalidate>

                        <!-- Form -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" name="EMAIL" class="form-control" id="mc-email" placeholder="Your Email" autocomplete="off">
                                <label for="mc-email"></label>
                                <button type="submit" class="btn btn-blue btn-effect">Submit</button>
                            </div>
                        </div>
                    </form>

                    <!-- Start of Live Chat -->
                    <div class="footer-chat row nomargin">

                        <!-- Supporter Image -->
                        <div class="col-md-4">
                            <div class="supporter-image">
                                <img src="images/clients/client4.jpg" alt="">
                            </div>
                        </div>

                        <!-- Chat details -->
                        <div class="col-md-8">
                            <div class="chat-details">
                                <span>Helpline Center</span>

                                <p class="pt10 nomargin">Chat Live now!
                                    <br>Hello, my name is John Doe, how may i help you?</p>

                                <!-- Live Chat Link -->
                                <div class="text-right pt15">
                                    <a href="#"><i class="fa fa-comments-o"></i>Live Chat</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End of Live Chat -->
                </div>

            </div>
        </div>
        <!-- ===== End of Footer Information & Links Section ===== -->


        <!-- ===== Start of Footer Copyright Section ===== -->
        <div class="copyright ptb40">
            <div class="container">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <span>Copyright &copy; <a href="#">eMINERBA</a>. All Rights Reserved</span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start of Social Media Buttons -->
                    <ul class="social-btns list-inline text-right">
                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll facebook">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll twitter">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll google-plus">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll instagram">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll linkedin">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll rss">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-rss"></i>
                                    <i class="social-btn-roll-icon fa fa-rss"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- End of Social Media Buttons -->
                </div>

            </div>
        </div>
        <!-- ===== End of Footer Copyright Section ===== -->

    </footer>
    <!-- =============== End of Footer 1 =============== -->

    <!-- ===== Start of Back to Top Button ===== -->
    <a href="#" class="back-top"><i class="fa fa-chevron-up"></i></a>
    <!-- ===== End of Back to Top Button ===== -->

    <!-- ===== Start of Login Pop Up div ===== -->
    <div class="cd-user-modal">
        <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container">
            <!-- this is the container wrapper -->
            <ul class="cd-switcher">
                <li><a href="#0">Sign in</a></li>
                <li><a href="#1">New account</a></li>
            </ul>

            <div id="cd-login">
                <!-- log in form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password</label>
                        <input class="full-width has-padding has-border" id="signin-password" type="password" placeholder="Password">
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Remember me</label>
                    </p>
                    <p class="fieldset">
                        <button type="submit" value="Login" class="btn btn-blue btn-effect">Login</button>
                    </p>
                </form>
            </div>
            <!-- cd-login -->

            <div id="cd-signup">
                <!-- sign up form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="password" placeholder="Password">
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                    </p>
                    <p class="fieldset">
                        <button class="btn btn-blue btn-effect" type="submit" value="Create account">Create Account</button>
                    </p>
                </form>
            </div>
            <!-- cd-signup -->
        </div>
        <!-- cd-user-modal-container -->
    </div>
    <!-- cd-user-modal -->
    <!-- ===== End of Login Pop Up div ===== -->

    <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    <script src="{{ asset('web/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('web/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('web/js/swiper.min.js')}}"></script>
    <script src="{{ asset('web/js/jquery.ajaxchimp.js')}}"></script>
    <script src="{{ asset('web/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('web/js/jquery.inview.min.js')}}"></script>
    <script src="{{ asset('web/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('web/js/jquery.easypiechart.min.js')}}"></script>
    <script src="{{ asset('web/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('web/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('web/js/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('web/js/countdown.js')}}"></script>
    <script src="{{ asset('web/js/isotope.min.js')}}"></script>
    <script src="{{ asset('web/js/custom.js')}}"></script>
    @yield('script')
</body>

</html>