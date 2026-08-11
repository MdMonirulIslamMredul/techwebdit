<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">

    <!-- SEO -->
    <title>Techweb Bd It</title>
    <meta name="description" content="Techweb Bd It — Professional IT Services">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logo-dark.png') }}">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
    <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/fonts/flaticon.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.css') }}">
    <!-- Off Canvas -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/off-canvas.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!-- RS Menu -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rsmenu-main.css') }}">
    <!-- RS Spacing utilities -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/rs-spacing.css') }}">
    <!-- Site styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css') }}">
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- ✅ Premium Micro-interactions (replaces animate.css + wow.js inline styles) -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/premium-interactions.css') }}">

    @stack('after-styles')

    <!-- Meta Pixel -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}
        (window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '124757384030278');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=124757384030278&ev=PageView&noscript=1"/>
    </noscript>
</head>

<style>
    /* -----------------------------------------------
       Floating UI Elements — hardware-accelerated only
       ----------------------------------------------- */
    .phone-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        width: 48px;
        height: 48px;
        position: fixed;
        bottom: 30px;
        left: 20px;
        z-index: 999;
        border-radius: 50%;
        background: #F0F4FF;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        text-decoration: none;
        color: #2490EB;
        /* Hardware-accelerated only — no transition:all */
        transition: transform 180ms cubic-bezier(0.4, 0, 0.2, 1),
                    box-shadow 180ms cubic-bezier(0.4, 0, 0.2, 1);
        will-change: transform, box-shadow;
    }

    .phone-button i {
        color: #2490EB;
    }

    .back-to-top,
    #scrollUp {
        font-size: 22px;
        width: 48px;
        height: 48px;
        line-height: 1;
        text-align: center;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        position: fixed;
        bottom: 230px;
        right: 20px;
        z-index: 999;
        border-radius: 50%;
        background: #F0F4FF;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        /* Visibility managed by premium-scroll.js via .visible class */
        opacity: 0;
        pointer-events: none;
        transition: opacity 260ms cubic-bezier(0.4, 0, 0.2, 1),
                    transform 260ms cubic-bezier(0.4, 0, 0.2, 1),
                    background-color 180ms cubic-bezier(0.4, 0, 0.2, 1);
        will-change: opacity, transform;
    }

    #scrollUp.visible {
        opacity: 1;
        pointer-events: auto;
    }
</style>

<body class="defult-home">
    <div class="offwrap"></div>

    <!-- Main content -->
    <div class="main-content">
        @include('frontend.layouts.header')
        @yield('content')
        @include('frontend.layouts.footer')
    </div>

    <!-- Back to top -->
    <div id="scrollUp" class="orange-color" style="margin-bottom: 50px;" aria-label="Back to top">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- Search Modal -->
    <div aria-hidden="true" class="modal fade search-modal" id="searchModal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form role="search">
                        <div class="form-group">
                            <label for="site-search" class="sr-only">Search</label>
                            <input id="site-search" class="form-control" placeholder="Search Here..." type="search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Facebook Messenger Chat -->
    <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat"></div>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RTHFGNDRPT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-RTHFGNDRPT');
    </script>

    <!-- Facebook Chat SDK -->
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "251086720109167");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({ xfbml: true, version: 'v16.0' });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Core JS -->
    <script src="{{ asset('frontend/assets/js/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- RS Menu -->
    <script src="{{ asset('frontend/assets/js/rsmenu-main.js') }}"></script>
    <!-- One-page nav -->
    <script src="{{ asset('frontend/assets/js/jquery.nav.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Counter (keep — used on stats sections) -->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Theme plugins (carousels, lightbox, etc.) -->
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <!-- Contact form -->
    <script src="{{ asset('frontend/assets/js/contact.form.js') }}"></script>
    <!-- Appointment form -->
    <script src="{{ asset('frontend/assets/js/appointment.form.js') }}"></script>
    <!-- Main theme JS -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <!-- ✅ Premium scroll-reveal (replaces wow.min.js + waypoints.min.js) -->
    <script src="{{ asset('frontend/assets/js/premium-scroll.js') }}"></script>

    @stack('after-scripts')
</body>

</html>
