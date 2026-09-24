@extends('frontend.layouts.app')

@section('content')
@php
    $heroBgImage = $service->banner ?? $service->image1 ?? $service->image2 ?? $service->image3;
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
                        <li style="font-size:13px;font-weight:500;color:rgba(255,255,255,0.75);letter-spacing:0.02em;">
                            <a href="{{ route('frontend.services') }}" style="color:#63B3ED;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#90CDF4'" onmouseout="this.style.color='#63B3ED'">Services</a>
                        </li>
                        <li style="color:rgba(255,255,255,0.35);font-size:12px;">&#47;</li>
                        <li style="font-size:13px;font-weight:500;color:rgba(255,255,255,0.85);letter-spacing:0.02em;" aria-current="page">{{ $service->title }}</li>
                    </ol>
                </nav>
            </div>

            {{-- Main heading --}}
            <h1 style="font-size:clamp(2.2rem,5vw,3.5rem);font-weight:800;color:#ffffff;line-height:1.2;margin:0 0 16px;letter-spacing:-0.02em;max-width:850px;animation:tdFadeSlideDown 0.7s ease 0.1s both;">
                <span style="background:linear-gradient(90deg,#63B3ED,#9F7AEA,#F6AD55);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">{{ $service->title }}</span>
            </h1>

            {{-- Subtitle --}}
            <p style="font-size:clamp(0.95rem,2vw,1.15rem);color:rgba(255,255,255,0.65);max-width:560px;line-height:1.7;margin:0;animation:tdFadeSlideDown 0.7s ease 0.2s both;">
                Comprehensive enterprise-grade software capabilities engineered for scale, agility, and performance.
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

<!-- Service Details Content Start -->
<div class="rs-services-single pt-90 pb-120 md-pt-70 md-pb-80 gray-color" style="background-color: #f8fafc;">
    <div class="container">
        <div class="row">
            <!-- Main Details Content -->
            <div class="col-lg-8 md-mb-50">
                <div class="service-details-content bg-white p-4 p-md-5 rounded-lg shadow-sm border" style="border-radius: 16px;">
                    <!-- Title & Overview -->
                    <h2 class="title font-weight-bold mb-3" style="font-size: 28px; color: #0f172a;">{{ $service->title }}</h2>
                    
                    @if($service->details1)
                        <div class="overview-box p-4 mb-4 rounded" style="background: #F8FAFC; border-left: 4px solid #7C3AED;">
                            <p class="mb-0 text-secondary font-weight-medium" style="font-size: 15px; line-height: 1.7;">
                                {{ $service->details1 }}
                            </p>
                        </div>
                    @endif

                    <!-- Key Features List (details2) -->
                    @if($service->details2)
                        <div class="key-features mb-4">
                            <h4 class="font-weight-bold mb-3" style="font-size: 20px; color: #0f172a;">Key Capabilities & Features</h4>
                            @php
                                $features = array_filter(explode("\n", str_replace(["\r", "<p>", "</p>"], ["", "", "\n"], $service->details2)));
                            @endphp
                            <div class="row">
                                @foreach($features as $feat)
                                    @if(trim($feat))
                                        <div class="col-md-6 mb-2">
                                            <div class="d-flex align-items-center p-3 rounded" style="background: #F1F5F9;">
                                                <i class="fa fa-check-circle text-success mr-3" style="font-size: 18px; color: #10B981;"></i>
                                                <span class="font-weight-bold text-dark" style="font-size: 14px;">{{ trim(strip_tags($feat)) }}</span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Detailed Description (details3) -->
                    @if($service->details3)
                        <div class="long-details mb-5 pt-3 border-top">
                            <h4 class="font-weight-bold mb-3" style="font-size: 20px; color: #0f172a;">Service Overview & Engineering Approach</h4>
                            <div class="desc text-secondary" style="font-size: 15px; line-height: 1.8;">
                                {!! $service->details3 !!}
                            </div>
                        </div>
                    @endif

                    <!-- Booking CTA Banner -->
                    <div class="p-4 p-md-5 rounded-lg text-white d-flex flex-column flex-md-row align-items-center justify-content-between mt-4" style="background: linear-gradient(135deg, #7C3AED 0%, #0F172A 100%); border-radius: 16px;">
                        <div class="mb-3 mb-md-0">
                            <h4 class="text-white font-weight-bold mb-1" style="font-size: 20px;">Ready to build with {{ $service->title }}?</h4>
                            <p class="text-white-50 mb-0" style="font-size: 14px;">Get a custom quote and consultation from our senior engineers.</p>
                        </div>
                        <div>
                            <a href="{{ route('frontend.booking', ['service_id' => $service->id]) }}" class="readon font-weight-bold py-3 px-4 d-inline-block text-white" style="border-radius: 30px; white-space: nowrap;">
                                Book Service <i class="fa fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- All Services Navigation Widget -->
                <div class="widget bg-white p-4 rounded-lg shadow-sm border mb-4" style="border-radius: 16px;">
                    <h4 class="widget-title font-weight-bold pb-3 mb-3 border-bottom" style="font-size: 18px; color: #0f172a;">All Services</h4>
                    <ul class="list-unstyled mb-0">
                        @foreach($recentServices as $rs)
                            <li class="mb-2">
                                <a href="{{ route('frontend.servicedetails', $rs->id) }}" class="d-flex align-items-center justify-content-between p-3 rounded text-decoration-none transition-all {{ $rs->id == $service->id ? 'bg-primary text-white font-weight-bold' : 'bg-light text-dark' }}" style="border-radius: 8px;">
                                    <span>{{ $rs->title }}</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Contact & Support Card Widget -->
                <div class="widget p-4 rounded-lg shadow-sm text-white text-center" style="background: linear-gradient(180deg, #0F172A 0%, #1E293B 100%); border-radius: 16px;">
                    <div class="icon-wrap mb-3 text-warning">
                        <i class="fa fa-headphones fa-3x" style="color: #FF914D;"></i>
                    </div>
                    <h4 class="text-white font-weight-bold mb-2" style="font-size: 20px;">Have Questions?</h4>
                    <p class="text-white-50 mb-4" style="font-size: 14px;">Contact our engineering desk directly for technical inquiries and custom scope evaluation.</p>
                    <a href="{{ route('frontend.booking', ['service_id' => $service->id]) }}" class="readon font-weight-bold py-3 px-4 d-block w-100 text-center text-white" style="border-radius: 30px;">
                        Book Consultation <i class="fa fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Details Content End -->

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
