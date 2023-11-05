
<!doctype html>
<html lang="tr">

    <head>
        
        <meta charset="utf-8" />
        <title>@yield('title') - {{env('APP_NAME')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                      

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="/admin/assets/images/metatige-vdark.png" alt="" height="35">
                                </span>
                                <span class="logo-lg">
                                    <img src="/admin/assets/images/metatige-hlight.png" alt="" height="35">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        

                        
                    </div>

                    <div class="d-flex">

                        

                        

                        

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="/admin/assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Auth::user()->name}}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="/panel/profile"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profil</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="/auth/logout"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Çıkış Yap</span></a>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="/panel" class=" waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Kontrol Paneli</span>
                                </a>
                                
                            </li>

                            <li>
                                <a href="/panel/user" class=" waves-effect">
                                    <i class="fas fa-user"></i>
                                    <span key="t-dashboards">Kullanıcılar</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="/panel/category" class=" waves-effect">
                                    <i class="fas fa-list"></i>
                                    <span key="t-dashboards">Kategoriler</span>
                                </a>
                                
                            </li>

                            <li>
                                <a href="/panel/place" class=" waves-effect">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span key="t-dashboards">Mekanlar</span>
                                </a>
                                
                            </li>

                            <li>
                                <a href="/panel/payment" class=" waves-effect">
                                    <i class="fas fa-wallet"></i>
                                    <span key="t-dashboards">Ödemeler</span>
                                </a>
                                
                            </li>

                            <li>
                                <a href="/panel/contact" class=" waves-effect">
                                    <i class="fas fa-comments"></i>
                                    <span key="t-dashboards">İletişim Formu</span>
                                </a>
                                
                            </li>

                            <li>
                                <a href="/panel/settings" class=" waves-effect">
                                    <i class="fas fa-edit"></i>
                                    <span key="t-dashboards">Sayfa Ayarları</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="/panel/api" class=" waves-effect">
                                    <i class="fas fa-cog"></i>
                                    <span key="t-dashboards">API Ayarları</span>
                                </a>
                                
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Transaction Modal -->
                
                <!-- end modal -->

                <!-- subscribeModal -->
                
                <!-- end modal -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                Copyright © <script>document.write(new Date().getFullYear())</script> - <a href="https://metatige.com" target="_blank">Metatige Digital</a> | Tüm hakkları saklıdır.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    v0.1.5
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        

        <!-- JAVASCRIPT -->
        <script src="/admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/admin/assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="/admin/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="/admin/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="/admin/assets/js/app.js"></script>
    </body>

</html>