@extends('frontend.layouts.app')

@section('content')
@php
    // Extract all unique blog banner image URLs from the blogs list for dynamic hero background cycling
    $heroBanners = [];
    foreach ($blogs as $b) {
        $img = $b->banner ?? $b->image1 ?? $b->image2;
        if ($img) {
            $heroBanners[] = asset('setting/blog/' . $img);
        }
    }
    $heroBanners = array_values(array_unique($heroBanners));
@endphp

<!-- Breadcrumbs Hero Header Start -->
<div class="rs-breadcrumbs blog-hero-header position-relative overflow-hidden" style="background-color: #0f172a;">
    
    @if(count($heroBanners) > 0)
        <!-- Full Background Image Slider Layer with Top/Bottom Split Curtain Animation -->
        <div id="heroBgSlider" class="position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100" style="z-index: 1; margin: 0; padding: 0;">
            @foreach($heroBanners as $index => $bannerUrl)
                <div class="hero-bg-slide position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100 {{ $index === 0 ? 'active' : '' }}"
                     style="z-index: {{ $index === 0 ? 3 : 1 }}; visibility: {{ $index === 0 ? 'visible' : 'hidden' }};">
                    
                    <!-- Top Half Split (Slides Upward) -->
                    <div class="split-half split-top">
                        <div class="hero-bg-img position-absolute top-0 start-0 w-100 h-100" style="
                            background-image: url('{{ $bannerUrl }}');
                            background-size: cover;
                            background-position: center center;
                            filter: brightness(0.65) contrast(1.15);
                            animation: kenburnsHeroZoom 25s infinite alternate ease-in-out;
                        "></div>
                    </div>

                    <!-- Bottom Half Split (Slides Downward) -->
                    <div class="split-half split-bottom">
                        <div class="hero-bg-img position-absolute top-0 start-0 w-100 h-100" style="
                            background-image: url('{{ $bannerUrl }}');
                            background-size: cover;
                            background-position: center center;
                            filter: brightness(0.65) contrast(1.15);
                            animation: kenburnsHeroZoom 25s infinite alternate ease-in-out;
                        "></div>
                    </div>

                </div>
            @endforeach
        </div>
    @endif

    <!-- Upper Layer Full Dark Gradient Overlay (Covers 100% top to bottom - ZERO gaps, ZERO lines) -->
    <div id="heroOverlay" class="position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100" style="
        z-index: 2;
        pointer-events: none;
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.90) 0%, rgba(30, 41, 59, 0.82) 50%, rgba(15, 23, 42, 0.92) 100%);
        margin: 0;
        padding: 0;
    "></div>

    <!-- Glowing Tech Ambient Accent Orbs -->
    <div class="position-absolute rounded-circle" style="width: 320px; height: 320px; background: rgba(37, 99, 235, 0.22); filter: blur(90px); top: -60px; left: 10%; z-index: 2; pointer-events: none;"></div>
    <div class="position-absolute rounded-circle" style="width: 280px; height: 280px; background: rgba(124, 58, 237, 0.22); filter: blur(80px); bottom: -50px; right: 10%; z-index: 2; pointer-events: none;"></div>

    <div class="container position-relative" style="z-index: 3; padding-top: 110px; padding-bottom: 70px;">
        <div class="breadcrumbs-inner text-center mx-auto" style="max-width: 850px;">
            <span class="badge badge-primary px-3 py-2 mb-3 text-uppercase" style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); letter-spacing: 1.5px; border-radius: 30px; font-size: 11px; font-weight: 700; box-shadow: 0 4px 14px rgba(37, 99, 235, 0.4);">
                <i class="fa fa-newspaper-o mr-1"></i> Tech Insights & Blog
            </span>
            <h1 class="page-title text-white font-weight-bold mb-3" style="font-size: 34px; line-height: 1.35; text-shadow: 0 2px 12px rgba(0,0,0,0.6);">
                Our Latest Technology & Development Insights
            </h1>
            <ul class="d-flex justify-content-center align-items-center list-unstyled gap-2 text-white-50 mb-0 font-weight-medium" style="font-size: 14.5px;">
                <li><a class="text-white-50 text-decoration-none hover-white" href="{{ route('frontend.index') }}">Home</a></li>
                <li class="text-primary font-weight-bold">Blogs</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section Start -->
<div class="rs-blog main-home pt-100 pb-100 md-pt-70 md-pb-70 gray-color" style="background-color: #f8fafc;">
    <div class="container">
        <div class="sec-title text-center mb-50">
            <span class="sub-text text-primary font-weight-bold text-uppercase" style="letter-spacing: 1px;">Tech & Innovation</span>
            <h2 class="title mb-0" style="font-weight: 800; color: #0f172a;">Explore Our Latest Insights & Industry Trends</h2>
        </div>

        <div class="row">
            @forelse($blogs as $blog)
                @php
                    // Priority for main card thumbnail: image1 -> banner -> image2
                    $cardImage = $blog->image1 ?? $blog->banner ?? $blog->image2;
                @endphp
                <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                    <div class="blog-item bg-white rounded-lg shadow-sm overflow-hidden d-flex flex-column transition-all w-100 border" style="border-color: #e2e8f0; border-radius: 16px;">
                        
                        <!-- Image / Placeholder Header -->
                        <div class="image-part position-relative" style="height: 220px; overflow: hidden; background: linear-gradient(135deg, #1e293b 0%, #334155 100%);">
                            @if($cardImage)
                                <img src="{{ asset('setting/blog/' . $cardImage) }}" alt="{{ $blog->title }}" class="w-100 h-100 object-fit-cover" style="object-fit: cover; transition: transform 0.4s ease;">
                            @else
                                <!-- Graceful Null Image Placeholder -->
                                <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center text-center p-3 text-white-50">
                                    <div class="icon-circle mb-2 rounded-circle bg-white-10 p-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: rgba(255,255,255,0.1);">
                                        <i class="fa fa-newspaper-o fa-2x text-primary"></i>
                                    </div>
                                    <span class="small text-uppercase font-weight-bold tracking-wider text-white-50">TechWebDIT Insight</span>
                                </div>
                            @endif
                            <span class="badge badge-primary position-absolute" style="top: 15px; left: 15px; background: #2563eb; padding: 6px 14px; font-size: 12px; font-weight: 600; border-radius: 20px;">
                                Article
                            </span>
                        </div>

                        <!-- Card Content -->
                        <div class="blog-content p-4 d-flex flex-column flex-grow-1">
                            <div class="blog-meta d-flex align-items-center mb-3 text-muted" style="font-size: 13px;">
                                <span><i class="fa fa-calendar mr-2 text-primary"></i> {{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Recent' }}</span>
                                <span class="ml-auto"><i class="fa fa-user mr-1 text-primary"></i> TechWebDIT</span>
                            </div>

                            <h4 class="title mb-3" style="font-size: 19px; font-weight: 700; line-height: 1.4; color: #0f172a;">
                                <a href="{{ route('frontend.blogdetails', $blog->id) }}" class="text-dark text-decoration-none hover-primary">
                                    {{ $blog->title }}
                                </a>
                            </h4>

                            <p class="desc text-muted mb-4 flex-grow-1" style="font-size: 14px; line-height: 1.6;">
                                {{ Str::limit(strip_tags($blog->short_details ?? $blog->details1), 110) }}
                            </p>

                            <div class="btn-part mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                                <a href="{{ route('frontend.blogdetails', $blog->id) }}" class="btn btn-outline-primary btn-sm font-weight-bold rounded-pill px-4" style="border-width: 2px;">
                                    Read Article <i class="fa fa-arrow-right ml-2"></i>
                                </a>
                                @if($blog->banner || $blog->image1 || $blog->image2)
                                    <span class="text-muted small" title="Includes Media Images">
                                        <i class="fa fa-picture-o text-secondary"></i>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="p-5 bg-white rounded-lg shadow-sm border" style="border-radius: 16px;">
                        <i class="fa fa-newspaper-o fa-3x text-muted mb-3"></i>
                        <h4 class="text-dark font-weight-bold">No Blog Articles Published Yet</h4>
                        <p class="text-muted mb-0">Check back soon for new software development and technology insights!</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
<!-- Blog Section End -->

<style>
    /* Split Slide Transition Animation */
    .hero-bg-slide {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .hero-bg-slide .split-half {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        transition: transform 1.2s cubic-bezier(0.77, 0, 0.175, 1);
        will-change: transform;
        pointer-events: none;
    }

    .hero-bg-slide .split-top {
        -webkit-clip-path: inset(0 0 49.8% 0);
        clip-path: inset(0 0 49.8% 0);
    }

    .hero-bg-slide .split-bottom {
        -webkit-clip-path: inset(49.8% 0 0 0);
        clip-path: inset(49.8% 0 0 0);
    }

    /* Split Animation: Top half slides UP, Bottom half slides DOWN */
    .hero-bg-slide.is-splitting .split-top {
        transform: translateY(-100%);
    }

    .hero-bg-slide.is-splitting .split-bottom {
        transform: translateY(100%);
    }

    @keyframes kenburnsHeroZoom {
        0% {
            transform: scale(1) translateY(0);
        }
        50% {
            transform: scale(1.08) translateY(-8px);
        }
        100% {
            transform: scale(1.15) translateY(0);
        }
    }
    .hover-white:hover {
        color: #ffffff !important;
        text-decoration: underline !important;
    }
</style>

@if(count($heroBanners) > 1)
@push('after-scripts')
<script>
    (function() {
        function initHeroSlider() {
            var slides = document.querySelectorAll('#heroBgSlider .hero-bg-slide');
            if (!slides || slides.length < 2) return;

            var currentIndex = 0;
            var isAnimating = false;
            var intervalDuration = 5000; // Switch slide every 5 seconds
            var animDuration = 1200; // Split transition duration in ms

            setInterval(function() {
                if (isAnimating) return;
                isAnimating = true;

                var currentSlide = slides[currentIndex];
                var nextIndex = (currentIndex + 1) % slides.length;
                var nextSlide = slides[nextIndex];

                // 1. Place next slide directly behind current slide
                nextSlide.style.zIndex = '2';
                nextSlide.style.visibility = 'visible';
                nextSlide.classList.remove('is-splitting');

                // 2. Keep current slide on top layer
                currentSlide.style.zIndex = '3';
                currentSlide.style.visibility = 'visible';

                // Force reflow before transition
                void currentSlide.offsetWidth;

                // 3. Trigger top half upward & bottom half downward split transition
                currentSlide.classList.add('is-splitting');

                // 4. Reset current slide after transition completes
                setTimeout(function() {
                    currentSlide.style.visibility = 'hidden';
                    currentSlide.style.zIndex = '1';
                    currentSlide.classList.remove('is-splitting');

                    // Promote next slide to top layer
                    nextSlide.style.zIndex = '3';
                    currentIndex = nextIndex;
                    isAnimating = false;
                }, animDuration);

            }, intervalDuration);
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initHeroSlider);
        } else {
            initHeroSlider();
        }
    })();
</script>
@endpush
@endif
@endsection
