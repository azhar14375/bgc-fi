<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="author" content="ClodPi Pro Hotspot">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
    <meta name="_token" content="{{ csrf_token() }}">
    <!-- WEBSITE TITLE & DESCRIPTION -->
    <title>BGC-FI</title>
    <meta name="description" content="ClodPi Pro Hotspot">
    <meta name="keywords" content="ClodPi Pro Hotspot">

    <!-- OG meta tags that improve the look of your post on social media -->
    <meta property="og:site_name" content="" /><!--website name-->
    <meta property="og:site" content="" /> <!--website link-->
    <meta property="og:title" content=""/> <!--Post title-->
    <meta property="og:description" content="" /> <!--Post description-->
    <meta property="og:image" content="" /><!-- Image link (jpg only)-->
    <meta property="og:url" content="" /> <!--where do you want your post to link to-->
    <meta property="og:type" content="article" />

    <!-- Favicon and Apple Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/front/images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/front/images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/front/images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/front/images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/front/images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/front/images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/front/images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/front/images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/front/images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/front/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/front/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/front/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/front/images/favicon/favicon-16x16.png')}}">

    <!-- STYLES -->
    <!-- Bootstrap -->
    <link href="{{asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="{{asset('assets/front/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Animations -->
    <link href="{{asset('assets/front/css/animations.css')}}" rel="stylesheet">
    <!-- Lightbox -->
    <link href="{{asset('assets/front/css/lightbox.min.css')}}" rel="stylesheet">
    <!-- Video Lightbox -->
    <link href="{{asset('assets/front/css/modal-video.min.css')}}" rel="stylesheet">
    <!-- Main Stylesheet -->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</head>
<body>
    <!-- Loading Screen -->
    <div id="loader-wrapper">
        <h1 class="loader-logo"><span class="colored">ClodPi</span>Pro Hotspot</h1>
        <div id="progress"></div>
        <h3 class="loader-text">LOADING</h3>
    </div>
    
    <!-- //// HEADER //// -->
    <header id="main-header">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- Site Logo -->
                <a id="logo" class="navbar-brand" href="{{url('')}}">
                    {{-- <img class="img-fluid" src="{{asset('assets/front/images/logo.png')}}" alt="site logo"> --}}
                    <h2>ClodPi <span class="colored">Pro Hotspot</span></h2>
                </a>
                <!-- Dropdown Button -->
                <button id="hamburger" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                <!-- Navigation Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link {{(request()->segment(1)=='')
                            ? 'active' : ''}} " href="{{url('')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(request()->segment(1)=='about') ? 'active' : ''}} " href="{{url('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(request()->segment(1)=='products') ? 'active' : ''}} " href="{{url('products')}}" href="{{url('products')}}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(request()->segment(1)=='contact') ? 'active' : ''}} " href="{{url('contact')}}" href="{{url('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(request()->segment(1)=='cart') ? 'active' : ''}} " href="{{url('cart')}}" href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background: transparent;
                                border: 1px solid;">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background: transparent;
                                border: 1px solid;min-width: 12rem;">
                                    <a class="nav-link" aria-disabled="true">{{ Auth::user()->name }}</a>
                                    <a class="nav-link" href="{{url('setting')}}">{{__('Change Password')}}</a>
                                    <a class="nav-link" href="{{url('orders')}}">{{__('Orders')}}</a>
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header><!-- Header End -->
    <!------------------------------ MAIN CONTENT ------------------------------->
    @yield('content')
    <!------------------------------ END MAIN CONTENT ------------------------------->

    <!-- /// FOOTER /// -->
    <footer id="main-footer">
        <div id="footer"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p id="copyright">&copy; ClodPi Pro Hotspot <span id="year"> </span></p><!-- Copyright Text -->
                        <ul class="social-links"> <!-- Social Media Icons -->
                            <li><a href="#"><i class="fa fa-facebook fa-lg icon-social"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter  fa-lg icon-social"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus fa-lg icon-social"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin fa-lg icon-social"></i></a>
                            <li><a href="#"><i class="fa fa-pinterest fa-lg icon-social"></i></a>
                            <li><a href="#"><i class="fa fa-instagram fa-lg icon-social"></i></a>
                        </ul>
                    </div>
                </div>
            </div><!-- Container End -->
        </div>
    </footer><!-- Footer End -->
    
    <!-- //// SCRIPTS //// -->
    <script src="{{asset('assets/front/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/front/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/front/js/blazy.min.js')}}"></script>
    <script src="{{asset('assets/front/js/particles.js')}}"></script>
    <script src="{{asset('assets/front/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/front/js/lightbox.min.js')}}"></script>
    <script src="{{asset('assets/front/js/jquery-modal-video.min.js')}}"></script>
    <script src="{{asset('assets/front/js/validator.min.js')}}"></script>
    <script src="{{asset('assets/front/js/strider.js')}}"></script>
    <script src="{{asset('assets/front/js/custom.js')}}"></script>
    @yield('scripts')
</body>
</html>