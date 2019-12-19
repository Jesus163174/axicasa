<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Multipage - Real Estate Home Page | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans:400,500,600" rel="stylesheet">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/bootstrap/bootstrap.min.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/icon-line/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/icon-line-pro/style.css')}}">
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/icon-hs/style.css')}}">
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('customer/assets/vendor/fancybox/jquery.fancybox.min.css')}}">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{{asset('customer/assets-main/css/styles.multipage-real-estate.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('customer/assets/css/custom.css')}}">
</head>

<body>
<!-- Header -->
<header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance"
        data-header-fix-moment="600"
        data-header-fix-effect="slide">
    <div class="u-header__section g-transition-0_5"
         data-header-fix-moment-exclude="g-mt-0"
         data-header-fix-moment-classes="g-mt-minus-73 g-mt-minus-76--md">
        <!-- Topbar -->
        <div class="g-bg-white">
            <div class="container-fluid g-py-15">
                <div class="row align-items-center">
                    <div class="col-2 col-md-4 col-lg-2">
                        <!-- Logo -->
                        <a class="navbar-brand d-flex align-items-center g-color-main text-uppercase g-text-underline--none--hover" href="home-page-1.html">
                            <span class="g-color-text g-font-size-35 g-line-height-0_7 g-opacity-0_4 mr-4"><i class="icon-real-estate-066 u-line-icon-pro"></i></span>
                            <span class="d-block g-hidden-sm-down g-font-weight-600 g-line-height-1_4">
                    Axicasa
                    <span class="d-block g-color-text g-font-size-10 text-center">Inmuebles</span>
                  </span>
                        </a>
                        <!-- End Logo -->
                    </div>

                    <div class="col-lg-4 g-hidden-md-down">
                        <!-- Social Icons -->
                        <ul class="list-inline d-flex align-items-center ml-3 mb-0">
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v3 u-icon-size--xs g-color-gray-dark-v5 g-color-white--hover g-bg-transparent g-bg-primary-dark-v1--hover" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v3 u-icon-size--xs g-color-gray-dark-v5 g-color-white--hover g-bg-transparent g-bg-primary-dark-v1--hover" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v3 u-icon-size--xs g-color-gray-dark-v5 g-color-white--hover g-bg-transparent g-bg-primary-dark-v1--hover" href="#">
                                    <i class="fa fa-tumblr"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v3 u-icon-size--xs g-color-gray-dark-v5 g-color-white--hover g-bg-transparent g-bg-primary-dark-v1--hover" href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v3 u-icon-size--xs g-color-gray-dark-v5 g-color-white--hover g-bg-transparent g-bg-primary-dark-v1--hover" href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>

                            <li class="list-inline-item mr-5"></li>

                            <!-- End Apps -->
                        </ul>
                        <!-- End Social Icons -->
                    </div>

                    <div class="col-10 col-md-8 col-lg-6 ml-auto">
                        <!-- List -->
                        <ul class="list-inline float-right mb-0">
                            <!-- Guide -->
                            <li class="list-inline-item">
                                @guest()
                                    <a class="u-link-v5 g-color-white g-bg-primary g-bg-primary-dark-v1--hover g-font-weight-500 g-px-15 g-py-10" href="/auth/login">Login</a>
                                @else
                                    <a class="u-link-v5 g-color-white g-bg-primary g-bg-primary-dark-v1--hover g-font-weight-500 g-px-15 g-py-10" href="/dashboard">{{Auth::user()->nombre}}</a>
                                @endguest
                            </li>
                        </ul>
                        <!-- End List -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->

        <nav class="js-mega-menu navbar navbar-expand-lg g-brd-y g-brd-2 g-brd-primary-dark-v1 g-bg-primary g-pa-0">
            <div class="container-fluid">
                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0" type="button"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar">
              <span class="hamburger hamburger--slider g-px-0">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </span>
                </button>
                <!-- End Responsive Toggle Button -->

                <div class="col-auto order-lg-1">
                    <!-- Search Form -->
                    <form id="searchform-1" class="g-min-width-180--sm g-min-width-315--xl g-brd-right g-brd-primary-dark-v1 g-pos-rel">
                        <span class="g-color-white g-pos-abs g-top-15"><i class="fa fa-search"></i></span>
                        <input class="form-control w-100 g-brd-transparent g-color-white g-bg-transparent g-font-size-13 g-pl-25 g-py-18" type="text" placeholder="Search by City, Address, ZIP ...">
                    </form>
                    <!-- End Search Form -->
                </div>
                <!-- Navigation -->
                <div id="navBar" class="collapse navbar-collapse align-items-center order-lg-last g-brd-top g-brd-none--lg g-brd-primary-dark-v1">
                    <ul class="navbar-nav g-py-30 g-py-0--lg">
                        <li class="nav-item">
                            <a class="nav-link g-color-white g-brd-x--lg g-brd-primary-dark-v1 g-bg-primary-dark-v1--hover g-font-weight-600 g-font-size-default g-px-17 g-px-23--xl g-py-15" href="home-page-1.html">
                                Inicio
                            </a>
                        </li>

                        <!-- Listing - Submenu -->
                        <li class="nav-item hs-has-sub-menu">
                            <a id="nav-link--listing" class="nav-link g-color-white g-brd-right--lg g-brd-primary-dark-v1 g-bg-primary-dark-v1--hover g-font-weight-600 g-font-size-default g-px-17 g-px-23--xl g-py-15" href="#"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu--listing">
                                Inmuebles
                            </a>

                            <!-- Submenu -->
                            <ul id="nav-submenu--listing" class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-mt-2"
                                aria-labelledby="nav-link--listing">
                                <li class="dropdown-item">
                                    <a class="nav-link g-color-text g-font-weight-600" href="page-list-view-1.html">Listado</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link g-color-text g-font-weight-600" href="page-grid-view-1.html">Grid de inmuebles</a>
                                </li>
                            </ul>
                            <!-- End Submenu -->
                        </li>
                        <!-- End Listing - Submenu -->

                        <!-- Agents - Submenu -->

                        <li class="nav-item">
                            <a class="nav-link g-color-white g-brd-right--lg g-brd-primary-dark-v1 g-bg-primary-dark-v1--hover g-font-weight-600 g-font-size-default g-px-17 g-px-23--xl g-py-15" href="page-share-1.html">
                                Acerca de
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-color-white g-brd-right--lg g-brd-primary-dark-v1 g-bg-primary-dark-v1--hover g-font-weight-600 g-font-size-default g-px-17 g-px-23--xl g-py-15" href="page-help-1.html">
                                Ayuda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link g-color-white g-brd-right--lg g-brd-primary-dark-v1 g-bg-primary-dark-v1--hover g-font-weight-600 g-font-size-default g-px-17 g-px-23--xl g-py-15" href="page-contacts-1.html">
                                Contacto
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
</header>
<!-- End Header -->

<!-- Content -->
<main>
   @yield('content')
</main>
<!-- End Content -->

<!-- Footer -->
<footer class="container g-pt-100 g-pb-70">
    <div class="row">
        <div class="col-md-3 text-center text-md-left g-mb-30">
            <!-- Logo -->
            <a class="d-block d-lg-flex align-items-center g-color-main text-uppercase g-text-underline--none--hover g-mb-30" href="home-page-1.html">
                <span class="g-color-text g-font-size-35 g-line-height-0_7 g-opacity-0_4 mr-4"><i class="icon-real-estate-066 u-line-icon-pro"></i></span>
                <span class="d-block g-font-weight-600 g-line-height-1_4">
              Real Estate
              <span class="d-block g-color-text g-font-size-10 text-center">Your Reliability</span>
            </span>
            </a>
            <!-- End Logo -->

            <!-- Button Group -->
            <div class="btn-group dropup">
                <button class="btn btn-black btn-lg g-brd-gray-light-v3 g-color-main g-color-primary--hover g-bg-white g-font-weight-500 g-font-size-default rounded-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    United Kingdom
                    <i class="g-font-size-12 ml-2 fa fa-caret-up"></i>
                </button>
                <div class="dropdown-menu g-brd-gray-light-v3 rounded-0">
                    <a class="dropdown-item g-color-main g-bg-primary--hover g-bg-primary--active g-py-10" href="#">
                        United Kingdom
                    </a>
                    <a class="dropdown-item g-color-main g-bg-primary--hover g-bg-primary--active g-py-10" href="#">
                        United States
                    </a>
                    <a class="dropdown-item g-color-main g-bg-primary--hover g-bg-primary--active g-py-10" href="#">
                        Russia
                    </a>
                    <a class="dropdown-item g-color-main g-bg-primary--hover g-bg-primary--active g-py-10" href="#">
                        Germany
                    </a>
                </div>
            </div>
            <!-- End Button Group -->
        </div>

        <div class="col-md-6 text-center g-mb-30">
            <span class="d-block g-color-text g-font-size-13 mb-4">&#169; Htmlstream. All Rights Reserved. 2013 - 2017</span>

            <!-- Footer - List -->
            <ul class="list-inline mb-5">
                <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-main g-color-primary--hover g-font-weight-500" href="#">For Rent</a></li>
                <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-main g-color-primary--hover g-font-weight-500" href="#">For Sale</a></li>
                <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-main g-color-primary--hover g-font-weight-500" href="#">New Buildings</a></li>
                <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-main g-color-primary--hover g-font-weight-500" href="#">Agents</a></li>
                <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-main g-color-primary--hover g-font-weight-500" href="#">Help</a></li>
                <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-main g-color-primary--hover g-font-weight-500" href="#">Contact Us</a></li>
            </ul>
            <!-- End Footer - List -->

            <!-- Go to Top -->
            <a class="js-go-to u-go-to-v3 g-width-40 g-height-40 g-color-primary" href="#"
               data-offset-top="400"
               data-compensation="#js-header"
               data-show-effect="zoomIn">
                <i class="g-brd-gray-light-v3 g-brd-primary--hover rounded-0 fa fa-long-arrow-up"></i>
            </a>
            <!-- End Go to Top -->
        </div>

        <div class="col-md-3 text-center g-mb-30">
            <h3 class="g-font-weight-600 g-font-size-13 text-uppercase">Follow us on:</h3>

            <!-- Social Icons -->
            <ul class="list-inline mb-0">
                <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 g-width-35 g-height-35 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-white--hover g-bg-transparent g-bg-primary-dark-v1--hover g-font-size-13" href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 g-width-35 g-height-35 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-white--hover g-bg-transparent g-bg-primary-dark-v1--hover g-font-size-13" href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 g-width-35 g-height-35 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-white--hover g-bg-transparent g-bg-primary-dark-v1--hover g-font-size-13" href="#">
                        <i class="fa fa-tumblr"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 g-width-35 g-height-35 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-white--hover g-bg-transparent g-bg-primary-dark-v1--hover g-font-size-13" href="#">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 g-width-35 g-height-35 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-white--hover g-bg-transparent g-bg-primary-dark-v1--hover g-font-size-13" href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
            </ul>
            <!-- End Social Icons -->
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- JS Global Compulsory -->
<script src="{{asset('customer/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('customer/assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
<script src="{{asset('customer/assets/vendor/popper.js/popper.min.js')}}"></script>
<script src="{{asset('customer/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{asset('customer/assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
<script src="{{asset('customer/assets/vendor/jquery-ui/ui/widget.js')}}"></script>
<script src="{{asset('customer/assets/vendor/jquery-ui/ui/widgets/menu.js')}}"></script>
<script src="{{asset('customer/assets/vendor/jquery-ui/ui/widgets/mouse.js')}}"></script>
<script src="{{asset('customer/assets/vendor/jquery-ui/ui/widgets/slider.js')}}"></script>
<script src="{{asset('customer/assets/vendor/chosen/chosen.jquery.js')}}"></script>
<script src="{{asset('customer/assets/vendor/slick-carousel/slick/slick.js')}}"></script>
<script src="{{asset('customer/assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>

<!-- JS Unify -->
<script src="{{asset('customer/assets/js/hs.core.js')}}"></script>
<script src="{{asset('customer/assets/js/components/hs.header.js')}}"></script>
<script src="{{asset('customer/assets/js/helpers/hs.hamburgers.js')}}"></script>
<script src="{{asset('customer/assets/js/components/hs.dropdown.js')}}"></script>
<script src="{{asset('customer/assets/js/components/hs.slider.js')}}"></script>
<script src="{{asset('customer/assets/js/components/hs.select.js')}}"></script>
<script src="{{asset('customer/assets/js/components/hs.carousel.js')}}"></script>
<script src="{{asset('customer/assets/js/components/hs.popup.js')}}"></script>
<script src="{{asset('customer/assets/js/components/hs.go-to.js')}}"></script>

<!-- JS Customization -->
<script src={{asset('customer/assets/js/custom.js')}}"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
        });

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
            afterOpen: function () {
                $(this).find('input[type="search"]').focus();
            }
        });

        // initialization of range slider
        $.HSCore.components.HSSlider.init('#rangeSlider1');

        // initialization of custom select
        $.HSCore.components.HSSelect.init('.js-custom-select');

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
    });
</script>
</body>
</html>
