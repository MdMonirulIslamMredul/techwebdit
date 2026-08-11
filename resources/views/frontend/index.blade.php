 @extends('frontend.layouts.app')
@section('content')


 <!-- Banner Section Start -->
        <div class="rs-banner style3 rs-rain-animate modify1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <div class="rs-videos">
                                <div class="animate-border white-color style3">
                                    <a class="popup-border popup-videos">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <h1 class="title">We Are It Services & Technology Solution </h1>
                            <p class="desc">
                                We are leading Software solutions providing company all over the world doing over 7
                                years.
                            </p>
                            <!--<ul class="banner-btn">-->
                            <!--    <li><a class="readon started" href="about.html">Get Started</a></li>-->
                            <!--</ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="images-part hidden-md">
                <img src="{{ get_setting('volunteer_bg_image') }}" alt="">
                <!--<img src="{{ asset('frontend/assets/images/banner/banner-4.png') }}" alt="">-->
            </div>
            <div class="line-inner style2">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!-- Partner Start -->
        <!--<div class="rs-partner style2 pt-50 pb-50">-->
        <!--    <div class="container">-->
        <!--        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30"-->
        <!--            data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"-->
        <!--            data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"-->
        <!--            data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false"-->
        <!--            data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false"-->
        <!--            data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false"-->
        <!--            data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">-->
        <!--            <div class="partner-item">-->
        <!--                <div class="logo-img">-->
        <!--                    <a href="https://rstheme.com/">-->
        <!--                        <img src="{{ asset('frontend/assets/images/partner/style2/1.png') }}" alt="">-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="partner-item">-->
        <!--                <div class="logo-img">-->
        <!--                    <a href="https://rstheme.com/">-->
        <!--                        <img src="{{ asset('frontend/assets/images/partner/style2/2.png') }}" alt="">-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="partner-item">-->
        <!--                <div class="logo-img">-->
        <!--                    <a href="https://rstheme.com/">-->
        <!--                        <img src="{{ asset('frontend/assets/images/partner/style2/3.png') }}" alt="">-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="partner-item">-->
        <!--                <div class="logo-img">-->
        <!--                    <a href="https://rstheme.com/">-->
        <!--                        <img src="{{ asset('frontend/assets/images/partner/style2/4.png') }}" alt="">-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="partner-item">-->
        <!--                <div class="logo-img">-->
        <!--                    <a href="https://rstheme.com/">-->
        <!--                        <img src="{{ asset('frontend/assets/images/partner/style2/5.png') }}" alt="">-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="partner-item">-->
        <!--                <div class="logo-img">-->
        <!--                    <a href="https://rstheme.com/">-->
        <!--                        <img src="{{ asset('frontend/assets/images/partner/style2/6.png') }}" alt="">-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="partner-item">-->
        <!--                <div class="logo-img">-->
        <!--                    <a href="https://rstheme.com/">-->
        <!--                        <img src="{{ asset('frontend/assets/images/partner/style2/7.png') }}" alt="">-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="partner-item">-->
        <!--                <div class="logo-img">-->
        <!--                    <a href="https://rstheme.com/">-->
        <!--                        <img src="{{ asset('frontend/assets/images/partner/style2/8.png') }}" alt="">-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Partner End -->

        <!-- About Section Start -->
        <div id="rs-about" class="rs-about pt-120 md-pt-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="sec-title mb-50">
                            <div class="sub-text style4-bg">About Us</div>
                            <h2 class="title pb-20">
                                {{ get_setting('banner_text_header') }}
                            </h2>
                            <div class="desc">
                                {!! get_setting('banner_text_bottom') !!}
                            </div>
                        </div>
                        <!-- Counter Section Start -->
                        <div class="rs-counter style3">
                            <div class="container">
                                <div class="counter-top-area">
                                    <div class="row">
                                        <div class="col-sm-6 sm-pr-0 sm-pl-0 xs-mb-30">
                                            <div class="counter-list">
                                                <div class="counter-text">
                                                    <div class="count-number">
                                                        <span class="rs-count plus orange-color">250</span>
                                                    </div>
                                                    <h3 class="title">Happy Clients</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 sm-pr-0 sm-pl-0">
                                            <div class="counter-list">
                                                <div class="counter-text">
                                                    <div class="count-number">
                                                        <span class="rs-count plus">370</span>
                                                    </div>
                                                    <h3 class="title">Project Delivered</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Counter Section End -->
                    </div>
                    <div class="col-lg-7">
                        <!-- Services Section Start -->
                        <div class="rs-services style3 md-pt-50">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 pr-10 pt-40 sm-pt-0 sm-pr-0 sm-pl-0">
                                        <div class="services-item mb-20">
                                            <div class="services-icon">
                                                <div class="image-part">
                                                    <img class="main-img"
                                                        src="{{ asset('frontend/assets/images/services/style3/main-img/1.png') }}"
                                                        alt="">
                                                    <img class="hover-img"
                                                        src="{{ asset('frontend/assets/images/services/style3/hover-img/1.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="services-content">
                                                <div class="services-text">
                                                    <h3 class="title"><a href="web-development.html">High-quality
                                                            Code</a></h3>
                                                </div>
                                                <div class="services-desc">
                                                    <p>
                                                        At vero eos et accusamus etiusto odio praesentium accusamus.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services-item cyan-bg">
                                            <div class="services-icon">
                                                <div class="image-part">
                                                    <img class="main-img"
                                                        src="{{ asset('frontend/assets/images/services/style3/main-img/2.png') }}"
                                                        alt="">
                                                    <img class="hover-img"
                                                        src="{{ asset('frontend/assets/images/services/style3/hover-img/2.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="services-content">
                                                <div class="services-text">
                                                    <h3 class="title"><a href="web-development.html">Full-stack
                                                            teams</a></h3>
                                                </div>
                                                <div class="services-desc">
                                                    <p>
                                                        At vero eos et accusamus etiusto odio praesentium accusamus.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-10 sm-pr-0 sm-pl-0 sm-mt-20">
                                        <div class="services-item gold-bg mb-20">
                                            <div class="services-icon">
                                                <div class="image-part">
                                                    <img class="main-img"
                                                        src="{{ asset('frontend/assets/images/services/style3/main-img/3.png') }}"
                                                        alt="">
                                                    <img class="hover-img"
                                                        src="{{ asset('frontend/assets/images/services/style3/hover-img/3.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="services-content">
                                                <div class="services-text">
                                                    <h3 class="title"><a href="web-development.html">Agile
                                                            Approach</a></h3>
                                                </div>
                                                <div class="services-desc">
                                                    <p>
                                                        At vero eos et accusamus etiusto odio praesentium accusamus.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services-item blue-bg">
                                            <div class="services-icon">
                                                <div class="image-part">
                                                    <img class="main-img"
                                                        src="{{ asset('frontend/assets/images/services/style3/main-img/4.png') }}"
                                                        alt="">
                                                    <img class="hover-img"
                                                        src="{{ asset('frontend/assets/images/services/style3/hover-img/4.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="services-content">
                                                <div class="services-text">
                                                    <h3 class="title"><a href="web-development.html">High-quality
                                                            Code</a></h3>
                                                </div>
                                                <div class="services-desc">
                                                    <p>
                                                        At vero eos et accusamus etiusto odio praesentium accusamus.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Services Section End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- About Section Start -->
        <!--<div class="rs-about style2 modify1 pt-120 pb-120 md-pt-70 md-pb-80">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-6 hidden-md">-->
        <!--                <div class="images">-->
        <!--                    <img src="assets/images/about/about-5.png" alt="">-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-6 pl-60 md-pl-15">-->
        <!--                <div class="sec-title mb-30">-->
        <!--                    <div class="sub-text style4-bg">About Us</div>-->
        <!--                    <h2 class="title pb-20">-->
        <!--                        We Are Increasing Business Success With Technology-->
        <!--                    </h2>-->
        <!--                    <div class="desc">-->
        <!--                        Over 25 years working in IT services developing software applications and mobile apps-->
        <!--                        for clients all over the world.-->
        <!--                    </div>-->
        <!--                </div>-->
                        <!-- Skillbar Section Start -->
        <!--                <div class="rs-skillbar style1 home4">-->
        <!--                    <div class="cl-skill-bar">-->
                                <!-- Start Skill Bar -->
        <!--                        <span class="skillbar-title">Software Development</span>-->
        <!--                        <div class="skillbar" data-percent="92">-->
        <!--                            <p class="skillbar-bar"></p>-->
        <!--                            <span class="skill-bar-percent"></span>-->
        <!--                        </div>-->
                                <!-- Start Skill Bar -->
        <!--                        <span class="skillbar-title">Cyber Security</span>-->
        <!--                        <div class="skillbar" data-percent="80">-->
        <!--                            <p class="skillbar-bar paste-bg"></p>-->
        <!--                            <span class="skill-bar-percent"></span>-->
        <!--                        </div>-->
                                <!-- Start Skill Bar -->
        <!--                        <span class="skillbar-title">Artificial Intelligence</span>-->
        <!--                        <div class="skillbar" data-percent="95">-->
        <!--                            <p class="skillbar-bar blue-bg"></p>-->
        <!--                            <span class="skill-bar-percent"></span>-->
        <!--                        </div>-->
                                <!-- Start Skill Bar -->
        <!--                        <span class="skillbar-title">Web Development</span>-->
        <!--                        <div class="skillbar" data-percent="78">-->
        <!--                            <p class="skillbar-bar pink-bg"></p>-->
        <!--                            <span class="skill-bar-percent"></span>-->
        <!--                        </div>-->
        <!--                        <div class="btn-part mt-45">-->
        <!--                            <a class="readon started" href="contact.html">Get Started</a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
                        <!-- Skillbar Section End -->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- About Section End -->

        <!-- Services Section Start -->
        <div class="rs-services style3 rs-rain-animate gray-color pt-120 pb-120 md-pt-70 md-pb-80">
            <div class="container">
                <div class="row md-mb-60">
                    <div class="col-lg-6 mb-60 md-mb-20">
                        <div class="sec-title2 md-center">
                            <span class="sub-text">Services</span>
                            <h2 class="title testi-title">
                                What Solutions We Provide to Our Valued Customers
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-60 md-mb-0">
                        <div class="btn-part text-right mt-60 md-mt-0 md-center">
                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-20">
                        <div class="services-item">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="{{ asset('frontend/assets/images/services/style2/main-img/1.png') }}"
                                        alt="">
                                    <img class="hover-img" src="{{ asset('frontend/assets/images/services/style2/hover-img/1.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title"><a href="software-development.html">Software Development</a>
                                    </h3>
                                </div>
                                <div class="services-desc">
                                    <p>
                                        At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                        center for managing database.
                                    </p>
                                </div>
                                <div class="serial-number">
                                    01
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-20">
                        <div class="services-item pink-bg">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="{{ asset('frontend/assets/images/services/style2/main-img/2.png') }}"
                                        alt="">
                                    <img class="hover-img" src="{{ asset('frontend/assets/images/services/style2/hover-img/2.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title"><a href="web-development.html">Web Development</a></h3>
                                </div>
                                <div class="services-desc">
                                    <p>
                                        At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                        center for managing database.
                                    </p>
                                </div>
                                <div class="serial-number">
                                    02
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-20">
                        <div class="services-item aqua-bg">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="{{ asset('frontend/assets/images/services/style2/main-img/3.png') }}"
                                        alt="">
                                    <img class="hover-img" src="{{ asset('frontend/assets/images/services/style2/hover-img/3.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title"><a href="analytic-solutions.html">Mobile App</a></h3>
                                </div>
                                <div class="services-desc">
                                    <p>
                                        At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                        center for managing database.
                                    </p>
                                </div>
                                <div class="serial-number">
                                    03
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-20">
                        <div class="services-item paste-bg">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="{{ asset('frontend/assets/images/services/style2/main-img/4.png') }}"
                                        alt="">
                                    <img class="hover-img" src="{{ asset('frontend/assets/images/services/style2/hover-img/4.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title"><a href="cloud-and-devops.html">Clould & DevOps</a></h3>
                                </div>
                                <div class="services-desc">
                                    <p>
                                        At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                        center for managing database.
                                    </p>
                                </div>
                                <div class="serial-number">
                                    04
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-20">
                        <div class="services-item blue-bg">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="{{ asset('frontend/assets/images/services/style2/main-img/5.png') }}"
                                        alt="">
                                    <img class="hover-img" src="{{ asset('frontend/assets/images/services/style2/hover-img/5.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title"><a href="product-design.html">Product & Design</a></h3>
                                </div>
                                <div class="services-desc">
                                    <p>
                                        At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                        center for managing database.
                                    </p>
                                </div>
                                <div class="serial-number">
                                    05
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item green-bg">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="{{ asset('frontend/assets/images/services/style2/main-img/6.png') }}"
                                        alt="">
                                    <img class="hover-img" src="{{ asset('frontend/assets/images/services/style2/hover-img/6.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title"><a href="data-center.html">Data Center</a></h3>
                                </div>
                                <div class="services-desc">
                                    <p>
                                        At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                        center for managing database.
                                    </p>
                                </div>
                                <div class="serial-number">
                                    06
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-inner">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Choose Section Start -->
        <div class="rs-why-choose pt-120 pb-120 md-pt-70 md-pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 hidden-md">
                        <div class="image-part">
                            <img src="{{ asset('frontend/assets/images/choose/2.png') }}" alt="">
                        </div>
                        <div class="animation style2">
                            <div class="top-shape">
                                <img class="dance" src="{{ asset('frontend/assets/images/choose/dotted-2.png') }}" alt="images">
                            </div>
                            <div class="bottom-shape">
                                <img class="dance2" src="{{ asset('frontend/assets/images/choose/dotted-1.png') }}" alt="images">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="sec-title mb-40">
                            <div class="sub-text style4-bg left">Why Choose Us</div>
                            <h2 class="title pb-20">
                                We Create Result-Oriented Dynamic Applications
                            </h2>
                            <div class="desc">
                                Over 7+ years working in IT services developing software applications and mobile apps
                                for clients all over the world.
                            </div>
                        </div>
                        <div class="services-wrap mb-25">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/assets/images/choose/icons/1.png') }}" alt="">
                            </div>
                            <div class="services-text">
                                <h3 class="title"><a href="#">First Growing Process</a></h3>
                                <p class="services-txt"> At vero eos et accusamus etiusto odio praesentium.</p>
                            </div>
                        </div>
                        <div class="services-wrap mb-25">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/assets/images/choose/icons/2.png') }}" alt="">
                            </div>
                            <div class="services-text">
                                <h3 class="title"><a href="#">Clean code</a></h3>
                                <p class="services-txt"> At vero eos et accusamus etiusto odio praesentium.</p>
                            </div>
                        </div>
                        <div class="services-wrap">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/assets/images/choose/icons/3.png') }}" alt="">
                            </div>
                            <div class="services-text">
                                <h3 class="title"><a href="#">Well Documentation</a></h3>
                                <p class="services-txt"> At vero eos et accusamus etiusto odio praesentium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Choose Section End -->

        <!-- Choose Section Start -->
        <!--<div class="rs-why-choose style2 gray-color rs-rain-animate pt-120 pb-120 md-pt-70 md-pb-80">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-xl-8 col-lg-7 md-mb-30">-->
        <!--                <div class="sec-title mb-40">-->
        <!--                    <div class="sub-text style4-bg left">Let's Talk</div>-->
        <!--                    <h2 class="title pb-20">-->
        <!--                        Speak With Expert Engineers.-->
        <!--                    </h2>-->
        <!--                    <div class="desc">-->
        <!--                        From its medieval origins to the digital era, learn everything there<br>-->
        <!--                        is to know about the ubiquitous lorem ipsum passage.-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="services-wrap mb-25">-->
        <!--                    <div class="services-icon">-->
        <!--                        <img src="assets/images/choose/icons/style2/1.png" alt="">-->
        <!--                    </div>-->
        <!--                    <div class="services-text">-->
        <!--                        <h3 class="title"><a href="#">Email</a></h3>-->
        <!--                        <p class="services-txt">support@rstheme.com</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="services-wrap mb-25">-->
        <!--                    <div class="services-icon">-->
        <!--                        <img src="assets/images/choose/icons/style2/2.png" alt="">-->
        <!--                    </div>-->
        <!--                    <div class="services-text">-->
        <!--                        <h3 class="title"><a href="#">Call Us</a></h3>-->
        <!--                        <p class="services-txt"> (+01) 555 - 9811 - 444</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="services-wrap">-->
        <!--                    <div class="services-icon">-->
        <!--                        <img src="assets/images/choose/icons/style2/3.png" alt="">-->
        <!--                    </div>-->
        <!--                    <div class="services-text">-->
        <!--                        <h3 class="title"><a href="#">Office Address</a></h3>-->
        <!--                        <p class="services-txt">374 FA Tower, William S Blvd<br> 2721, IL, USA</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-xl-4 col-lg-5">-->
        <!--                <div class="rs-contact mod1">-->
        <!--                    <div class="contact-wrap">-->
        <!--                        <div class="content-part mb-25">-->
        <!--                            <h2 class="title mb-15">Schedule Appointment</h2>-->
        <!--                            <p class="desc">We here to help you 24/7 with experts</p>-->
        <!--                        </div>-->
        <!--                        <div id="appointment-messages"></div>-->
        <!--                        <form id="appointment-form" method="post"-->
        <!--                            action="https://rstheme.com/products/html/braintech/appointment.php">-->
        <!--                            <fieldset>-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-lg-12 mb-15">-->
        <!--                                        <input class="from-control" type="text" id="appointment_name"-->
        <!--                                            name="appointment_name" placeholder="Name" required="">-->
        <!--                                    </div>-->
        <!--                                    <div class="col-lg-12 mb-15">-->
        <!--                                        <input class="from-control" type="text" id="appointment_email"-->
        <!--                                            name="appointment_email" placeholder="E-Mail" required="">-->
        <!--                                    </div>-->
        <!--                                    <div class="col-lg-12 mb-15">-->
        <!--                                        <input class="from-control" type="text" id="appointment_phone"-->
        <!--                                            name="appointment_phone" placeholder="Phone Number"-->
        <!--                                            required="">-->
        <!--                                    </div>-->
        <!--                                    <div class="col-lg-12 mb-25">-->
        <!--                                        <input class="from-control" type="text" id="appointment_website"-->
        <!--                                            name="appointment_website" placeholder="Your Website"-->
        <!--                                            required="">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="form-group mb-0">-->
        <!--                                    <input class="submit-btn" type="submit" value="Submit Now">-->
        <!--                                </div>-->
        <!--                            </fieldset>-->
        <!--                        </form>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="line-inner">-->
        <!--        <div class="line"></div>-->
        <!--        <div class="line"></div>-->
        <!--        <div class="line"></div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Choose Section End -->

        <!-- Blog Section Start -->
        <!--<div id="rs-blog" class="rs-blog pt-120 pb-120 md-pt-70 md-pb-80">-->
        <!--    <div class="container">-->
        <!--        <div class="sec-title2 text-center mb-30">-->
        <!--            <span class="sub-text">Blogs</span>-->
        <!--            <h2 class="title testi-title">-->
        <!--                Latest Tips &Tricks-->
        <!--            </h2>-->
        <!--            <div class="desc">-->
        <!--                We've been building creative tools together for over a decade and have a deep appreciation for-->
        <!--                software applications-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"-->
        <!--            data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"-->
        <!--            data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"-->
        <!--            data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"-->
        <!--            data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"-->
        <!--            data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false"-->
        <!--            data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">-->
        <!--            <div class="blog-item">-->
        <!--                <div class="image-wrap">-->
        <!--                    <a href="blog-details-2.html"><img src="assets/images/blog/main-home/1.jpg"-->
        <!--                            alt=""></a>-->
        <!--                    <ul class="post-categories">-->
        <!--                        <li><a href="blog-details.html">Software Development</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--                <div class="blog-content">-->
        <!--                    <ul class="blog-meta">-->
        <!--                        <li class="date"><i class="fa fa-calendar-check-o"></i> 16 Nov 2020</li>-->
        <!--                        <li class="admin"><i class="fa fa-user-o"></i> admin</li>-->
        <!--                    </ul>-->
        <!--                    <h3 class="blog-title"><a href="blog-details.html">Necessity May Give Us Your Best Virtual-->
        <!--                            Court System</a></h3>-->
        <!--                    <p class="desc">We denounce with righteous indige nation and dislike men who are so-->
        <!--                        beguiled...</p>-->
        <!--                    <div class="blog-button"><a href="blog-details.html">Learn More</a></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="blog-item">-->
        <!--                <div class="image-wrap">-->
        <!--                    <a href="blog-details-2.html"><img src="assets/images/blog/main-home/2.jpg"-->
        <!--                            alt=""></a>-->
        <!--                    <ul class="post-categories">-->
        <!--                        <li><a href="blog-details.html"> Web Development</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--                <div class="blog-content">-->
        <!--                    <ul class="blog-meta">-->
        <!--                        <li class="date"><i class="fa fa-calendar-check-o"></i> 20 December 2020</li>-->
        <!--                        <li class="admin"><i class="fa fa-user-o"></i> admin</li>-->
        <!--                    </ul>-->
        <!--                    <h3 class="blog-title"><a href="blog-details.html">Tech Products That Makes Its Easier to-->
        <!--                            Stay at Home</a></h3>-->
        <!--                    <p class="desc">We denounce with righteous indige nation and dislike men who are so-->
        <!--                        beguiled...</p>-->
        <!--                    <div class="blog-button"><a href="blog-details.html">Learn More</a></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="blog-item">-->
        <!--                <div class="image-wrap">-->
        <!--                    <a href="blog-details-2.html"><img src="assets/images/blog/main-home/3.jpg"-->
        <!--                            alt=""></a>-->
        <!--                    <ul class="post-categories">-->
        <!--                        <li><a href="blog-details.html">It Services</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--                <div class="blog-content">-->
        <!--                    <ul class="blog-meta">-->
        <!--                        <li class="date"><i class="fa fa-calendar-check-o"></i> 22 December 2020</li>-->
        <!--                        <li class="admin"><i class="fa fa-user-o"></i> admin</li>-->
        <!--                    </ul>-->
        <!--                    <h3 class="blog-title"><a href="blog-details.html">Open Source Job Report Show More-->
        <!--                            Openings Fewer</a></h3>-->
        <!--                    <p class="desc">We denounce with righteous indige nation and dislike men who are so-->
        <!--                        beguiled...</p>-->
        <!--                    <div class="blog-button"><a href="blog-details.html">Learn More</a></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="blog-item">-->
        <!--                <div class="image-wrap">-->
        <!--                    <a href="blog-details-2.html"><img src="assets/images/blog/main-home/4.jpg"-->
        <!--                            alt=""></a>-->
        <!--                    <ul class="post-categories">-->
        <!--                        <li><a href="blog-details.html">Artifical Intelligence</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--                <div class="blog-content">-->
        <!--                    <ul class="blog-meta">-->
        <!--                        <li class="date"><i class="fa fa-calendar-check-o"></i> 26 December 2020</li>-->
        <!--                        <li class="admin"><i class="fa fa-user-o"></i> admin</li>-->
        <!--                    </ul>-->
        <!--                    <h3 class="blog-title"><a href="blog-details.html">Types of Social Proof What its Makes-->
        <!--                            Them Effective</a></h3>-->
        <!--                    <p class="desc">We denounce with righteous indige nation and dislike men who are so-->
        <!--                        beguiled...</p>-->
        <!--                    <div class="blog-button"><a href="blog-details.html">Learn More</a></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="blog-item">-->
        <!--                <div class="image-wrap">-->
        <!--                    <a href="blog-details-2.html"><img src="assets/images/blog/main-home/5.jpg"-->
        <!--                            alt=""></a>-->
        <!--                    <ul class="post-categories">-->
        <!--                        <li><a href="blog-details.html">Digital Technology</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--                <div class="blog-content">-->
        <!--                    <ul class="blog-meta">-->
        <!--                        <li class="date"><i class="fa fa-calendar-check-o"></i> 28 December 2020</li>-->
        <!--                        <li class="admin"><i class="fa fa-user-o"></i> admin</li>-->
        <!--                    </ul>-->
        <!--                    <h3 class="blog-title"><a href="blog-details.html">Tech Firms Support Huawei Restriction,-->
        <!--                            Balk at Cost</a></h3>-->
        <!--                    <p class="desc">We denounce with righteous indige nation and dislike men who are so-->
        <!--                        beguiled...</p>-->
        <!--                    <div class="blog-button"><a href="blog-details.html">Learn More</a></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="blog-item">-->
        <!--                <div class="image-wrap">-->
        <!--                    <a href="blog-details-2.html"><img src="assets/images/blog/main-home/6.jpg"-->
        <!--                            alt=""></a>-->
        <!--                    <ul class="post-categories">-->
        <!--                        <li><a href="blog-details.html">It Services</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--                <div class="blog-content">-->
        <!--                    <ul class="blog-meta">-->
        <!--                        <li class="date"><i class="fa fa-calendar-check-o"></i> 30 December 2020</li>-->
        <!--                        <li class="admin"><i class="fa fa-user-o"></i> admin</li>-->
        <!--                    </ul>-->
        <!--                    <h3 class="blog-title"><a href="blog-details.html">Servo Project Joins The Linux-->
        <!--                            Foundation Fold Desco</a></h3>-->
        <!--                    <p class="desc">We denounce with righteous indige nation and dislike men who are so-->
        <!--                        beguiled...</p>-->
        <!--                    <div class="blog-button"><a href="blog-details.html">Learn More</a></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Blog Section End -->

        <!-- Testimonial Section Start -->
        <!--<div class="rs-testimonial main-home rs-rain-animate style4 gray-color modify1 md-fixing">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-6 hidden-md">-->
        <!--                <div class="testi-image">-->
        <!--                    <img src="assets/images/testimonial/testimonial-2.png" alt="">-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-6 pl-50 md-pl-15">-->
        <!--                <div class="sec-title mb-50">-->
        <!--                    <div class="sub-text style4-bg left testi">Testimonials</div>-->
        <!--                    <h2 class="title pb-20">-->
        <!--                        What Customer Saying-->
        <!--                    </h2>-->
        <!--                    <div class="desc">-->
        <!--                        Over 25 years working in IT services developing software applications and mobile apps-->
        <!--                        for clients all over the world.-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30"-->
        <!--                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000"-->
        <!--                    data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false"-->
        <!--                    data-md-device="1" data-md-device-nav="false" data-md-device-dots="false"-->
        <!--                    data-center-mode="false" data-ipad-device2="1" data-ipad-device-nav2="false"-->
        <!--                    data-ipad-device-dots2="false" data-ipad-device="1" data-ipad-device-nav="false"-->
        <!--                    data-ipad-device-dots="true" data-mobile-device="1" data-mobile-device-nav="false"-->
        <!--                    data-mobile-device-dots="false">-->
        <!--                    <div class="testi-item">-->
        <!--                        <div class="author-desc">-->
        <!--                            <div class="desc"><img class="quote"-->
        <!--                                    src="assets/images/testimonial/main-home/quote2.png"-->
        <!--                                    alt="">Capitalize on low hanging fruit to identify a ballpark value-->
        <!--                                added activity to beta test. Override the digital divide with additional-->
        <!--                                clickthroughs from DevOps. Nanotechnology immersion along the information-->
        <!--                                highway.</div>-->
        <!--                        </div>-->
        <!--                        <div class="testimonial-content">-->
        <!--                            <div class="author-img">-->
        <!--                                <img src="assets/images/testimonial/main-home/1.jpg" alt="">-->
        <!--                            </div>-->
        <!--                            <div class="author-part">-->
        <!--                                <a class="name" href="#">Mariya Khan</a>-->
        <!--                                <span class="designation">CEO, Brick Consulting</span>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="testi-item">-->
        <!--                        <div class="author-desc">-->
        <!--                            <div class="desc"><img class="quote"-->
        <!--                                    src="assets/images/testimonial/main-home/quote2.png"-->
        <!--                                    alt="">Capitalize on low hanging fruit to identify a ballpark value-->
        <!--                                added activity to beta test. Override the digital divide with additional-->
        <!--                                clickthroughs from DevOps. Nanotechnology immersion along the information-->
        <!--                                highway.</div>-->
        <!--                        </div>-->
        <!--                        <div class="testimonial-content">-->
        <!--                            <div class="author-img">-->
        <!--                                <img src="assets/images/testimonial/main-home/2.jpg" alt="">-->
        <!--                            </div>-->
        <!--                            <div class="author-part">-->
        <!--                                <a class="name" href="#">Sonia Akther</a>-->
        <!--                                <span class="designation">CEO, Keen IT Solution</span>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="testi-item">-->
        <!--                        <div class="author-desc">-->
        <!--                            <div class="desc"><img class="quote"-->
        <!--                                    src="assets/images/testimonial/main-home/quote2.png"-->
        <!--                                    alt="">Capitalize on low hanging fruit to identify a ballpark value-->
        <!--                                added activity to beta test. Override the digital divide with additional-->
        <!--                                clickthroughs from DevOps. Nanotechnology immersion along the information-->
        <!--                                highway.</div>-->
        <!--                        </div>-->
        <!--                        <div class="testimonial-content">-->
        <!--                            <div class="author-img">-->
        <!--                                <img src="assets/images/testimonial/main-home/3.jpg" alt="">-->
        <!--                            </div>-->
        <!--                            <div class="author-part">-->
        <!--                                <a class="name" href="#">Felando</a>-->
        <!--                                <span class="designation">Web Developer</span>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="testi-item">-->
        <!--                        <div class="author-desc">-->
        <!--                            <div class="desc"><img class="quote"-->
        <!--                                    src="assets/images/testimonial/main-home/quote2.png"-->
        <!--                                    alt="">Capitalize on low hanging fruit to identify a ballpark value-->
        <!--                                added activity to beta test. Override the digital divide with additional-->
        <!--                                clickthroughs from DevOps. Nanotechnology immersion along the information-->
        <!--                                highway.</div>-->
        <!--                        </div>-->
        <!--                        <div class="testimonial-content">-->
        <!--                            <div class="author-img">-->
        <!--                                <img src="assets/images/testimonial/main-home/4.jpg" alt="">-->
        <!--                            </div>-->
        <!--                            <div class="author-part">-->
        <!--                                <a class="name" href="#">Neymar Vuya</a>-->
        <!--                                <span class="designation">Arist</span>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="line-inner">-->
        <!--        <div class="line"></div>-->
        <!--        <div class="line"></div>-->
        <!--        <div class="line"></div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Testimonial Section End -->

        <!-- Partner Start -->
        <div class="rs-partner pt-50 pb-70">
            <center><h2 class="title pb-20" style="color: white; font-size: xx-large; font-weight: bold;">Clients</h2></center>
            <div class="container">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                    data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false"
                    data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false"
                    data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                    data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                      @foreach ($brands as $brand)
                    <div class="partner-item">
                        <div class="logo-img">
                            <a >
                                <img class="hover-logo" src="{{ asset('/setting/banner/' . $brand->logo) }}"  style="height: 100px;" alt="">
                                <img class="main-logo" src="{{ asset('/setting/banner/' . $brand->logo) }}" style="height: 100px;" alt="">
                            </a>
                        </div>
                    </div>
                 @endforeach
                   
                </div>
            </div>
        </div>
        <!-- Partner End -->
        @endsection