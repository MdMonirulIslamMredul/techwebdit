  <!--Full width header Start-->
        <style>
            /* Center main-menu links */
            .rs-header .menu-area .rs-menu-area {
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                width: 100% !important;
            }
            .rs-header .menu-area .main-menu {
                flex-grow: 1 !important;
                display: flex !important;
                justify-content: center !important;
            }
            .rs-header .menu-area .main-menu .rs-menu {
                width: 100% !important;
            }
            .rs-header .menu-area .main-menu .rs-menu ul.nav-menu {
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                flex-wrap: nowrap !important;
                white-space: nowrap !important;
                margin: 0 auto !important;
            }
            .rs-header .menu-area .main-menu .rs-menu ul.nav-menu > li {
                margin-right: 20px !important;
                display: inline-flex !important;
                align-items: center !important;
                position: relative !important;
            }
            .rs-header .menu-area .main-menu .rs-menu ul.nav-menu > li:last-child {
                margin-right: 0 !important;
            }
              .rs-header .menu-area .main-menu .rs-menu ul.nav-menu > li > a {
                font-size: 14px !important;
                white-space: nowrap !important;
            }

            /* Active link highlighting for open page */
            .rs-header .menu-area .main-menu .rs-menu ul.nav-menu > li.current-menu-item > a,
            .rs-header .menu-area .main-menu .rs-menu ul.nav-menu > li.active > a {
                color: #2563eb !important;
                font-weight: 700 !important;
                position: relative;
            }
            .rs-header .menu-area .main-menu .rs-menu ul.nav-menu > li.current-menu-item > a::after,
            .rs-header .menu-area .main-menu .rs-menu ul.nav-menu > li.active > a::after {
                content: '';
                position: absolute;
                bottom: 12px;
                left: 0;
                width: 100%;
                height: 3px;
                background-color: #2563eb;
                border-radius: 3px;
            }

            @media (max-width: 1400px) and (min-width: 992px) {
                .rs-header .menu-area .main-menu .rs-menu ul.nav-menu > li {
                    margin-right: 12px !important;
                }
                .rs-header .menu-area .main-menu .rs-menu ul.nav-menu > li > a {
                    font-size: 13.5px !important;
                }
            }

            /* Sub-menu Dropdown: force vertical column layout (list top-to-bottom, stacked) */
            .rs-header .menu-area .main-menu .rs-menu ul.sub-menu {
                display: flex !important;
                flex-direction: column !important;
                min-width: 230px !important;
                width: max-content !important;
                padding: 10px 0 !important;
                margin: 0 !important;
                background: #ffffff !important;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
                border-radius: 6px !important;
                text-align: left !important;
            }
            .rs-header .menu-area .main-menu .rs-menu ul.sub-menu > li {
                display: block !important;
                width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
                text-align: left !important;
            }
            .rs-header .menu-area .main-menu .rs-menu ul.sub-menu > li > a {
                display: block !important;
                width: 100% !important;
                padding: 10px 22px !important;
                height: auto !important;
                line-height: 1.5 !important;
                font-size: 14px !important;
                font-weight: 500 !important;
                color: #1e293b !important;
                text-align: left !important;
                white-space: nowrap !important;
                transition: background-color 0.2s ease, color 0.2s ease !important;
            }
            .rs-header .menu-area .main-menu .rs-menu ul.sub-menu > li > a:hover {
                background-color: #f1f5f9 !important;
                color: #2563eb !important;
            }

            @media (min-width: 992px) {
                .container-fluid {
                    padding-left: 100px !important;
                    padding-right: 100px !important;
                }
            }
        </style>
        <div class="full-width-header">
            <!--Header Start-->
            <header id="rs-header" class="rs-header style3 modify2 header-transparent">
                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container-fluid px-lg-5">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <div class="logo-part">
                                    <a href="/">
                                        <img class="normal-logo"
                                            src="{{ asset(get_setting('frontend_logo_menu')) }}" alt="logo">
                                        <img class="sticky-logo"
                                            src="{{ asset(get_setting('frontend_logo_menu')) }}" alt="logo">
                                    </a>
                                </div>
                                <div class="mobile-menu">
                                    <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-10 text-center">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <nav class="rs-menu pr-0 md-pr-0">
                                            <ul class="nav-menu">
                                                <li class="{{ Route::is('frontend.index') || request()->is('/') ? 'current-menu-item active' : '' }}"><a href="/">Home</a></li>
                                                <li class="{{ request()->is('about') ? 'current-menu-item active' : '' }}"><a href="/about">About</a></li>
                                                  @php
                                                      $headerServices = DB::table('services')
                                                          ->where('is_active', 1)
                                                          ->get();
                                                  @endphp
                                                 <li class="menu-item-has-children {{ Route::is('frontend.services') || Route::is('frontend.servicedetails') || request()->is('services') || request()->is('service/*') ? 'current-menu-item active' : '' }}">
                                                     <a href="{{ route('frontend.services') }}">Services</a>
                                                     <ul class="sub-menu">
                                                         @foreach ($headerServices as $headerService)
                                                         <li class="{{ request()->is('service/details/' . $headerService->id) ? 'active' : '' }}">
                                                             <a href="{{ route('frontend.servicedetails', $headerService->id) }}">{{ $headerService->title }}</a>
                                                         </li>
                                                         @endforeach
                                                     </ul>
                                                 </li>
                                             
                                                <li class="{{ request()->is('team') ? 'current-menu-item active' : '' }}">
                                                    <a href="/team">Our Team</a>
                                                </li>
                                                <li class="{{ request()->is('clients') ? 'current-menu-item active' : '' }}">
                                                    <a href="/clients">Our Clients</a>
                                                </li>
                                                <li class="{{ request()->is('portfolio') || request()->is('event/*') ? 'current-menu-item active' : '' }}">
                                                    <a href="/portfolio">Portfolio</a>
                                                </li>
                                                <li class="{{ Route::is('frontend.packages') || request()->is('packages') ? 'current-menu-item active' : '' }}">
                                                    <a href="{{ route('frontend.packages') }}">Packages</a>
                                                </li>
                                                <li class="{{ Route::is('frontend.blogs') || Route::is('frontend.blogdetails') || request()->is('blogs') || request()->is('blog/*') ? 'current-menu-item active' : '' }}">
                                                    <a href="{{ route('frontend.blogs') }}">Blogs</a>
                                                </li>
                                                <li class="{{ request()->is('contact') ? 'current-menu-item active' : '' }}">
                                                    <a href="/contact">Contact</a>
                                                </li>
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                    <div class="expand-btn-inner search-icon hidden-md">
                                        <ul>
                                            <li class="sidebarmenu-search">
                                                <a class="hidden-xs rs-search" data-target=".search-modal"
                                                    data-toggle="modal" href="#">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="nav-expander" class="humburger nav-expander" href="#">
                                                    <span class="dot1"></span>
                                                    <span class="dot2"></span>
                                                    <span class="dot3"></span>
                                                    <span class="dot4"></span>
                                                    <span class="dot5"></span>
                                                    <span class="dot6"></span>
                                                    <span class="dot7"></span>
                                                    <span class="dot8"></span>
                                                    <span class="dot9"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
            </header>
            <!--Header End-->

            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn">
                    <div class="nav-link">
                        <a id="nav-close" class="humburger nav-expander" href="#">
                            <span class="dot1"></span>
                            <span class="dot2"></span>
                            <span class="dot3"></span>
                            <span class="dot4"></span>
                            <span class="dot5"></span>
                            <span class="dot6"></span>
                            <span class="dot7"></span>
                            <span class="dot8"></span>
                            <span class="dot9"></span>
                        </a>
                    </div>
                </div>
                <div class="canvas-logo">
                    <a href="/"><img src="{{ asset(get_setting('frontend_logo_menu')) }}"
                            alt="logo"></a>
                </div>
                <!--<div class="offcanvas-text">-->
                <!--    <p>Braintech quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in-->
                <!--        porttitor theo lacus egestas etiusto odio data center.</p>-->
                <!--</div>-->
                <div class="canvas-contact">
                    <div class="address-area">
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Address</h4>
                                <em>{{ get_setting('office_address') }}</em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Email</h4>
                                <em><a >{{ get_setting('office_email') }}</a></em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Phone</h4>
                                <em>{{ get_setting('office_phone') }}</em>
                            </div>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </div>
        <!--Full width header End-->