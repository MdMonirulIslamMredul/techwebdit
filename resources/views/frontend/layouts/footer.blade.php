{{-- Footer Start --}}
<footer id="rs-footer" class="rs-footer" role="contentinfo">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                {{-- Brand / About Column --}}
                <div class="col-lg-3 col-md-6 col-sm-12 footer-widget mb-4 mb-lg-0">
                    <div class="footer-logo mb-30">
                        <a href="/" aria-label="Techweb Bd It — Home">
                            <img src="{{ asset(get_setting('frontend_logo_footer')) }}"
                                 style="height: 140px;"
                                 alt="Techweb Bd It footer logo">
                        </a>
                    </div>
                    <div class="textwidget pb-30">
                        <p>{{ get_setting('footer_description') }}</p>
                    </div>
                </div>

                {{-- IT Services Column --}}
                <div class="col-lg-3 col-md-6 col-sm-12 pl-45 md-pl-15 mb-4 mb-lg-0">
                    <h3 class="widget-title">IT Services</h3>
                    <ul class="site-map" aria-label="IT Services">
                        @php
                            $headers = DB::table('pages')
                                ->where('hearder', 1)
                                ->get();
                        @endphp
                        @foreach ($headers as $header)
                            <li>
                                <a href="{{ $header->slug }}">{{ $header->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Contact Info Column --}}
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <h3 class="widget-title">Contact Info</h3>
                    <ul class="address-widget" aria-label="Contact information">

                        <li>
                            <i class="flaticon-location" aria-hidden="true"></i>
                            <div class="desc">{{ get_setting('office_address') }}</div>
                        </li>

                        <li>
                            <i class="flaticon-call" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="tel:{{ get_setting('office_phone') }}">
                                    {{ get_setting('office_phone') }}
                                </a>
                            </div>
                        </li>

                        <li>
                            <i class="flaticon-email" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="mailto:{{ get_setting('office_email') }}">
                                    {{ get_setting('office_email') }}
                                </a>
                            </div>
                        </li>

                        <li>
                            <i class="flaticon-clock-1" aria-hidden="true"></i>
                            <div class="desc">
                                <time>Opening Hours: 10:00 – 18:00</time>
                            </div>
                        </li>

                    </ul>
                </div>

                {{-- Social Links Column --}}
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h3 class="widget-title">Follow Us</h3>
                    <ul class="footer-social md-mb-30" aria-label="Social media links">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                <span aria-hidden="true"><i class="fa fa-facebook"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                                <span aria-hidden="true"><i class="fa fa-twitter"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Pinterest">
                                <span aria-hidden="true"><i class="fa fa-pinterest-p"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <span aria-hidden="true"><i class="fa fa-instagram"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>{{-- //.row --}}
        </div>{{-- //.container --}}
    </div>{{-- //.footer-top --}}

    {{-- Footer Bottom Bar --}}
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        <p>
                            <a href="https://www.techwebdit.com/" rel="noopener noreferrer">
                                {{ get_setting('copyright_text') }}
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>{{-- //.footer-bottom --}}

</footer>
{{-- Footer End --}}
