{{-- Full-width Header --}}
<div class="full-width-header">

    <header id="rs-header" class="rs-header style3 modify2 header-transparent" role="banner">

        {{-- Sticky Menu --}}
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row align-items-center">

                    {{-- Logo & Mobile Toggle --}}
                    <div class="col-lg-2 d-flex align-items-center justify-content-between">
                        <div class="logo-part">
                            <a href="/" aria-label="Techweb Bd It — Home">
                                <img class="normal-logo"
                                     src="{{ asset(get_setting('frontend_logo_menu')) }}"
                                     alt="Techweb Bd It logo">
                                <img class="sticky-logo"
                                     src="{{ asset(get_setting('frontend_logo_menu')) }}"
                                     alt="Techweb Bd It logo">
                            </a>
                        </div>

                        {{-- Mobile hamburger — clean 3-line SVG icon --}}
                        <div class="mobile-menu d-lg-none">
                            <a href="#"
                               class="rs-menu-toggle rs-menu-toggle-close"
                               aria-label="Open navigation menu"
                               aria-expanded="false"
                               aria-controls="mobile-nav">
                                <svg width="24" height="18" viewBox="0 0 24 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <rect width="24" height="2" rx="1" fill="currentColor"/>
                                    <rect y="8"  width="18" height="2" rx="1" fill="currentColor"/>
                                    <rect y="16" width="24" height="2" rx="1" fill="currentColor"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    {{-- Desktop Navigation --}}
                    <div class="col-lg-10 d-flex justify-content-end align-items-center">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <nav class="rs-menu pr-100 lg-pr-50 md-pr-0"
                                     id="rs-main-nav"
                                     aria-label="Primary navigation">
                                    <ul class="nav-menu" role="menubar">

                                        <li class="rs-mega-menu menu-item-has-children current-menu-item" role="none">
                                            <a href="/" role="menuitem">Home</a>
                                        </li>

                                        <li role="none">
                                            <a href="/about" role="menuitem">About</a>
                                        </li>

                                        @php
                                            $headers = DB::table('pages')
                                                ->where('hearder', 1)
                                                ->get();
                                        @endphp

                                        <li class="menu-item-has-children" role="none">
                                            <a href="#"
                                               role="menuitem"
                                               aria-haspopup="true"
                                               aria-expanded="false">Services</a>
                                            <ul class="sub-menu" role="menu" aria-label="Services submenu">
                                                @foreach ($headers as $header)
                                                    <li role="none">
                                                        <a href="{{ $header->slug }}" role="menuitem">
                                                            {{ $header->title }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li role="none">
                                            <a href="/team" role="menuitem">Our Team</a>
                                        </li>

                                        <li role="none">
                                            <a href="/clients" role="menuitem">Our Clients</a>
                                        </li>

                                        <li role="none">
                                            <a href="/portfolio" role="menuitem">Portfolio</a>
                                        </li>

                                        <li role="none">
                                            <a href="/contact" role="menuitem">Contact</a>
                                        </li>

                                    </ul>{{-- //.nav-menu --}}
                                </nav>
                            </div>{{-- //.main-menu --}}

                            {{-- Search + Canvas trigger --}}
                            <div class="expand-btn-inner search-icon">
                                <ul>
                                    <li class="sidebarmenu-search">
                                        <a class="hidden-xs rs-search"
                                           data-toggle="modal"
                                           data-target="#searchModal"
                                           href="#"
                                           aria-label="Open search">
                                            <i class="flaticon-search" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a id="nav-expander"
                                           class="humburger nav-expander"
                                           href="#"
                                           aria-label="Open sidebar menu"
                                           aria-expanded="false"
                                           aria-controls="canvas-nav">
                                            {{-- Clean 3×3 dot grid icon --}}
                                            <span class="dot1" aria-hidden="true"></span>
                                            <span class="dot2" aria-hidden="true"></span>
                                            <span class="dot3" aria-hidden="true"></span>
                                            <span class="dot4" aria-hidden="true"></span>
                                            <span class="dot5" aria-hidden="true"></span>
                                            <span class="dot6" aria-hidden="true"></span>
                                            <span class="dot7" aria-hidden="true"></span>
                                            <span class="dot8" aria-hidden="true"></span>
                                            <span class="dot9" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>{{-- //.col-lg-10 --}}

                </div>{{-- //.row --}}
            </div>{{-- //.container --}}
        </div>{{-- //.menu-area --}}

    </header>

    {{-- Off-canvas Sidebar --}}
    <nav class="right_menu_togle"
         id="canvas-nav"
         aria-label="Sidebar navigation"
         role="navigation">

        <div class="close-btn">
            <div class="nav-link">
                <a id="nav-close"
                   class="humburger nav-expander"
                   href="#"
                   aria-label="Close sidebar menu"
                   aria-expanded="true">
                    <span class="dot1" aria-hidden="true"></span>
                    <span class="dot2" aria-hidden="true"></span>
                    <span class="dot3" aria-hidden="true"></span>
                    <span class="dot4" aria-hidden="true"></span>
                    <span class="dot5" aria-hidden="true"></span>
                    <span class="dot6" aria-hidden="true"></span>
                    <span class="dot7" aria-hidden="true"></span>
                    <span class="dot8" aria-hidden="true"></span>
                    <span class="dot9" aria-hidden="true"></span>
                </a>
            </div>
        </div>

        <div class="canvas-logo">
            <a href="/" aria-label="Techweb Bd It — Home">
                <img src="{{ asset(get_setting('frontend_logo_menu')) }}" alt="Techweb Bd It logo">
            </a>
        </div>

        <div class="canvas-contact">
            <div class="address-area">

                <div class="address-list">
                    <div class="info-icon">
                        <i class="flaticon-location" aria-hidden="true"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Address</h4>
                        <address>{{ get_setting('office_address') }}</address>
                    </div>
                </div>

                <div class="address-list">
                    <div class="info-icon">
                        <i class="flaticon-email" aria-hidden="true"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Email</h4>
                        <a href="mailto:{{ get_setting('office_email') }}">
                            {{ get_setting('office_email') }}
                        </a>
                    </div>
                </div>

                <div class="address-list">
                    <div class="info-icon">
                        <i class="flaticon-call" aria-hidden="true"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Phone</h4>
                        <a href="tel:{{ get_setting('office_phone') }}">
                            {{ get_setting('office_phone') }}
                        </a>
                    </div>
                </div>

            </div>{{-- //.address-area --}}

            <ul class="social" aria-label="Social media links">
                <li>
                    <a href="#" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="Twitter" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="Pinterest" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>

        </div>{{-- //.canvas-contact --}}

    </nav>{{-- //#canvas-nav --}}

</div>{{-- //.full-width-header --}}