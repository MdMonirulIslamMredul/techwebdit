<!DOCTYPE html>
<html lang="zxx">



<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Techweb Bd It</title>
    <meta name="description" content="Techweb Bd It">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logo-dark.png') }}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/fonts/flaticon.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/off-canvas.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rsmenu-main.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '124757384030278');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=124757384030278&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<style>
    .phone-button{
    display:inline;
    font-size: 24px;
    width: 45px;
    height: 45px;
    line-height: 42px;
    text-align: center;
    position: fixed;
    bottom: 30px;
    left: 20px;
    z-index: 999;
    border-radius: 50%;
    background: #F0F4FF;
    -webkit-box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}

.bounce {
    -webkit-animation: float 1500ms infinite ease-in-out;
    animation: float 1500ms infinite ease-in-out;
}
.phone-button i {
  color: #2490EB;
}
.back-to-top {
  font-size: 24px;
  width: 45px;
  height: 45px;
  line-height: 42px;
  text-align: center;
  display: none;
  position: fixed;
  bottom: 230px;
  right: 20px;
  z-index: 999;
  border-radius: 50%;
  background: #F0F4FF;
  -webkit-box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
</style>
<body class="defult-home">
    <div class="offwrap"></div>

    <!--Preloader area start here-->
    <!--<div id="loader" class="loader">-->
    <!--    <div class="loader-container"></div>-->
    <!--</div>-->
    <!--Preloader area End here-->

    <!-- Main content Start -->
    <div class="main-content">
  @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
       
    </div>
    <!-- Main content End -->


    <!-- start scrollUp  -->
    <div id="scrollUp" class="orange-color" style="margin-bottom: 50px;">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

   <div>
        <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
   </div>
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RTHFGNDRPT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RTHFGNDRPT');
</script>
<!-- phone button Start -->
<!--<a href="tel:+8801521119051" class="phone-button bounce"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></a>-->
<!-- phone button End -->
    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "251086720109167");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- modernizr js -->
    <script src="{{ asset('frontend/assets/js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ asset('frontend/assets/js/rsmenu-main.js') }}"></script>
    <!-- op nav js -->
    <script src="{{ asset('frontend/assets/js/jquery.nav.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('frontend/assets/js/skill.bars.jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- counter top js -->
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('frontend/assets/js/particles.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <!-- pointer js -->
    <script src="{{ asset('frontend/assets/js/pointer.js') }}"></script>
    <!-- contact form js -->
    <script src="{{ asset('frontend/assets/js/contact.form.js') }}"></script>
    <!-- appointment form js -->
    <script src="{{ asset('frontend/assets/js/appointment.form.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>



</html>
