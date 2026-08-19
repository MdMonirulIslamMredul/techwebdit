@extends('frontend.layouts.app')

@section('content')
@php
    // Hero background image preference: banner -> image1 -> image2
    $heroBgImage = $blog->banner ?? $blog->image1 ?? $blog->image2;
    $heroBgUrl = $heroBgImage ? asset('setting/blog/' . $heroBgImage) : null;

    // Body content image selection (avoid duplicating hero bg if possible)
    $bodyMainImage = null;
    if ($blog->banner && $blog->image1) {
        $bodyMainImage = $blog->image1;
    } elseif (!$blog->banner && $blog->image1 && $blog->image2) {
        $bodyMainImage = $blog->image2;
    }

    $bodySecondaryImage = null;
    if ($blog->banner && $blog->image1 && $blog->image2) {
        $bodySecondaryImage = $blog->image2;
    }
@endphp

<!-- Breadcrumbs Hero Header Start -->
<div class="rs-breadcrumbs blog-hero-header position-relative overflow-hidden" style="padding: 110px 0 70px; background-color: #0f172a;">
    
    @if($heroBgUrl)
        <!-- Animated Background Image Layer -->
        <div class="hero-bg-animated position-absolute top-0 start-0 w-100 h-100" style="
            background-image: url('{{ $heroBgUrl }}');
            background-size: cover;
            background-position: center center;
            z-index: 1;
            animation: kenburnsHeroZoom 25s infinite alternate ease-in-out;
            filter: brightness(0.65) contrast(1.15);
        "></div>
    @endif

    <!-- Dark Gradient Overlay for High Contrast & Professional Aesthetics -->
    <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100" style="
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 41, 59, 0.82) 50%, rgba(15, 23, 42, 0.94) 100%);
        z-index: 2;
    "></div>

    <!-- Glowing Tech Accent Orbs matching website theme -->
    <div class="position-absolute rounded-circle" style="width: 320px; height: 320px; background: rgba(37, 99, 235, 0.22); filter: blur(90px); top: -60px; left: 10%; z-index: 2; pointer-events: none;"></div>
    <div class="position-absolute rounded-circle" style="width: 280px; height: 280px; background: rgba(124, 58, 237, 0.22); filter: blur(80px); bottom: -50px; right: 10%; z-index: 2; pointer-events: none;"></div>

    <div class="container position-relative" style="z-index: 3;">
        <div class="breadcrumbs-inner text-center mx-auto" style="max-width: 850px;">
            <span class="badge badge-primary px-3 py-2 mb-3 text-uppercase" style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); letter-spacing: 1.5px; border-radius: 30px; font-size: 11px; font-weight: 700; box-shadow: 0 4px 14px rgba(37, 99, 235, 0.4);">
                <i class="fa fa-code mr-1"></i> Tech Article
            </span>
            <h1 class="page-title text-white font-weight-bold mb-3" style="font-size: 34px; line-height: 1.35; text-shadow: 0 2px 12px rgba(0,0,0,0.6);">
                {{ $blog->title }}
            </h1>
            <ul class="d-flex justify-content-center align-items-center list-unstyled gap-2 text-white-50 mb-0 font-weight-medium" style="font-size: 14.5px;">
                <li><a class="text-white-50 text-decoration-none hover-white" href="{{ route('frontend.index') }}">Home</a></li>
                <li><a class="text-white-50 text-decoration-none hover-white" href="{{ route('frontend.blogs') }}">Blogs</a></li>
                <li class="text-primary font-weight-bold">Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Details Section Start -->
<div class="rs-inner-blog pt-90 pb-100 md-pt-70 md-pb-70 gray-color" style="background-color: #f8fafc;">
    <div class="container">
        <div class="row">
            <!-- Main Article Content -->
            <div class="col-lg-8 pr-35 md-pr-15">
                <div class="blog-deatils bg-white p-4 p-md-5 rounded-lg shadow-sm border" style="border-color: #e2e8f0; border-radius: 16px;">

                    <!-- Featured Body Main Image (If Available & Not duplicating header) -->
                    @if($bodyMainImage)
                        <div class="bs-img mb-4 overflow-hidden rounded-lg shadow-sm" style="border-radius: 12px; max-height: 400px;">
                            <img src="{{ asset('setting/blog/' . $bodyMainImage) }}" alt="{{ $blog->title }}" class="w-100 h-100 object-fit-cover" style="max-height: 400px; object-fit: cover;">
                        </div>
                    @endif

                    <div class="blog-full">
                        <!-- Post Meta Bar -->
                        <ul class="single-post-meta list-unstyled d-flex flex-wrap align-items-center mb-4 text-muted border-bottom pb-3 gap-3" style="font-size: 14px;">
                            <li class="mr-4"><i class="fa fa-user text-primary mr-2"></i> TechWebDIT Team</li>
                            <li class="mr-4"><i class="fa fa-calendar text-primary mr-2"></i> {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Recent' }}</li>
                            <li><span class="badge badge-primary px-3 py-2" style="background: #2563eb; font-size: 12px;">Software & Tech</span></li>
                        </ul>

                        <!-- Title -->
                        <h2 class="title font-weight-bold mb-4" style="font-size: 28px; line-height: 1.35; color: #0f172a;">
                            {{ $blog->title }}
                        </h2>

                        <!-- Lead Quote / Short Summary -->
                        @if($blog->short_details)
                            <div class="lead font-weight-normal text-dark mb-4 p-4 rounded-lg" style="background: #f1f5f9; border-left: 5px solid #2563eb; font-size: 16.5px; line-height: 1.7; border-radius: 8px;">
                                {{ $blog->short_details }}
                            </div>
                        @endif

                        <!-- Main Content Block 1 -->
                        @if($blog->details1)
                            <div class="blog-desc mb-4 text-secondary" style="line-height: 1.8; font-size: 15.5px;">
                                {!! $blog->details1 !!}
                            </div>
                        @endif

                        <!-- Secondary Body Image Showcase -->
                        @if($bodySecondaryImage)
                            <div class="my-4 overflow-hidden rounded-lg shadow-sm border" style="border-radius: 12px; max-height: 360px;">
                                <img src="{{ asset('setting/blog/' . $bodySecondaryImage) }}" alt="Additional Detail Image" class="w-100" style="max-height: 360px; object-fit: cover;">
                            </div>
                        @endif

                        <!-- Main Content Block 2 -->
                        @if($blog->details2)
                            <div class="blog-desc mb-4 text-secondary" style="line-height: 1.8; font-size: 15.5px;">
                                {!! $blog->details2 !!}
                            </div>
                        @endif

                        <!-- Footer Actions & Sharing -->
                        <div class="border-top pt-4 mt-5 d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3">
                            <a href="{{ route('frontend.blogs') }}" class="btn btn-outline-secondary font-weight-bold rounded-pill px-4 py-2" style="border-width: 2px;">
                                <i class="fa fa-arrow-left mr-2"></i> Back to All Articles
                            </a>
                            <div class="share-post d-flex align-items-center mt-3 mt-sm-0">
                                <strong class="mr-3 text-dark">Share Article:</strong>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-sm btn-light rounded-circle text-primary mx-1" style="width: 36px; height: 36px; line-height: 24px;"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-sm btn-light rounded-circle text-info mx-1" style="width: 36px; height: 36px; line-height: 24px;"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-sm btn-light rounded-circle text-primary mx-1" style="width: 36px; height: 36px; line-height: 24px;"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="col-lg-4 col-md-12 md-mt-50">
                <div class="widget-area sticky-top" style="top: 100px; z-index: 10;">
                    
                    <!-- Recent Posts Widget -->
                    <div class="recent-posts mb-4 bg-white p-4 rounded-lg shadow-sm border" style="border-color: #e2e8f0; border-radius: 16px;">
                        <h4 class="widget-title font-weight-bold mb-4 pb-2 border-bottom" style="font-size: 19px; color: #0f172a;">
                            Recent Articles
                        </h4>
                        @forelse($recentBlogs as $recent)
                            @php
                                $recentImg = $recent->image1 ?? $recent->banner ?? $recent->image2;
                            @endphp
                            <div class="recent-post-widget d-flex align-items-center mb-3 pb-3 border-bottom">
                                <div class="post-img mr-3 overflow-hidden rounded border" style="width: 65px; height: 65px; flex-shrink: 0; background: linear-gradient(135deg, #1e293b, #334155);">
                                    <a href="{{ route('frontend.blogdetails', $recent->id) }}" class="d-block w-100 h-100">
                                        @if($recentImg)
                                            <img src="{{ asset('setting/blog/' . $recentImg) }}" alt="{{ $recent->title }}" class="w-100 h-100" style="object-fit: cover;">
                                        @else
                                            <div class="w-100 h-100 d-flex align-items-center justify-content-center text-white-50">
                                                <i class="fa fa-newspaper-o text-primary font-weight-bold"></i>
                                            </div>
                                        @endif
                                    </a>
                                </div>
                                <div class="post-desc flex-grow-1">
                                    <h5 class="mb-1" style="font-size: 14px; font-weight: 600; line-height: 1.35;">
                                        <a href="{{ route('frontend.blogdetails', $recent->id) }}" class="text-dark text-decoration-none hover-primary">
                                            {{ Str::limit($recent->title, 45) }}
                                        </a>
                                    </h5>
                                    <span class="text-muted" style="font-size: 12px;"><i class="fa fa-calendar mr-1 text-primary"></i> {{ $recent->created_at ? $recent->created_at->format('M d, Y') : 'Recent' }}</span>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted small mb-0">No other recent articles.</p>
                        @endforelse
                    </div>

                    <!-- Contact CTA Widget -->
                    <div class="cta-widget p-4 rounded-lg text-white text-center shadow-sm" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border-radius: 16px;">
                        <div class="icon-box mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: rgba(37,99,235,0.2);">
                            <i class="fa fa-code fa-lg text-primary"></i>
                        </div>
                        <h4 class="text-white font-weight-bold mb-2" style="font-size: 18px;">Need Custom Software?</h4>
                        <p class="text-white-50 mb-4" style="font-size: 13.5px; line-height: 1.5;">Our engineering team builds scalable web & mobile solutions for modern enterprises.</p>
                        <a href="{{ route('frontend.booking') }}" class="btn btn-primary rounded-pill px-4 py-2 font-weight-bold w-100">
                            Book Service Request <i class="fa fa-paper-plane ml-1"></i>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Blog Details Section End -->

<style>
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
@endsection
