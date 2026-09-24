@extends('frontend.layouts.app')

@section('content')
@php
    $heroService = $services->first(fn($s) => !empty($s->banner)) 
                ?? $services->first(fn($s) => !empty($s->image1)) 
                ?? $services->first(fn($s) => !empty($s->image2));

    $heroBgImage = $heroService ? ($heroService->banner ?? $heroService->image1 ?? $heroService->image2) : null;
    $heroBgUrl = $heroBgImage ? asset('setting/service/' . $heroBgImage) : null;
@endphp

<!-- Breadcrumbs Hero Header Start -->
<section class="rs-breadcrumbs blog-hero-header" aria-label="Breadcrumb" style="position:relative;overflow:hidden;min-height:450px;display:flex;align-items:center;background-color:#080c23;">
    
    @if($heroBgUrl)
        <!-- Animated Background Image Layer -->
        <div class="hero-bg-animated" style="
            position:absolute;inset:0;
            background-image: url('{{ $heroBgUrl }}');
            background-size: cover;
            background-position: center center;
            z-index: 1;
            animation: kenburnsHeroZoom 25s infinite alternate ease-in-out;
            filter: brightness(0.60) contrast(1.15);
        "></div>
    @endif

    {{-- Gradient overlay --}}
    <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(8,12,35,0.88) 0%,rgba(20,50,100,0.82) 50%,rgba(6,6,26,0.93) 100%);z-index:2;"></div>

    {{-- Animated particle dots --}}
    <div style="position:absolute;inset:0;z-index:2;pointer-events:none;overflow:hidden;">
        <span style="position:absolute;top:12%;left:8%;width:8px;height:8px;border-radius:50%;background:rgba(99,179,237,0.6);animation:tdFloatDot 6s ease-in-out infinite;"></span>
        <span style="position:absolute;top:68%;left:18%;width:5px;height:5px;border-radius:50%;background:rgba(159,122,234,0.5);animation:tdFloatDot 8s ease-in-out infinite 1.5s;"></span>
        <span style="position:absolute;top:28%;right:12%;width:10px;height:10px;border-radius:50%;background:rgba(246,173,85,0.35);animation:tdFloatDot 7s ease-in-out infinite 0.8s;"></span>
        <span style="position:absolute;top:78%;right:22%;width:6px;height:6px;border-radius:50%;background:rgba(99,179,237,0.5);animation:tdFloatDot 9s ease-in-out infinite 2s;"></span>
        <span style="position:absolute;top:48%;left:42%;width:4px;height:4px;border-radius:50%;background:rgba(252,129,74,0.55);animation:tdFloatDot 5s ease-in-out infinite 0.3s;"></span>
        <span style="position:absolute;top:18%;left:58%;width:7px;height:7px;border-radius:50%;background:rgba(159,122,234,0.4);animation:tdFloatDot 10s ease-in-out infinite 3s;"></span>
    </div>

    {{-- Glowing ring decorations --}}
    <div style="position:absolute;top:-80px;right:-80px;width:380px;height:380px;border-radius:50%;border:2px solid rgba(99,179,237,0.15);z-index:2;animation:tdRotateSlow 20s linear infinite;"></div>
    <div style="position:absolute;top:-40px;right:-40px;width:280px;height:280px;border-radius:50%;border:1px solid rgba(159,122,234,0.12);z-index:2;animation:tdRotateSlow 14s linear infinite reverse;"></div>
    <div style="position:absolute;bottom:-60px;left:-60px;width:300px;height:300px;border-radius:50%;border:1px solid rgba(246,173,85,0.10);z-index:2;animation:tdRotateSlow 18s linear infinite;"></div>

    {{-- Main content --}}
    <div class="container" style="position:relative;z-index:3;padding-top:80px;padding-bottom:80px;">
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;">

            {{-- Glassmorphism breadcrumb badge --}}
            <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.08);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);border:1px solid rgba(255,255,255,0.18);border-radius:50px;padding:7px 20px;margin-bottom:24px;animation:tdFadeSlideDown 0.6s ease both;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" stroke="#63B3ED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <polyline points="9 22 9 12 15 12 15 22" stroke="#63B3ED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <nav aria-label="breadcrumb" style="line-height:1;">
                    <ol style="list-style:none;margin:0;padding:0;display:flex;align-items:center;gap:6px;">
                        <li style="font-size:13px;font-weight:500;color:rgba(255,255,255,0.75);letter-spacing:0.02em;">
                            <a href="{{ route('frontend.index') }}" style="color:#63B3ED;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#90CDF4'" onmouseout="this.style.color='#63B3ED'">Home</a>
                        </li>
                        <li style="color:rgba(255,255,255,0.35);font-size:12px;">&#47;</li>
                        <li style="font-size:13px;font-weight:500;color:rgba(255,255,255,0.85);letter-spacing:0.02em;" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>

            {{-- Main heading --}}
            <h1 style="font-size:clamp(2.4rem,6vw,4rem);font-weight:800;color:#ffffff;line-height:1.15;margin:0 0 16px;letter-spacing:-0.02em;animation:tdFadeSlideDown 0.7s ease 0.1s both;">
                Our <span style="background:linear-gradient(90deg,#63B3ED,#9F7AEA,#F6AD55);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Software &amp; IT Services</span>
            </h1>

            {{-- Subtitle --}}
            <p style="font-size:clamp(0.95rem,2vw,1.15rem);color:rgba(255,255,255,0.65);max-width:600px;line-height:1.7;margin:0;animation:tdFadeSlideDown 0.7s ease 0.2s both;">
                High-performance software engineering, cloud architecture, and tailored digital solutions built for modern enterprises.
            </p>

            {{-- Decorative divider --}}
            <div style="display:flex;align-items:center;gap:12px;margin-top:28px;animation:tdFadeSlideDown 0.7s ease 0.3s both;">
                <div style="height:1px;width:60px;background:linear-gradient(to right,transparent,rgba(99,179,237,0.6));"></div>
                <div style="width:8px;height:8px;border-radius:50%;background:linear-gradient(135deg,#63B3ED,#9F7AEA);box-shadow:0 0 12px rgba(99,179,237,0.6);"></div>
                <div style="height:1px;width:60px;background:linear-gradient(to left,transparent,rgba(159,122,234,0.6));"></div>
            </div>

        </div>
    </div>

    {{-- SVG wave divider at bottom --}}
    <div style="position:absolute;bottom:-1px;left:0;right:0;z-index:4;line-height:0;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70" preserveAspectRatio="none" style="display:block;width:100%;height:70px;">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z" fill="#f8fafc"/>
        </svg>
    </div>

    {{-- Keyframe animations --}}
    <style>
        @keyframes tdFloatDot {
            0%,100% { transform:translateY(0) scale(1); opacity:.7; }
            50%      { transform:translateY(-20px) scale(1.3); opacity:1; }
        }
        @keyframes tdRotateSlow {
            from { transform:rotate(0deg); }
            to   { transform:rotate(360deg); }
        }
        @keyframes tdFadeSlideDown {
            from { opacity:0; transform:translateY(-18px); }
            to   { opacity:1; transform:translateY(0); }
        }
    </style>
</section>
<!-- Breadcrumbs End -->

<!-- Main Services Grid Start -->
<div class="rs-services style3 rs-rain-animate gray-color pt-100 pb-120 md-pt-70 md-pb-80" style="background-color: #f8fafc;">
    <div class="container">
        <div class="sec-title text-center mb-60">
            <span class="sub-text text-primary font-weight-bold text-uppercase">Engineering Solutions</span>
            <h2 class="title mb-3">End-to-End Software & Technology Services</h2>
            <p class="desc text-muted mx-auto" style="max-width: 650px;">
                We design, engineer, and deploy high-performance software applications, cloud platforms, and mobile products tailored for global businesses.
            </p>
        </div>

        <div class="row align-items-stretch">
            @forelse($services as $index => $service)
                <div class="col-lg-4 col-md-6 mb-30 d-flex">
                    <div class="services-item bg-white p-4 p-md-5 rounded-lg shadow-sm border flex-grow-1 d-flex flex-column transition-all" style="border-radius: 16px;">
                        <div class="services-icon mb-4">
                            <div class="image-part">
                                @if($service->image1)
                                    <img class="main-img" src="{{ asset('frontend/assets/images/services/style2/main-img/' . ($index % 6 + 1) . '.png') }}" alt="{{ $service->title }}">
                                    <img class="hover-img" src="{{ asset('frontend/assets/images/services/style2/hover-img/' . ($index % 6 + 1) . '.png') }}" alt="{{ $service->title }}">
                                @else
                                    <img class="main-img" src="{{ asset('frontend/assets/images/services/style2/main-img/1.png') }}" alt="{{ $service->title }}">
                                    <img class="hover-img" src="{{ asset('frontend/assets/images/services/style2/hover-img/1.png') }}" alt="{{ $service->title }}">
                                @endif
                            </div>
                        </div>
                        <div class="services-content d-flex flex-column flex-grow-1">
                            <div class="services-text mb-3">
                                <h3 class="title font-weight-bold" style="font-size: 20px;">
                                    <a href="{{ route('frontend.servicedetails', $service->id) }}" class="text-dark hover-primary">
                                        {{ $service->title }}
                                    </a>
                                </h3>
                            </div>
                            <div class="services-desc mb-4 flex-grow-1">
                                <p class="text-muted" style="font-size: 14px; line-height: 1.6;">
                                    {{ $service->details1 }}
                                </p>
                                @if($service->details2)
                                    @php
                                        $features = array_filter(explode("\n", str_replace(["\r", "<p>", "</p>"], ["", "", "\n"], $service->details2)));
                                    @endphp
                                    <ul class="list-unstyled mb-0 text-secondary" style="font-size: 13px; line-height: 2;">
                                        @foreach($features as $feat)
                                            @if(trim($feat))
                                                <li><i class="fa fa-check text-success mr-2"></i> {{ trim(strip_tags($feat)) }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                                <span class="serial-number font-weight-bold text-primary" style="font-size: 18px;">
                                    {{ sprintf('%02d', $index + 1) }}
                                </span>
                                <div>
                                    <a href="{{ route('frontend.servicedetails', $service->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 font-weight-bold">
                                        See Details <i class="fa fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="p-5 bg-white rounded shadow-sm">
                        <i class="fa fa-cogs fa-3x text-muted mb-3"></i>
                        <h4 class="text-muted">No Services Available Currently</h4>
                        <p class="text-muted">Please check back soon or contact our software team!</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
<!-- Main Services Grid End -->

<!-- Process Workflow Section Start -->
<div class="rs-why-choose pt-100 pb-100 bg-white">
    <div class="container">
        <div class="sec-title text-center mb-60">
            <span class="sub-text text-primary font-weight-bold text-uppercase">Agile Process</span>
            <h2 class="title mb-3">Our Software Engineering Workflow</h2>
            <p class="desc text-muted mx-auto" style="max-width: 650px;">
                How we take your project from initial concept to high-scale production deployment seamlessly.
            </p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="p-4 rounded border h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #7C3AED !important;">
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge badge-primary rounded-circle p-3 mr-3 font-weight-bold" style="background: #7C3AED; font-size: 16px;">01</span>
                        <h4 class="mb-0 font-weight-bold" style="font-size: 18px;">Discovery & Scope</h4>
                    </div>
                    <p class="text-muted mb-0" style="font-size: 14px;">
                        We analyze business requirements, formulate technical specifications, and architect scalable data models.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="p-4 rounded border h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #FF914D !important;">
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge badge-warning text-white rounded-circle p-3 mr-3 font-weight-bold" style="background: #FF914D; font-size: 16px;">02</span>
                        <h4 class="mb-0 font-weight-bold" style="font-size: 18px;">UI/UX Design</h4>
                    </div>
                    <p class="text-muted mb-0" style="font-size: 14px;">
                        Interactive wireframes, clickable prototypes, and responsive design system creation for user delight.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="p-4 rounded border h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #10B981 !important;">
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge badge-success text-white rounded-circle p-3 mr-3 font-weight-bold" style="background: #10B981; font-size: 16px;">03</span>
                        <h4 class="mb-0 font-weight-bold" style="font-size: 18px;">Agile Sprint Coding</h4>
                    </div>
                    <p class="text-muted mb-0" style="font-size: 14px;">
                        Clean, well-documented code built in 2-week agile sprints with continuous client feedback loops.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process Workflow Section End -->

<!-- Call To Action Banner Start -->
<div class="rs-call-us pt-80 pb-80" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
    <div class="container">
        <div class="row align-items-center text-center text-lg-left">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="text-white font-weight-bold mb-2" style="font-size: 30px;">Have a Custom Software Project in Mind?</h2>
                <p class="text-white-50 mb-0" style="font-size: 16px;">
                    Speak with our senior software architects today to outline your scope and get a custom quote.
                </p>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a href="{{ route('frontend.booking') }}" class="readon font-weight-bold py-3 px-4 d-inline-block text-white mb-2 mb-sm-0" style="border-radius: 30px;">
                    Schedule Consultation <i class="fa fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Call To Action Banner End -->

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