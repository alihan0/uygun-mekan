
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - {{env('APP_NAME')}}</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Korax HTML 5 Template " />

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Text:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/icomoon-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/twentytwenty/twentytwenty.css" />
    <link rel="stylesheet" href="assets/vendors/language-switcher/polyglot-language-switcher.css" />
    <link rel="stylesheet" href="assets/vendors/vegas-slider/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/nice-select/nice-select.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/scrollbar.css" />
</head>

<body>

    <!--Start Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="u" class="letters-loading">
                            U
                        </span>
                        <span data-text-preloader="y" class="letters-loading">
                            Y
                        </span>
                        <span data-text-preloader="g" class="letters-loading">
                            G
                        </span>
                        <span data-text-preloader="u" class="letters-loading">
                            U
                        </span>
                        <span data-text-preloader="n" class="letters-loading">
                            N
                        </span>
                        <span data-text-preloader="m" class="letters-loading">
                            M
                        </span>
                        <span data-text-preloader="e" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="k" class="letters-loading">
                            K
                        </span>
                        <span data-text-preloader="a" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="n" class="letters-loading">
                            N
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Preloader -->

    <div class="page-wrapper">

        <!--Start Main Header One-->
        <header class="main-header main-header-one  clearfix">
            <div class="main-header-one__wrapper">

                <div class="main-header-one__top">
                    <div class="container">
                        <div class="main-header-one__top-inner">
                            <div class="main-header-one__top-address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{$system->address}}</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{$system->email1}}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="main-header-one__top-social-link">
                                <ul>
                                    <li>
                                        <a href="{{$system->facebook}}" target="_blank"><i class="icon-facebook-app-symbol"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$system->twitter}}" target="_blank"><i class="icon-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$system->instagram}}" target="_blank"><i class="icon-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="main-header-one__bottom">
                    <nav class="main-menu main-menu--1">
                        <div class="main-menu__wrapper">
                            <div class="container">
                                <div class="main-menu__wrapper-inner">
                                    <div class="main-header-one__bottom-left">
                                        <div class="logo">
                                            <a href="/"><img src="assets/images/uygun-mekan-logo.png"
                                                    width="75" alt=""></a>
                                        </div>
                                    </div>

                                    <div class="main-header-one__bottom-right">

                                        <div class="main-menu__inner">
                                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                            <ul class="main-menu__list">
                                                <li>
                                                    <a href="/">Anasayfa</a>
                                                </li>
                                                <li><a href="/categories">Kategoriler</a></li>
                                                <li class="dropdown">
                                                    <a href="#">Mekanlar</a>
                                                    <ul>
                                                        @foreach ($categories as $category)
                                                            <li><a href="/category/{{$category->slug}}">{{$category->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="/blog">Blog</a>
                                                    
                                                </li>
                                                <li><a href="/contact">İletişim</a></li>
                                            </ul>
                                        </div>

                                        

                                        

                                        <div class="main-header-one__bottom-right-btn">
                                            <a href="/new-place" class="thm-btn">+ Mekan Ekle </a>
                                        </div>

                                        <div class="main-header-one__bottom-right-btn">
                                            <a href="/auth/login" class=""><i class="fas fa-user-circle"></i> Giriş Yap </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--End Main Header One-->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!-- Start Banner One -->
        <section class="banner-one">
            <div class="banner-one__inner">
                <div class="slider-bg-slide"
                    data-options='{ "delay": 5000, "slides": [ { "src": "assets/images/backgrounds/banner-v1-bg1.jpg" }, { "src": "assets/images/backgrounds/banner-v1-bg2.jpg" }, { "src": "assets/images/backgrounds/banner-v1-bg3.jpg" } ], "transition": "fade", "animation": "kenburns", "timer": false, "align": "top" }'>
                </div>
                <div class="slider-bg-slide-overly"></div>
                <div class="container">
                    <div class="banner-one__content text-center">
                        <div class="title">
                            <h2>Find the best place to be</h2>
                        </div>
                        <div class="text">
                            <p>ListingEasy is the hassle-free way of discovering the city</p>
                        </div>


                        <!--Start Banner One Tab Box-->
                        <div class="banner-one__tab-box">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="banner-one__tab tabs-box">
                                        <div class="banner-one__tab-button">
                                            <ul class="tab-buttons clearfix">
                                                <li data-tab="#places" class="tab-btn active-btn">
                                                    <h4>Places</h4>
                                                </li>
                                                <li data-tab="#events " class="tab-btn">
                                                    <h4>Events</h4>
                                                </li>
                                                <li data-tab="#restaurants" class="tab-btn">
                                                    <h4>Restaurants</h4>
                                                </li>
                                                <li data-tab="#hotels" class="tab-btn">
                                                    <h4>Hotels</h4>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tabs-content">

                                            <!--Start Tab-->
                                            <div class="tab active-tab" id="places">
                                                <div class="banner-one__tab-content-item">
                                                    <div class="banner-one__tab-content-places">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="banner-one__tab-content-places-form">
                                                                    <form action="assets/inc/sendemail.php"
                                                                        class="comment-one__form contact-form-validated"
                                                                        novalidate="novalidate">

                                                                        <ul>
                                                                            <li>
                                                                                <div class="comment-form__input-box">
                                                                                    <div class="icon">
                                                                                        <span
                                                                                            class="fas fa-keyboard"></span>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        placeholder="What are you looking for?"
                                                                                        name="name">
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="comment-form__input-box">
                                                                                    <div class="icon">
                                                                                        <span class="icon-pin"></span>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        placeholder="Location"
                                                                                        name="name">
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div
                                                                                    class="comment-form__input-box clearfix">
                                                                                    <div class="icon">
                                                                                        <span class="icon-list"></span>
                                                                                    </div>
                                                                                    <div class="select-box">
                                                                                        <select class="selectmenu wide">
                                                                                            <option selected="selected">
                                                                                                All Categories</option>
                                                                                            <option>Shops
                                                                                            </option>
                                                                                            <option>Hotels
                                                                                            </option>
                                                                                            <option>Restaurants
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <button
                                                                                    class="thm-btn comment-form__btn"
                                                                                    type="submit"
                                                                                    data-loading-text="Please wait...">Search
                                                                                    <span class="icon-search"></span>
                                                                                </button>
                                                                            </li>
                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Tab-->

                                            <!--Start Tab-->
                                            <div class="tab" id="events">
                                                <div class="banner-one__tab-content-item">
                                                    <div class="banner-one__tab-content-events">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="banner-one__tab-content-places-form">
                                                                    <form action="assets/inc/sendemail.php"
                                                                        class="comment-one__form contact-form-validated"
                                                                        novalidate="novalidate">
                                                                        <ul>
                                                                            <li>
                                                                                <div class="comment-form__input-box">
                                                                                    <div class="icon">
                                                                                        <span
                                                                                            class="fas fa-handshake"></span>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        placeholder="Event Name or Place"
                                                                                        name="name">
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div
                                                                                    class="comment-form__input-box clearfix">
                                                                                    <div class="icon">
                                                                                        <span class="icon-list"></span>
                                                                                    </div>
                                                                                    <div class="select-box">
                                                                                        <select class="selectmenu wide">
                                                                                            <option selected="selected">
                                                                                                All Cities</option>
                                                                                            <option>New York
                                                                                            </option>
                                                                                            <option>Dhaka
                                                                                            </option>
                                                                                            <option>Paris
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="comment-form__input-box">
                                                                                    <div class="icon">
                                                                                        <span
                                                                                            class="icon-calendar"></span>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="form_subject" value=""
                                                                                        placeholder="Select Date"
                                                                                        id="datepicker">
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <button
                                                                                    class="thm-btn comment-form__btn"
                                                                                    type="submit"
                                                                                    data-loading-text="Please wait...">Search
                                                                                    <span class="icon-search"></span>
                                                                                </button>
                                                                            </li>
                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Tab-->

                                            <!--Start Tab-->
                                            <div class="tab" id="restaurants">
                                                <div class="banner-one__tab-content-item">
                                                    <div class="banner-one__tab-content-restaurants">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="banner-one__tab-content-places-form">
                                                                    <form action="assets/inc/sendemail.php"
                                                                        class="comment-one__form contact-form-validated"
                                                                        novalidate="novalidate">
                                                                        <ul>
                                                                            <li>
                                                                                <div class="comment-form__input-box">
                                                                                    <div class="icon">
                                                                                        <span
                                                                                            class="icon-big-cheeseburger"></span>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        placeholder="Restaurant Name"
                                                                                        name="name">
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="comment-form__input-box">
                                                                                    <div class="icon">
                                                                                        <span
                                                                                            class="icon-calendar"></span>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="form_subject" value=""
                                                                                        placeholder="Select Date"
                                                                                        id="datepicker2">
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="comment-form__input-box">
                                                                                    <div class="icon">
                                                                                        <span class="icon-user"></span>
                                                                                    </div>
                                                                                    <input type="number"
                                                                                        placeholder="Persons"
                                                                                        name="name">
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <button
                                                                                    class="thm-btn comment-form__btn"
                                                                                    type="submit"
                                                                                    data-loading-text="Please wait...">Search
                                                                                    <span class="icon-search"></span>
                                                                                </button>
                                                                            </li>
                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Tab-->

                                            <!--Start Tab-->
                                            <div class="tab" id="hotels">
                                                <div class="banner-one__tab-content-item">
                                                    <div class="banner-one__tab-content-hotels">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="banner-one__tab-content-places-form">
                                                                    <form action="assets/inc/sendemail.php"
                                                                        class="comment-one__form contact-form-validated"
                                                                        novalidate="novalidate">
                                                                        <ul>
                                                                            <li>
                                                                                <div class="comment-form__input-box">
                                                                                    <div class="icon">
                                                                                        <span
                                                                                            class="icon-big-cheeseburger"></span>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        placeholder="Hotel Name"
                                                                                        name="name">
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="comment-form__input-box">
                                                                                    <div class="icon">
                                                                                        <span class="icon-user"></span>
                                                                                    </div>
                                                                                    <input type="number"
                                                                                        placeholder="Persons"
                                                                                        name="name">
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="comment-form__input-box">
                                                                                    <div class="icon">
                                                                                        <span
                                                                                            class="icon-calendar"></span>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="form_subject" value=""
                                                                                        placeholder="Select Date"
                                                                                        id="datepicker-inline">
                                                                                </div>
                                                                            </li>


                                                                            <li>
                                                                                <button
                                                                                    class="thm-btn comment-form__btn"
                                                                                    type="submit">Search
                                                                                    <span class="icon-search"></span>
                                                                                </button>
                                                                            </li>
                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Tab-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Banner One Tab Box Tab Box-->


                        <div class="banner-one__categories">
                            <div class="title">
                                <h4>Just looking around ? Use quick search by category :</h4>
                            </div>
                            <ul class="banner-one__categories-list">

                                <li class="banner-one__categories-list-item">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-hotels"></span>
                                        </div>
                                        <p><a href="#">Hotels</a></p>
                                    </div>
                                </li>

                                <li class="banner-one__categories-list-item">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-drink"></span>
                                        </div>
                                        <p><a href="#">Events</a></p>
                                    </div>
                                </li>

                                <li class="banner-one__categories-list-item">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-shopping-cart"></span>
                                        </div>
                                        <p><a href="#">Shops</a></p>
                                    </div>
                                </li>

                                <li class="banner-one__categories-list-item">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-big-cheeseburger"></span>
                                        </div>
                                        <p><a href="#">Restaurants</a></p>
                                    </div>
                                </li>


                                <li class="banner-one__categories-list-item">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-dumbbell"></span>
                                        </div>
                                        <p><a href="#">Fitness</a></p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner One -->


        <!--Start Categories One-->
        <section class="categories-one">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="sec-title__title">Most Poplar Categories</h2>
                    <p class="sec-title__text">Excepteur s occaecat cupidatat proident sunt</p>
                </div>
                <div class="row masonary-layout">
                    <!--Start Categories One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="categories-one__single">
                            <div class="categories-one__single-img">
                                <img src="assets/images/resources/categorie-v1-img1.jpg" alt="" />
                                <div class="text-box">
                                    <h2><a href="categories.html">Perspiciatis Bulding</a></h2>
                                    <p>Excepteur sint occaecat </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Categories One Single-->

                    <!--Start Categories One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="categories-one__single">
                            <div class="categories-one__single-img">
                                <img src="assets/images/resources/categorie-v2-img2.jpg" alt="" />
                                <div class="text-box">
                                    <h2><a href="categories.html">Hotel Caring Now</a></h2>
                                    <p>Excepteur sint occaecat </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Categories One Single-->

                    <!--Start Categories One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="categories-one__single">
                            <div class="categories-one__single-img">
                                <img src="assets/images/resources/categorie-v1-img3.jpg" alt="" />
                                <div class="text-box">
                                    <h2><a href="categories.html">London city</a></h2>
                                    <p>Excepteur sint occaecat </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Categories One Single-->

                    <!--Start Categories One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.4s">
                        <div class="categories-one__single">
                            <div class="categories-one__single-img">
                                <img src="assets/images/resources/categorie-v1-img4.jpg" alt="" />
                                <div class="text-box">
                                    <h2><a href="categories.html">Lisiting & Hotel</a></h2>
                                    <p>Excepteur sint occaecat </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Categories One Single-->

                    <!--Start Categories One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.5s">
                        <div class="categories-one__single">
                            <div class="categories-one__single-img">
                                <img src="assets/images/resources/categorie-v1-img5.jpg" alt="" />
                                <div class="text-box">
                                    <h2><a href="categories.html">Hotel This Bad</a></h2>
                                    <p>Excepteur sint occaecat </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Categories One Single-->
                </div>
            </div>
        </section>
        <!--End Categories One-->

        <!--Start Place One-->
        <section class="place-one">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="sec-title__title">Top Places Visited</h2>
                    <p class="sec-title__text">Excepteur s occaecat cupidatat proident sunt</p>
                </div>
                <div class="row">
                    <!--Start Place One Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="place-one__single">
                            <div class="place-one__single-img">
                                <div class="place-one__single-img-inner">
                                    <div class="icon-box">
                                        <a href="#"><span class="fa fa-heart"></span></a>
                                    </div>
                                    <img src="assets/images/resources/place-v1-img1.jpg" alt="" />
                                </div>
                                <div class="text-box">
                                    <span>Hotel Storn</span>
                                </div>
                            </div>

                            <div class="place-one__single-content">
                                <div class="top-content">
                                    <h2><a href="listings-details.html">Wedding Off Service</a></h2>
                                    <p>Excepteur sint occaecat </p>

                                    <div class="top-content-bottom">
                                        <div class="location-box">
                                            <div class="icon-box">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>London,Dhaka</p>
                                            </div>
                                        </div>

                                        <div class="number-box">
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <a href="tel:123456789">+65556522222</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content">
                                    <ul class="review-box">
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="icon-star-1"></span></li>
                                    </ul>
                                    <div class="count-box">
                                        <p>(04)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Place One Single-->

                    <!--Start Place One Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="place-one__single">
                            <div class="place-one__single-img">
                                <div class="place-one__single-img-inner">
                                    <div class="icon-box">
                                        <a href="#"><span class="fa fa-heart"></span></a>
                                    </div>
                                    <img src="assets/images/resources/place-v1-img2.jpg" alt="" />
                                </div>
                                <div class="text-box">
                                    <span>Bulding As</span>
                                </div>
                            </div>

                            <div class="place-one__single-content">
                                <div class="top-content">
                                    <h2><a href="listings-details.html">Lisiting & Hotel Store </a></h2>
                                    <p>Excepteur sint occaecat </p>

                                    <div class="top-content-bottom">
                                        <div class="location-box">
                                            <div class="icon-box">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>London,Dhaka</p>
                                            </div>
                                        </div>

                                        <div class="number-box">
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <a href="tel:123456789">+65556522222</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content">
                                    <ul class="review-box">
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="icon-star-1"></span></li>
                                        <li><span class="icon-star-1"></span></li>
                                    </ul>
                                    <div class="count-box">
                                        <p>(03)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Place One Single-->

                    <!--Start Place One Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="place-one__single">
                            <div class="place-one__single-img">
                                <div class="place-one__single-img-inner">
                                    <div class="icon-box">
                                        <a href="#"><span class="fa fa-heart"></span></a>
                                    </div>
                                    <img src="assets/images/resources/place-v1-img3.jpg" alt="" />
                                </div>
                                <div class="text-box">
                                    <span>Storn Car</span>
                                </div>
                            </div>

                            <div class="place-one__single-content">
                                <div class="top-content">
                                    <h2><a href="listings-details.html">Vendor Hotel Car</a></h2>
                                    <p>Excepteur sint occaecat </p>

                                    <div class="top-content-bottom">
                                        <div class="location-box">
                                            <div class="icon-box">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>London,Dhaka</p>
                                            </div>
                                        </div>

                                        <div class="number-box">
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <a href="tel:123456789">+65556522222</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content">
                                    <ul class="review-box">
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                    </ul>
                                    <div class="count-box">
                                        <p>(05)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Place One Single-->

                    <!--Start Place One Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="place-one__single">
                            <div class="place-one__single-img">
                                <div class="place-one__single-img-inner">
                                    <div class="icon-box">
                                        <a href="#"><span class="fa fa-heart"></span></a>
                                    </div>
                                    <img src="assets/images/resources/place-v1-img4.jpg" alt="" />
                                </div>
                                <div class="text-box">
                                    <span>Camera Sin</span>
                                </div>
                            </div>

                            <div class="place-one__single-content">
                                <div class="top-content">
                                    <h2><a href="listings-details.html">Marriott Classic Dinner</a></h2>
                                    <p>Excepteur sint occaecat </p>

                                    <div class="top-content-bottom">
                                        <div class="location-box">
                                            <div class="icon-box">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>London,Dhaka</p>
                                            </div>
                                        </div>

                                        <div class="number-box">
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <a href="tel:123456789">+65556522222</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content">
                                    <ul class="review-box">
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="icon-star-1"></span></li>
                                        <li><span class="icon-star-1"></span></li>
                                    </ul>
                                    <div class="count-box">
                                        <p>(03)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Place One Single-->

                    <!--Start Place One Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="place-one__single">
                            <div class="place-one__single-img">
                                <div class="place-one__single-img-inner">
                                    <div class="icon-box">
                                        <a href="#"><span class="fa fa-heart"></span></a>
                                    </div>
                                    <img src="assets/images/resources/place-v1-img5.jpg" alt="" />
                                </div>
                                <div class="text-box">
                                    <span>Landon City</span>
                                </div>
                            </div>

                            <div class="place-one__single-content">
                                <div class="top-content">
                                    <h2><a href="listings-details.html">Find What You Hotel</a></h2>
                                    <p>Excepteur sint occaecat </p>

                                    <div class="top-content-bottom">
                                        <div class="location-box">
                                            <div class="icon-box">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>London,Dhaka</p>
                                            </div>
                                        </div>

                                        <div class="number-box">
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <a href="tel:123456789">+65556522222</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content">
                                    <ul class="review-box">
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="icon-star-1"></span></li>
                                    </ul>
                                    <div class="count-box">
                                        <p>(04)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Place One Single-->

                    <!--Start Place One Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="place-one__single">
                            <div class="place-one__single-img">
                                <div class="place-one__single-img-inner">
                                    <div class="icon-box">
                                        <a href="#"><span class="fa fa-heart"></span></a>
                                    </div>
                                    <img src="assets/images/resources/place-v1-img6.jpg" alt="" />
                                </div>
                                <div class="text-box">
                                    <span>Book Storn</span>
                                </div>
                            </div>

                            <div class="place-one__single-content">
                                <div class="top-content">
                                    <h2><a href="listings-details.html">Lisiting Off Book</a></h2>
                                    <p>Excepteur sint occaecat </p>

                                    <div class="top-content-bottom">
                                        <div class="location-box">
                                            <div class="icon-box">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>London,Dhaka</p>
                                            </div>
                                        </div>

                                        <div class="number-box">
                                            <div class="icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <a href="tel:123456789">+65556522222</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content">
                                    <ul class="review-box">
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="fa fa-star"></span></li>
                                        <li><span class="icon-star-1"></span></li>
                                        <li><span class="icon-star-1"></span></li>
                                    </ul>
                                    <div class="count-box">
                                        <p>(03)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Place One Single-->
                </div>
            </div>
        </section>
        <!--End Place One-->


        <!--Start Features One-->
        <section class="features-one">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="sec-title__title">Best Wedding Vendors</h2>
                    <p class="sec-title__text">Excepteur s occaecat cupidatat proident sunt</p>
                </div>
                <div class="row">
                    <!--Start Features One Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="features-one__single text-center">
                            <div class="features-one__single-icon">
                                <span class="icon-budget"></span>
                            </div>
                            <div class="features-one__single-title">
                                <h2><a href="#">Budget Planing</a></h2>
                            </div>
                        </div>
                    </div>
                    <!--End Features One Single-->

                    <!--Start Features One Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="features-one__single text-center">
                            <div class="features-one__single-icon">
                                <span class="icon-employee"></span>
                            </div>
                            <div class="features-one__single-title">
                                <h2><a href="#">Vendor Manger</a></h2>
                            </div>
                        </div>
                    </div>
                    <!--End Features One Single-->

                    <!--Start Features One Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="features-one__single text-center">
                            <div class="features-one__single-icon">
                                <span class="icon-checklist"></span>
                            </div>
                            <div class="features-one__single-title">
                                <h2><a href="#">Check List</a></h2>
                            </div>
                        </div>
                    </div>
                    <!--End Features One Single-->

                    <!--Start Features One Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="features-one__single text-center">
                            <div class="features-one__single-icon">
                                <span class="icon-hotels"></span>
                            </div>
                            <div class="features-one__single-title">
                                <h2><a href="#">Lisiting Hotel </a></h2>
                            </div>
                        </div>
                    </div>
                    <!--End Features One Single-->
                </div>
            </div>
        </section>
        <!--End Features One-->


        <!--Start Video One-->
        <section class="video-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__inner">
                            <div class="video-one__bg"
                                style="background-image: url(assets/images/backgrounds/video-v1-bg.jpg);"></div>
                            <div class="video-box">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="video-one__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Video One-->


        <!--Start Testimonial One-->
        <section class="testimonial-one">
            <div class="testimonial-one__bg"
                style="background-image: url(assets/images/backgrounds/testimonial-v1-bg.jpg);"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="sec-title__title">Our Testimonial Say</h2>
                    <p class="sec-title__text">Excepteur s occaecat cupidatat proident sunt</p>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": false,
                            "margin": 30,
                            "nav": false,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 2
                                },
                                "1200": {
                                    "items": 2
                                }
                                }
                            }'>

                            <!--Start Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-quote-icon">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="testimonial-one__single-top">
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v1-img1.jpg" alt="" />
                                    </div>
                                    <div class="text-box">
                                        <h2>Morand Daro</h2>
                                        <p>Founder</p>
                                    </div>
                                </div>
                                <div class="testimonial-one__single-text">
                                    <p>There are many variations of passages of Lorem Ipsum available,
                                        have suffered alteration in some form, by injected humour, or
                                        which don't look even slightly believable. If you are going to
                                        Ipsum, you need to be sure there isn't embarrassing.. </p>
                                </div>
                                <ul class="review-box">
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                </ul>
                            </div>
                            <!--End Testimonial One Single-->

                            <!--Start Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__single-quote-icon">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="testimonial-one__single-top">
                                    <div class="img-box">
                                        <img src="assets/images/testimonial/testimonial-v1-img2.jpg" alt="" />
                                    </div>
                                    <div class="text-box">
                                        <h2>Rubel Robi</h2>
                                        <p>Seo</p>
                                    </div>
                                </div>
                                <div class="testimonial-one__single-text">
                                    <p>There are many variations of passages of Lorem Ipsum available,
                                        have suffered alteration in some form, by injected humour, or
                                        which don't look even slightly believable. If you are going to
                                        Ipsum, you need to be sure there isn't embarrassing.. </p>
                                </div>
                                <ul class="review-box">
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                </ul>
                            </div>
                            <!--End Testimonial One Single-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial One-->


        <!--Start Blog One-->
        <section class="blog-one">
            <div class="container">
                <div class="sec-title text-center">
                    <h2 class="sec-title__title">Our Largest Blog</h2>
                    <p class="sec-title__text">Excepteur s occaecat cupidatat proident sunt</p>
                </div>
                <div class="row">
                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="assets/images/blog/blog-v1-img1.jpg" alt="" />
                            </div>

                            <div class="blog-one__single-content">
                                <p class="blog-one__single-content-tagline">Excepteur occaecat cupidatat </p>
                                <h2><a href="blog-details.html">Besting and commercial We <br> with This Blog.</a></h2>
                                <div class="line"></div>
                                <div class="text">
                                    <p>There are many variations of passages off ran
                                        of lorem Ipsum available.. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="assets/images/blog/blog-v1-img2.jpg" alt="" />
                            </div>

                            <div class="blog-one__single-content">
                                <p class="blog-one__single-content-tagline">Excepteur occaecat cupidatat </p>
                                <h2><a href="blog-details.html">Strategic and commercial this <br> with Can issues.</a>
                                </h2>
                                <div class="line"></div>
                                <div class="text">
                                    <p>There are many variations of passages off ran
                                        of lorem Ipsum available.. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="assets/images/blog/blog-v1-img3.jpg" alt="" />
                            </div>

                            <div class="blog-one__single-content">
                                <p class="blog-one__single-content-tagline">Excepteur occaecat cupidatat </p>
                                <h2><a href="blog-details.html">Modaer and invenity Welk <br>Now Off Blog.</a></h2>
                                <div class="line"></div>
                                <div class="text">
                                    <p>There are many variations of passages off ran
                                        of lorem Ipsum available.. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->
                </div>
            </div>
        </section>
        <!--End Blog One-->

        <!--Start Brand One-->
        <section class="brand-one">
            <div class="brand-one__bg" style="background-image: url(assets/images/backgrounds/brand-v1-bg.jpg);"></div>
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                                            "0": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 1
                                            },
                                            "375": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 2
                                            },
                                            "575": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 2
                                            },
                                            "767": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 3
                                            },
                                            "991": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 4
                                            },
                                            "1199": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 6
                                            }
                                        }}'>
                    <div class="swiper-wrapper">

                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img1.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img2.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img3.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img4.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img5.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img6.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img1.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img2.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img3.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img4.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img5.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                        <!--Start Brand One Single-->
                        <div class="swiper-slide">
                            <a href="#"><img src="assets/images/brand/brand-v1-img6.png" alt=""></a>
                        </div>
                        <!--End Brand One Single-->
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand One-->

        <!--Start Footer One-->
        <footer class="footer-one">
            <div class="footer-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__top-inner">
                                <div class="row">

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                        <div class="footer-widget__column footer-widget__about">
                                            <div class="footer-widget__about-logo">
                                                <a href="index.html"><img src="assets/images/resources/footer-logo.png"
                                                        alt=""></a>
                                            </div>

                                            <ul class="footer-widget__about-contact-info">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Open Hours of Government: <br> Mon - Fri: 8.00 am. - 6.00 pm.
                                                        </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-map-marker"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p> 13/A, Miranda Halim City .
                                                        </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-phone rotate"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p><a href="tel:123456789">099 695 695 35</a>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="footer-widget__about-social-link">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <span class="first icon-facebook-app-symbol"></span>
                                                            <span class="second icon-facebook-app-symbol"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <span class="first icon-pinterest"></span>
                                                            <span class="second icon-pinterest"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <span class="first icon-twitter"></span>
                                                            <span class="second icon-twitter"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <span class="first icon-linkedin"></span>
                                                            <span class="second icon-linkedin"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                        <div class="footer-widget__column footer-widget__services">
                                            <h2 class="footer-widget__title">Services</h2>
                                            <ul class="footer-widget__services-list">
                                                <li class="footer-widget__services-list-item"><a href="#">Why choose
                                                        us</a></li>

                                                <li class="footer-widget__services-list-item"><a href="#">Our
                                                        solutions</a></li>

                                                <li class="footer-widget__services-list-item"><a href="#">Partners</a>
                                                </li>

                                                <li class="footer-widget__services-list-item"><a href="#">Core
                                                        values</a></li>

                                                <li class="footer-widget__services-list-item"><a href="#">Our
                                                        projects</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                                        <div class="footer-widget__column footer-widget__link">
                                            <h2 class="footer-widget__title">Quick Link</h2>
                                            <ul class="footer-widget__link-list">
                                                <li class="footer-widget__link-list-item"><a href="#">Residents</a></li>

                                                <li class="footer-widget__link-list-item"><a href="#">Business</a></li>

                                                <li class="footer-widget__link-list-item"><a href="#">Online Service</a>
                                                </li>

                                                <li class="footer-widget__link-list-item"><a href="#">Visiting</a></li>

                                                <li class="footer-widget__link-list-item"><a href="#">Employment</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                                        <div class="footer-widget__column footer-widget__map">
                                            <h2 class="footer-widget__title">City Map</h2>
                                            <div class="footer-widget__map-box">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                                    class="footer-widget-map__one" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Start Footer One Bottom-->
            <div class="footer-one__bottom clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__bottom-inner text-center">
                                <div class="footer-one__bottom-text">
                                    <p>Copyright © 2022 <a href="index.html">Korax.</a> All Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer One Bottom-->
        </footer>
        <!--End Footer One-->

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@korax.com</a>
                </li>
                <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->



    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn2">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->



    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/twentytwenty/twentytwenty.js"></script>
    <script src="assets/vendors/twentytwenty/jquery.event.move.js"></script>
    <script src="assets/vendors/parallax/parallax.min.js"></script>
    <script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="assets/vendors/progress-bar/knob.js"></script>
    <script src="assets/vendors/tilt.js/tilt.jquery.js"></script>
    <script src="assets/vendors/sidebar-content/jquery-sidebar-content.js"></script>
    <script src="assets/vendors/language-switcher/jquery.polyglot.language.switcher.js"></script>
    <script src="assets/vendors/vegas-slider/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>

    <!-- template js -->
    <script src="assets/js/script.js"></script>


</body>

</html>