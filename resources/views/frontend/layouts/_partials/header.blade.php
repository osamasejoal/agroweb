<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agroweb</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('frontend') }}/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend') }}/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend') }}/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="{{ asset('frontend') }}/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Agroweb" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet"
        href="{{ asset('frontend') }}/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/agroweb-icons/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet"
        href="{{ asset('frontend') }}/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/agroweb.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/agroweb-responsive.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__wrapper">
                <div class="main-header__wrapper-inner">
                    <div class="main-header__logo">
                        <a href="index.html"><img src="{{ asset('frontend') }}/assets/images/resources/logo-1.png"
                                alt=""></a>
                    </div>
                    <div class="main-header__menu-box" style="min-width:70%">
                        <div class="main-header__menu-box-top">
                            <ul class="list-unstyled main-header__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-pin"></i>
                                    </div>
                                    <div class="text">
                                        <p>80 Broklyn Golden Street USA</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-header__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="main-header__menu-box-bottom">
                            <nav class="main-menu">
                                <div class="main-menu__wrapper">
                                    <div class="main-menu__wrapper-inner">
                                        <div class="main-menu__left">
                                            <div class="main-menu__main-menu-box">
                                                <a href="#" class="mobile-nav__toggler"><i
                                                        class="fa fa-bars"></i></a>
                                                <ul class="main-menu__list">

                                                    {{-- Dashboard --}}
                                                    <li class="dropdown current megamenu">
                                                        <a href="{{ route('home') }}">Dashboard</a>
                                                    </li>

                                                    {{-- Home --}}
                                                    <li class="dropdown current megamenu">
                                                        <a href="index.html">Home</a>
                                                    </li>

                                                    {{-- About --}}
                                                    <li>
                                                        <a href="about.html">About</a>
                                                    </li>

                                                    {{-- FAQ --}}
                                                    <li class="dropdown">
                                                        <a href="#">FAQ</a>
                                                    </li>

                                                    {{-- Shop --}}
                                                    <li class="dropdown">
                                                        <a href="#">Shop</a>
                                                    </li>

                                                    {{-- Contacts --}}
                                                    <li>
                                                        <a href="contact.html">Contact</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="main-menu__right">
                                            <div class="main-menu__search-cart-btn-box">

                                                {{-- Searchbox --}}
                                                <div class="main-menu__search-box">
                                                    <a href="#"
                                                        class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                                </div>

                                                {{-- Cart --}}
                                                <div class="main-menu__cart-box" style="margin-right:25px;">
                                                    <a href="cart.html"
                                                        class="main-menu__cart icon-shopping-cart"></a>
                                                </div>

                                                {{-- Log,Reg/Profile --}}
                                                <div class="main-menu__btn-box">
                                                    @if (Auth::user())
                                                        <a href="contact.html" class="thm-btn main-menu__btn" style="font-size:15px">
                                                            My Profile
                                                            <i class="icon-right-arrow"></i>
                                                        </a>
                                                    @else
                                                        <span class="thm-btn main-menu__btn px-5 user-select-none"
                                                            style="font-size:15px;">
                                                            <a href="{{ route('login') }}"
                                                                class="text-white">Login&ensp;</a>
                                                            <span class="">/</span>
                                                            <a href="{{ route('register') }}"
                                                                class="text-white">&ensp;Signup</a>
                                                        </span>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                    {{-- Phone/Profile --}}
                    @if (Auth::user())
                        <div class="main-header__phone-contact-box">
                            <div class="main-header__phone-number">
                                <a href="Click here 2">Click for more details</a>
                            </div>
                            <div class="main-header__call-box">
                                <div class="main-header__call-inner">
                                    <div class="main-header__call-icon">
                                        <img src="{{ asset('backend/assets/images/profile/' . auth()->user()->image) }}"
                                            class="h-100 w-100 rounded-circle" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="main-header__phone-contact-box">
                            <div class="main-header__phone-number">
                                <a href="#">23456789</a>
                            </div>
                            <div class="main-header__call-box">
                                <div class="main-header__call-inner">
                                    <div class="main-header__call-icon">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                    @endif

                </div>
            </div>
        </header>
