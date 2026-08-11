    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                        <div class="footer-logo mb-30">
                            <a href="/"><img src="{{ asset(get_setting('frontend_logo_footer')) }}" style="height: 140px;" alt=""></a>
                        </div>
                        <div class="textwidget pb-30">
                            <p>{{ get_setting('footer_description') }}</p>
                        </div>
                    
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                        <h3 class="widget-title">IT Services</h3>
                        <ul class="site-map">
                             @php
                             $headers = DB::table('pages')
                                ->where('hearder', 1)
                                ->get();
                        @endphp
                                                @foreach ($headers as $header)
                                                        <li><a href="{{ $header->slug }}">{{ $header->title }}</a>
                                                        </li>
                                                         @endforeach
                            <!--<li><a href="software-development.html">Software Development</a></li>-->
                            <!--<li><a href="web-development.html">Web Development</a></li>-->
                            <!--<li><a href="analytic-solutions.html">Analytic Solutions</a></li>-->
                            <!--<li><a href="cloud-and-devops.html">Cloud and DevOps</a></li>-->
                            <!--<li><a href="product-design.html">Product Design</a></li>-->
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                        <h3 class="widget-title">Contact Info</h3>
                        <ul class="address-widget">
                            <li>
                                <i class="flaticon-location"></i>
                                <div class="desc">{{ get_setting('office_address') }}</div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                    <a href="">{{ get_setting('office_phone') }}</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="desc">
                                    <a href="mailto:support@rstheme.com">{{ get_setting('office_email') }}</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-clock-1"></i>
                                <div class="desc">
                                    Opening Hours: 10:00 - 6:00
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <h3 class="widget-title">Social Link</h3>
                            <ul class="footer-social md-mb-30">
                            <li>
                                <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                            </li>
                            <li>
                                <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                            </li>

                            <li>
                                <a href="# " target="_blank"><span><i
                                            class="fa fa-pinterest-p"></i></span></a>
                            </li>
                            <li>
                                <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 text-right md-mb-10 order-last">
                       
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p> <a href="https://www.techwebdit.com/">{{ get_setting('copyright_text') }}</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
