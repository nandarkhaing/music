<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>One Music - Modern Music HTML5 Template</title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
    <link href="{{asset('frontendtemplate/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/styles/artist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/styles/about.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/styles/about_responsive.css')}}">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontendtemplate/img/core-img/favicon.ico')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontendtemplate/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="{{asset('frontendtemplate/img/core-img/logo.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <a href="{{route('indexpage')}}"style="color:white">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{route('albumpage')}}"style="color:white"> Albums</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{route('artistpage')}}"style="color:white">Artists</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                                

                                {{-- <div class="col-lg-8 col-3 "> --}}
                                    <div class="has-search d-xl-block d-lg-block d-none float-right">
                                        <form action="/search"method="get"class="form-inline">
                                            <div class="input-group-prepend">
                                                {{-- <input type="search"name="search"class="form-control"aria-label="Search"> --}}
                                                <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                                                <span class="form-group-btn">
                                                    <button type="submit"class="btn btn-outline-info">Search</button>
                                                </span>
                                            </div>
                                        </form>
                                        
                                    </div>

                                    <!-- Login/Register & Cart Button -->
                                    {{--  <div class="col-lg-4 col-8 "> --}}
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        @guest
                                        <a href="{{ route('loginpage')}}"class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none loginLink float-left"style="color:white"> {{ __('Login|') }}</a>
                                        @if (Route::has('register'))
                                        <a href="{{ route('registerpage') }} "class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none loginLink float-left"style="color:white"> {{ __('Register') }} </a>
                                        @endif
                                        @else
                                        
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"style="color:white">
                                            @csrf
                                        </form>
                                    </div>
                                    
                                    @endguest

                                    
                                </div>
                                <!-- Nav End -->

                                
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            @yield('content')

            <footer class="footer-area">
                <div class="container">
                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col-12 col-md-6">
                            <a href="#"><img src="{{asset('frontendtemplate/img/core-img/logo.png')}}" alt=""></a>
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Friends Group </a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->





                            </p>

                        </div>
                        <!-- Social Button -->


                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="{{asset('frontendtemplate/img/core-img/smartphone.png')}}" alt="">
                            </div>
                            <h6 style="color: white">09889745702</h6>
                        </div>
                        &nbsp &nbsp      &nbsp &nbsp
                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">

                                <img src="{{asset('frontendtemplate/img/core-img/message.png')}}" alt="">
                            </div>
                            <h6 style="color: white">thwea45@gmail.com</h6>
                        </div>


                    </div>
                </div>

                <!-- Contact Social Info -->


            </footer>
            <!-- ##### Footer Area Start ##### -->
            
            <!-- ##### All Javascript Script ##### -->
            <!-- jQuery-2.2.4 js -->
            <script src="{{asset('frontendtemplate/js/jquery/jquery-2.2.4.min.js')}}"></script>
            <!-- Popper js -->
            <script src="{{asset('frontendtemplate/js/bootstrap/popper.min.js')}}"></script>
            <!-- Bootstrap js -->
            <script src="{{asset('frontendtemplate/js/bootstrap/bootstrap.min.js')}}"></script>
            <!-- All Plugins js -->
            <script src="{{asset('frontendtemplate/js/plugins/plugins.js')}}"></script>
            <!-- Active js -->
            <script src="{{asset('frontendtemplate/js/active.js')}}"></script>
        </body>

        </html>