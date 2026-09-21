@extends('frontend.layouts.app')

@section('content')

{{-- ===================== BREADCRUMBS HERO ===================== --}}
<section class="rs-breadcrumbs img1" style="position:relative;overflow:hidden;min-height:450px;display:flex;align-items:center;">

    {{-- Gradient overlay --}}
    <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(30,10,60,0.92) 0%,rgba(67,56,202,0.82) 50%,rgba(10,8,40,0.95) 100%);z-index:1;"></div>

    {{-- Animated particle dots --}}
    <div style="position:absolute;inset:0;z-index:2;pointer-events:none;overflow:hidden;">
        <span style="position:absolute;top:14%;left:8%;width:8px;height:8px;border-radius:50%;background:rgba(167,139,250,0.7);animation:pkFloatDot 6s ease-in-out infinite;"></span>
        <span style="position:absolute;top:68%;left:18%;width:5px;height:5px;border-radius:50%;background:rgba(99,179,237,0.5);animation:pkFloatDot 8s ease-in-out infinite 1.5s;"></span>
        <span style="position:absolute;top:28%;right:12%;width:10px;height:10px;border-radius:50%;background:rgba(246,173,85,0.35);animation:pkFloatDot 7s ease-in-out infinite 0.8s;"></span>
        <span style="position:absolute;top:78%;right:22%;width:6px;height:6px;border-radius:50%;background:rgba(167,139,250,0.5);animation:pkFloatDot 9s ease-in-out infinite 2s;"></span>
        <span style="position:absolute;top:48%;left:42%;width:4px;height:4px;border-radius:50%;background:rgba(252,129,74,0.55);animation:pkFloatDot 5s ease-in-out infinite 0.3s;"></span>
        <span style="position:absolute;top:18%;left:58%;width:7px;height:7px;border-radius:50%;background:rgba(99,179,237,0.4);animation:pkFloatDot 10s ease-in-out infinite 3s;"></span>
    </div>

    {{-- Glowing ring decorations --}}
    <div style="position:absolute;top:-80px;right:-80px;width:380px;height:380px;border-radius:50%;border:2px solid rgba(167,139,250,0.18);z-index:2;animation:pkRotateSlow 20s linear infinite;"></div>
    <div style="position:absolute;top:-40px;right:-40px;width:280px;height:280px;border-radius:50%;border:1px solid rgba(99,179,237,0.13);z-index:2;animation:pkRotateSlow 14s linear infinite reverse;"></div>
    <div style="position:absolute;bottom:-60px;left:-60px;width:300px;height:300px;border-radius:50%;border:1px solid rgba(246,173,85,0.10);z-index:2;animation:pkRotateSlow 18s linear infinite;"></div>

    {{-- Main content --}}
    <div class="container" style="position:relative;z-index:3;padding-top:80px;padding-bottom:80px;">
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;">

            {{-- Glassmorphism breadcrumb badge --}}
            <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.08);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);border:1px solid rgba(255,255,255,0.18);border-radius:50px;padding:7px 20px;margin-bottom:24px;animation:pkFadeSlideDown 0.6s ease both;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2" stroke="#A78BFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <line x1="1" y1="10" x2="23" y2="10" stroke="#A78BFA" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <nav aria-label="breadcrumb" style="line-height:1;">
                    <ol style="list-style:none;margin:0;padding:0;display:flex;align-items:center;gap:6px;">
                        <li style="font-size:13px;font-weight:500;color:rgba(255,255,255,0.75);letter-spacing:0.02em;">
                            <a href="{{ route('frontend.index') }}" style="color:#A78BFA;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#C4B5FD'" onmouseout="this.style.color='#A78BFA'">Home</a>
                        </li>
                        <li style="color:rgba(255,255,255,0.35);font-size:12px;">&#47;</li>
                        <li style="font-size:13px;font-weight:500;color:rgba(255,255,255,0.85);letter-spacing:0.02em;" aria-current="page">Packages</li>
                    </ol>
                </nav>
            </div>

            {{-- Main heading --}}
            <h1 style="font-size:clamp(2.2rem,5.5vw,3.8rem);font-weight:800;color:#ffffff;line-height:1.15;margin:0 0 16px;letter-spacing:-0.02em;animation:pkFadeSlideDown 0.7s ease 0.1s both;">
                Software <span style="background:linear-gradient(90deg,#A78BFA,#63B3ED,#F6AD55);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Packages & Pricing</span>
            </h1>

            {{-- Subtitle --}}
            <p style="font-size:clamp(0.95rem,2vw,1.15rem);color:rgba(255,255,255,0.65);max-width:540px;line-height:1.7;margin:0;animation:pkFadeSlideDown 0.7s ease 0.2s both;">
                Transparent pricing for every project size — from startups to enterprises. Full source code ownership included.
            </p>

            {{-- Decorative divider --}}
            <div style="display:flex;align-items:center;gap:12px;margin-top:28px;animation:pkFadeSlideDown 0.7s ease 0.3s both;">
                <div style="height:1px;width:60px;background:linear-gradient(to right,transparent,rgba(167,139,250,0.6));"></div>
                <div style="width:8px;height:8px;border-radius:50%;background:linear-gradient(135deg,#A78BFA,#63B3ED);box-shadow:0 0 12px rgba(167,139,250,0.6);"></div>
                <div style="height:1px;width:60px;background:linear-gradient(to left,transparent,rgba(99,179,237,0.6));"></div>
            </div>

        </div>
    </div>

    {{-- SVG wave divider --}}
    <div style="position:absolute;bottom:-1px;left:0;right:0;z-index:4;line-height:0;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70" preserveAspectRatio="none" style="display:block;width:100%;height:70px;">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z" fill="#f1f5f9"/>
        </svg>
    </div>

    {{-- Keyframe animations (namespaced pk*) --}}
    <style>
        @keyframes pkFloatDot {
            0%,100% { transform:translateY(0) scale(1); opacity:.7; }
            50%      { transform:translateY(-20px) scale(1.3); opacity:1; }
        }
        @keyframes pkRotateSlow {
            from { transform:rotate(0deg); }
            to   { transform:rotate(360deg); }
        }
        @keyframes pkFadeSlideDown {
            from { opacity:0; transform:translateY(-18px); }
            to   { opacity:1; transform:translateY(0); }
        }
        .pkg-card { transition: transform 0.25s ease, box-shadow 0.25s ease; }
        .pkg-card:hover { transform: translateY(-8px); }
    </style>
</section>
{{-- ===================== END BREADCRUMBS HERO ===================== --}}


{{-- ===================== PRICING SECTION ===================== --}}
<section style="background:#f1f5f9;padding:90px 0 100px;" aria-labelledby="pricing-heading">
    <div class="container">

        {{-- Section Header --}}
        <div style="text-align:center;margin-bottom:64px;">
            <span style="display:inline-block;font-size:11px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#7C3AED;background:rgba(124,58,237,0.08);border:1px solid rgba(124,58,237,0.2);border-radius:50px;padding:5px 18px;margin-bottom:14px;">Transparent Pricing</span>
            <h2 id="pricing-heading" style="font-size:clamp(1.7rem,4vw,2.5rem);font-weight:800;color:#0f172a;line-height:1.2;margin:0 0 14px;">
                Tailored Packages for <span style="background:linear-gradient(90deg,#7C3AED,#2563EB);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Every Scale</span>
            </h2>
            <p style="font-size:1rem;color:#64748b;max-width:560px;margin:0 auto;line-height:1.75;">
                Choose the perfect development tier for your project. All packages include full source code ownership and responsive architecture.
            </p>
        </div>

        {{-- Pricing Cards --}}
        <div class="row align-items-stretch">
            @forelse($packages as $package)
                <div class="col-lg-4 col-md-6" style="margin-bottom:32px;display:flex;">
                    <div class="pkg-card" style="
                        width:100%;
                        border-radius:20px;
                        overflow:hidden;
                        display:flex;
                        flex-direction:column;
                        position:relative;
                        {{ $package->is_popular
                            ? 'background:linear-gradient(160deg,#1e1b4b,#2e1065);box-shadow:0 20px 60px rgba(124,58,237,0.35);border:1px solid rgba(167,139,250,0.25);'
                            : 'background:#ffffff;box-shadow:0 4px 32px rgba(15,23,42,0.08);border:1px solid rgba(226,232,240,0.9);' }}
                    ">

                        @if($package->is_popular)
                            {{-- Popular badge --}}
                            <div style="position:absolute;top:20px;right:20px;z-index:2;">
                                <span style="display:inline-flex;align-items:center;gap:5px;background:linear-gradient(135deg,#A78BFA,#7C3AED);color:#fff;font-size:10px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;padding:5px 14px;border-radius:50px;box-shadow:0 4px 12px rgba(124,58,237,0.45);">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="#fff"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    Most Popular
                                </span>
                            </div>
                            {{-- Decorative glows --}}
                            <div style="position:absolute;top:-40px;right:-40px;width:200px;height:200px;border-radius:50%;background:rgba(124,58,237,0.25);filter:blur(60px);pointer-events:none;"></div>
                            <div style="position:absolute;bottom:-40px;left:-40px;width:160px;height:160px;border-radius:50%;background:rgba(99,179,237,0.15);filter:blur(50px);pointer-events:none;"></div>
                        @endif

                        {{-- Card top accent bar --}}
                        <div style="height:4px;background:{{ $package->is_popular ? 'linear-gradient(90deg,#A78BFA,#7C3AED,#2563EB)' : 'linear-gradient(90deg,#e2e8f0,#cbd5e1)' }};"></div>

                        {{-- Header --}}
                        <div style="padding:32px 32px 24px;text-align:center;position:relative;z-index:1;">

                            {{-- Icon badge --}}
                            <div style="width:56px;height:56px;border-radius:16px;margin:0 auto 18px;display:flex;align-items:center;justify-content:center;background:{{ $package->is_popular ? 'rgba(167,139,250,0.2)' : 'rgba(124,58,237,0.08)' }};border:1px solid {{ $package->is_popular ? 'rgba(167,139,250,0.35)' : 'rgba(124,58,237,0.15)' }};">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z" stroke="{{ $package->is_popular ? '#A78BFA' : '#7C3AED' }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16" stroke="{{ $package->is_popular ? '#A78BFA' : '#7C3AED' }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                            <h3 style="font-size:1.2rem;font-weight:800;margin:0 0 6px;color:{{ $package->is_popular ? '#fff' : '#0f172a' }};letter-spacing:-0.01em;">{{ $package->name }}</h3>
                            <div style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:0.1em;color:{{ $package->is_popular ? 'rgba(167,139,250,0.7)' : '#94a3b8' }};margin-bottom:20px;">Development Package</div>

                            {{-- Price --}}
                            <div style="display:flex;align-items:baseline;justify-content:center;gap:4px;">
                                <span style="font-size:3rem;font-weight:900;line-height:1;color:{{ $package->is_popular ? '#A78BFA' : '#7C3AED' }};letter-spacing:-0.03em;">{{ $package->price }}</span>
                                @if($package->suffix)
                                    <span style="font-size:14px;font-weight:500;color:{{ $package->is_popular ? 'rgba(255,255,255,0.5)' : '#94a3b8' }};">{{ $package->suffix }}</span>
                                @endif
                            </div>
                        </div>

                        {{-- Divider --}}
                        <div style="margin:0 32px;height:1px;background:{{ $package->is_popular ? 'rgba(255,255,255,0.08)' : 'rgba(226,232,240,0.8)' }};"></div>

                        {{-- Features list --}}
                        <div style="padding:24px 32px;flex:1;position:relative;z-index:1;">
                            @php
                                $featureList = array_filter(explode("\n", str_replace("\r", "", $package->features)));
                            @endphp
                            <ul style="list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:12px;">
                                @foreach($featureList as $feature)
                                    <li style="display:flex;align-items:flex-start;gap:10px;">
                                        <span style="flex-shrink:0;width:20px;height:20px;border-radius:50%;background:{{ $package->is_popular ? 'rgba(167,139,250,0.2)' : 'rgba(124,58,237,0.08)' }};display:flex;align-items:center;justify-content:center;margin-top:1px;">
                                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="20 6 9 17 4 12" stroke="{{ $package->is_popular ? '#A78BFA' : '#7C3AED' }}" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span style="font-size:14px;line-height:1.5;color:{{ $package->is_popular ? 'rgba(255,255,255,0.8)' : '#475569' }};">{{ trim($feature) }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- CTA Button --}}
                        <div style="padding:24px 32px 32px;position:relative;z-index:1;">
                            <a href="{{ route('frontend.booking', ['package_id' => $package->id]) }}"
                               style="
                                   display:flex;align-items:center;justify-content:center;gap:10px;
                                   width:100%;padding:14px 20px;border-radius:50px;
                                   font-size:0.9rem;font-weight:700;text-decoration:none;letter-spacing:0.02em;
                                   transition:transform 0.2s,box-shadow 0.2s;
                                   {{ $package->is_popular
                                       ? 'background:linear-gradient(135deg,#A78BFA,#7C3AED);color:#fff;box-shadow:0 6px 20px rgba(124,58,237,0.45);'
                                       : 'background:transparent;color:#7C3AED;border:2px solid rgba(124,58,237,0.3);' }}
                               "
                               onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='{{ $package->is_popular ? '0 10px 28px rgba(124,58,237,0.55)' : '0 4px 16px rgba(124,58,237,0.2)' }}'"
                               onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='{{ $package->is_popular ? '0 6px 20px rgba(124,58,237,0.45)' : 'none' }}'">
                                Get Started
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <polyline points="12 5 19 12 12 19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12" style="text-align:center;padding:64px 0;">
                    <div style="display:inline-flex;flex-direction:column;align-items:center;gap:16px;background:#fff;border-radius:20px;padding:48px 56px;box-shadow:0 4px 32px rgba(15,23,42,0.08);border:1px solid rgba(226,232,240,0.9);">
                        <div style="width:64px;height:64px;border-radius:16px;background:rgba(124,58,237,0.08);display:flex;align-items:center;justify-content:center;">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 12V22H4V12" stroke="#7C3AED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22 7H2v5h20V7z" stroke="#7C3AED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 22V7M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7zM12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z" stroke="#7C3AED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h4 style="font-size:1.2rem;font-weight:700;color:#0f172a;margin:0;">No Packages Available Yet</h4>
                        <p style="color:#64748b;margin:0;font-size:0.95rem;">Please <a href="/contact" style="color:#7C3AED;font-weight:600;text-decoration:none;">contact us</a> directly for custom project quotes.</p>
                    </div>
                </div>
            @endforelse
        </div>

        {{-- Bottom CTA strip --}}
        <div style="margin-top:56px;background:linear-gradient(135deg,#1e1b4b,#2e1065);border-radius:20px;padding:44px 48px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:24px;box-shadow:0 12px 48px rgba(124,58,237,0.3);">
            <div style="position:relative;overflow:hidden;">
                <div style="position:absolute;top:-30px;right:-30px;width:150px;height:150px;border-radius:50%;background:rgba(167,139,250,0.15);filter:blur(40px);pointer-events:none;"></div>
                <div style="font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:0.12em;color:rgba(167,139,250,0.7);margin-bottom:8px;">Need something custom?</div>
                <h3 style="font-size:1.5rem;font-weight:800;color:#fff;margin:0;line-height:1.3;">Let's build something <span style="background:linear-gradient(90deg,#A78BFA,#63B3ED);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">tailored for you</span></h3>
            </div>
            <a href="/contact"
               style="display:inline-flex;align-items:center;gap:10px;padding:15px 36px;background:linear-gradient(135deg,#A78BFA,#7C3AED);color:#fff;font-size:0.95rem;font-weight:700;border-radius:50px;text-decoration:none;box-shadow:0 6px 20px rgba(124,58,237,0.5);transition:transform 0.2s,box-shadow 0.2s;flex-shrink:0;"
               onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 10px 28px rgba(124,58,237,0.6)'"
               onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 6px 20px rgba(124,58,237,0.5)'">
                Contact Us
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="5" y1="12" x2="19" y2="12" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <polyline points="12 5 19 12 12 19" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>

    </div>
</section>
{{-- ===================== END PRICING SECTION ===================== --}}

@endsection
