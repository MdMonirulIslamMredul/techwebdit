@extends('frontend.layouts.app')
@section('content')
  <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img1">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">About</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- About Section Start -->
            <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 md-mb-30">
                            <div class="rs-animation-shape">
                                <div class="images">
                                   <img src="{{ asset('frontend/assets/images/about/about-3.png')}}" alt=""> 
                                </div>
                                <div class="middle-image2">
                                   <img class="dance3" src="{{ asset('frontend/assets/images/about/effect-1.png')}}" alt=""> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-60 md-pl-15">
                            <div class="contact-wrap">
                                <div class="sec-title mb-30">
                                    <div class="sub-text style-bg">About Us</div>
                                    <h2 class="title pb-38">
                                         TechWeb Bd It is a Bangladesh-based software  company.
                                    </h2>
                                    <div class="desc pb-35">
                                    We are a corporate organization where we solely focus on software design & development, Website design & development, Mobile Apps development, UI/UX Design, and Digital Marketing. We also provide corporate consultancy in terms of IT development. Our B2B support helps other organizations to build a concrete IT wing to support their clients & management teams. TechWeb Bd It helps businesses with training, documentations, consultancy & corporate IT support.
                                    </div>
                                    <p class="margin-0 pb-15">
                                      
                                    </p>
                                </div>
                                <div class="btn-part">
                                    <a class="readon learn-more" href="/contact">Learn-More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-image">
                        <img class="top dance" src="{{ asset('frontend/assets/images/about/dotted-3.png')}}" alt="">
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Team Section Start -->
            <div class="rs-team pt-120 pb-120 md-pt-80 md-pb-80 xs-pb-54"> 
                <div class="sec-title2 text-center mb-30">
                  <span class="sub-text style-bg white-color">Team</span>
                    <h2 class="title white-color">
                        Managment
                    </h2>
                </div>               
                <div class="container">
                    <div class="container"> 
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                            <div class="team-item-wrap">
                                <div class="team-wrap">
                                    <div class="image-inner">
                                        <a href="single-team.html"><img src="{{ asset('frontend/assets/images/team/style1/1.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="team-content text-center">
                                    <h4 class="person-name"><a href="single-team.html">Mosharob Hossain</a></h4>
                                    <span class="designation">Managing Director</span>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-item-wrap">
                                <div class="team-wrap">
                                    <div class="image-inner">
                                        <a href="single-team.html"><img src="{{ asset('frontend/assets/images/team/style1/2.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="team-content text-center">
                                    <h4 class="person-name"><a href="single-team.html">MD Nuhash </h4>
                                    <span class="designation">Founder & CEO</span>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                           
                            <div class="team-item-wrap">
                                <div class="team-wrap">
                                    <div class="image-inner">
                                        <a href="single-team.html"><img src="{{ asset('frontend/assets/images/team/style1/4.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="team-content text-center">
                                    <h4 class="person-name"><a href="single-team.html">MD Jahangir Alom</a></h4>
                                    <span class="designation">Manager & Accounts</span>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--<div class="team-item-wrap">-->
                            <!--    <div class="team-wrap">-->
                            <!--        <div class="image-inner">-->
                            <!--            <a href="single-team.html"><img src="{{ asset('frontend/assets/images/team/style1/5.jpg')}}" alt=""></a>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="team-content text-center">-->
                            <!--        <h4 class="person-name"><a href="single-team.html">MD Jane Alom</a></h4>-->
                            <!--        <span class="designation">Genarel Manager</span>-->
                            <!--        <ul class="team-social">-->
                            <!--            <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
                            <!--            <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
                            <!--            <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                            <!--            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>-->
                            <!--        </ul>-->
                            <!--    </div>-->
                            <!--</div>-->
                       
                
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Team Section End -->

            <!-- Process Section Start -->
            <div class="rs-process style2 pt-120 pb-120 md-pt-80 md-pb-73">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg">Process</span>
                        <h2 class="title title2">
                           Our Working Process
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 md-mb-50">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img">
                                        <img src="{{ asset('frontend/assets/images/process/1.png')}}" alt="">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title">Discovery</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 md-mb-50">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img">
                                        <img src="{{ asset('frontend/assets/images/process/2.png')}}" alt="">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title"> Planning</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img">
                                        <img src="{{ asset('frontend/assets/images/process/3.png')}}" alt="">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title">Execute</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img">
                                        <img src="{{ asset('frontend/assets/images/process/4.png')}}" alt="">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title">Deliver</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Process Section End -->

@endsection
