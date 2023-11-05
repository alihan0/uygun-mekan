
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - {{env('APP_NAME')}}</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Korax HTML 5 Template " />

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Text:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/assets/vendors/icomoon-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/twentytwenty/twentytwenty.css" />
    <link rel="stylesheet" href="/assets/vendors/language-switcher/polyglot-language-switcher.css" />
    <link rel="stylesheet" href="/assets/vendors/vegas-slider/vegas.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nice-select/nice-select.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"/>
    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />
    <link rel="stylesheet" href="/assets/css/scrollbar.css" />
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
                                            <a href="/"><img src="/assets/images/uygun-mekan-logo.png"
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
                                                    <a href="javascript:;">Mekanlar</a>
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

                                        
                                        @if(Auth::check())
                                        <div class="main-header-one__bottom-right-btn">
                                            <a href="/account" class=""><i class="fas fa-user-circle"></i> {{Auth::user()->name}} </a>
                                            <br>
                                            @if (Auth::user()->isAdmin())
                                            <a href="/admin" class="float-start pe-2 border-end" style="font-size:12px"><i class="fas fa-tachometer-alt"></i> Admin Paneli </a>
                                            @endif
                                            <a href="/auth/logout" class="float-end text-danger ps-2" style="font-size:12px"><i class="fas fa-power-off"></i> Çıkış Yap </a>

                                        </div>
                                        @else
                                        <div class="main-header-one__bottom-right-btn">
                                            <a href="/auth/login" class=""><i class="fas fa-user-circle"></i> Giriş Yap </a>
                                        </div>
                                        @endif
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


        @yield('content')

        <!--Start Footer One-->
        <footer class="footer-one">
            <div class="footer-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__top-inner">
                                <div class="row">

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                        <div class="footer-widget__column footer-widget__about">
                                            <div class="footer-widget__about-logo">
                                                <a href="index.html"><img src="/assets/images/uygun-mekan-logo.png" width="100"
                                                        alt=""></a>
                                            </div>

                                            <ul class="footer-widget__about-contact-info">
                                            

                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-map-marker"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>{{$system->address}}</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-envelope"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p><a href="#">{{$system->email1}}</a>
                                                        </p>
                                                    </div>
                                                </li>

                                                @if ($system->email2)
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-envelope"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p><a href="#">{{$system->email2}}</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                @endif

                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-phone rotate"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p><a href="#">{{$system->phone1}}</a>
                                                        </p>
                                                    </div>
                                                </li>

                                                @if ($system->phone2)
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-phone rotate"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p><a href="#">{{$system->phone2}}</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                @endif
                                            </ul>

                                            
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                        <div class="footer-widget__column footer-widget__services">
                                            <h2 class="footer-widget__title">Kurumsal</h2>
                                            <ul class="footer-widget__services-list">
                                                <li class="footer-widget__services-list-item"><a href="#">Hakkımızda</a></li>

                                                <li class="footer-widget__services-list-item"><a href="#">Kategoriler</a></li>
                                                <li class="footer-widget__services-list-item"><a href="#">Mekanlar</a></li>

                                                <li class="footer-widget__services-list-item"><a href="#">Blog</a></li>

                                                <li class="footer-widget__services-list-item"><a href="#">Kariyer</a>
                                                </li>

                                                

                                                <li class="footer-widget__services-list-item"><a href="#">İletişim</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                                        <div class="footer-widget__column footer-widget__link">
                                            <h2 class="footer-widget__title">Mekanlar</h2>
                                            <ul class="footer-widget__link-list">
                                                
                                                @foreach ($categories as $category)
                                                <li class="footer-widget__link-list-item"><a href="/category/{{$category->slug}}">{{$category->name}}</a></li>
                                                @endforeach

                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                                        <div class="footer-widget__column footer-widget__map">
                                            <h2 class="footer-widget__title">Yeni Eklenenler</h2>
                                            <ul class="footer-widget__link-list">
                                                
                                                @foreach ($categories as $category)
                                                <li class="footer-widget__link-list-item"><a href="/category/{{$category->slug}}">{{$category->name}}</a></li>
                                                @endforeach

                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="footer-widget__about-social-link">
                                        <ul>
                                            <li>
                                                <a href="{{$system->facebook}}">
                                                    <span class="first icon-facebook-app-symbol"></span>
                                                    <span class="second icon-facebook-app-symbol"></span>
                                                </a>
                                            </li>
    
                                            
    
                                            <li>
                                                <a href="{{$system->twitter}}">
                                                    <span class="first icon-twitter"></span>
                                                    <span class="second icon-twitter"></span>
                                                </a>
                                            </li>
    
                                            <li>
                                                <a href="{{$system->instagram}}">
                                                    <span class="first icon-instagram"></span>
                                                    <span class="second icon-instagram"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class=" align-self-end">
                                                
                                        <li class="footer-widget__link-list-item float-start me-1"><a href="/company/terms-of-use">Kullanım Şartları</a> <i class="fas fa-circle text-white p-1" style="font-size:8px;"></i></li>
                                        <li class="footer-widget__link-list-item float-start"><a href="/company/privacy">Gizlilik Politikası</a><i class="fas fa-circle text-white p-1" style="font-size:8px;"></i></li>
                                        <li class="footer-widget__link-list-item float-start"><a href="/company/membership-terms">Üyelik Sözleşmesi</a></li>
                                        

                                        
                                    </ul>

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
                            <div class="footer-one__bottom-inner d-flex justify-content-between">
                                <div class="footer-one__bottom-text">
                                    <p>Copyright © 2023 - <a href="/" class="text-decoration-underline">Uygun Mekan.</a> | Tüm hakları saklıdır.</p>
                                </div>
                                <div class="footer-one__bottom-text">
                                    <p><a href="https://metatige.com" target="_blank" class="text-decoration-underline"> Metatige</a> tarafından geliştirilmiştir.</p>
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
                <a href="index.html" aria-label="logo image"><img src="/assets/images/resources/logo-2.png" width="155"
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
    <div id="welcomeModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position:absolute;z-index:99999999; background:#000;border-radius:50%;color:#fff;right:0;margin-top:-10px;margin-right:-10px;"><i class="fas fa-times d-flex justify-content-center text-center align-items-center fa-sm text-danger"></i></button>

            <div class="modal-body">
              <a href="{{$system->welcomemodal_src}}"><img src="{{$system->welcomemodal_img}}" alt=""></a>
            </div>
          </div>
        </div>
      </div>


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/odometer/odometer.min.js"></script>
    <script src="/assets/vendors/swiper/swiper.min.js"></script>
    <script src="/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="/assets/vendors/wow/wow.js"></script>
    <script src="/assets/vendors/isotope/isotope.js"></script>
    <script src="/assets/vendors/countdown/countdown.min.js"></script>
    <script src="/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendors/twentytwenty/twentytwenty.js"></script>
    <script src="/assets/vendors/twentytwenty/jquery.event.move.js"></script>
    <script src="/assets/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="/assets/vendors/progress-bar/knob.js"></script>
    <script src="/assets/vendors/tilt.js/tilt.jquery.js"></script>
    <script src="/assets/vendors/sidebar-content/jquery-sidebar-content.js"></script>
    <script src="/assets/vendors/language-switcher/jquery.polyglot.language.switcher.js"></script>
    <script src="/assets/vendors/vegas-slider/vegas.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <!-- template js -->
    <script src="/assets/js/script.js"></script>
      @yield('script')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var welcomeCookie = getCookie('welcome');

        if (!welcomeCookie) {
            // Cookie yoksa oluştur
            var now = new Date();
            var expireTime = new Date(now.getTime() + 1 * 3600 * 1000); // 1 saat
            document.cookie = 'welcome=true; expires=' + expireTime.toUTCString() + '; path=/';

            // #welcomeModal'ı çalıştır
            var welcomeModal = document.getElementById('welcomeModal');
            if (welcomeModal) {
                var bootstrapModal = new bootstrap.Modal(welcomeModal);
                bootstrapModal.show();
            }
        }
    });

    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
    }

    </script>
</body>

</html>