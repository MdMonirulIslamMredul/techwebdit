@extends('frontend.layouts.app')

@section('content')

{{-- ============================================================
     Our Clients Section
     ============================================================ --}}

{{-- Page-scoped styles — hardware-accelerated only, no transition:all --}}
@push('after-styles')
<style>
    /* Client logo card */
    .client-card {
        background-color: #fff;
        border: 1px solid #ff914d;
        border-radius: 12px;
        margin: 20px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 140px;
        padding: 24px 20px;
        /* Hardware-accelerated transitions only */
        transition: transform 260ms cubic-bezier(0.4, 0, 0.2, 1),
                    box-shadow 260ms cubic-bezier(0.4, 0, 0.2, 1),
                    border-color 200ms cubic-bezier(0.4, 0, 0.2, 1),
                    background-color 200ms cubic-bezier(0.4, 0, 0.2, 1);
        will-change: transform, box-shadow;
    }

    .client-card:hover {
        transform: translateY(-6px) scale(1.03);
        box-shadow: 0 16px 40px rgba(117, 71, 211, 0.18);
        border-color: #7547d3;
        background-color: #faf7ff;
    }

    /* Logo image — grayscale resting, color on hover */
    .client-card .client-logo {
        max-height: 90px;
        width: auto;
        max-width: 100%;
        object-fit: contain;
        filter: grayscale(30%);
        transition: filter 280ms cubic-bezier(0.4, 0, 0.2, 1),
                    transform 280ms cubic-bezier(0.4, 0, 0.2, 1);
        will-change: filter, transform;
    }

    .client-card:hover .client-logo {
        filter: grayscale(0%);
        transform: scale(1.05);
    }

    /* Card link */
    .client-card-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        text-decoration: none;
    }

    /* Section heading underline accent */
    .section-title-accent {
        display: inline-block;
        position: relative;
        padding-bottom: 12px;
        margin-bottom: 40px;
    }

    .section-title-accent::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #ff914d, #7547d3);
        border-radius: 3px;
    }
</style>
@endpush

{{-- Breadcrumbs --}}
<nav class="rs-breadcrumbs img4" aria-label="Breadcrumb">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Our Clients</h1>
        <ol class="breadcrumb justify-content-center" style="background:transparent; padding:0;">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Our Clients</li>
        </ol>
    </div>
</nav>
{{-- Breadcrumbs End --}}

<main class="xs-main" id="main-content">
    <section class="xs-content-section-padding py-5" aria-labelledby="clients-heading">
        <div class="container">

            <div class="text-center">
                <h2 id="clients-heading" class="section-title-accent">Trusted by Industry Leaders</h2>
            </div>

            @if($brands->isEmpty())
                <div class="text-center py-5">
                    <p class="text-muted">No clients to display yet.</p>
                </div>
            @else
                <div class="row justify-content-center">
                    @foreach ($brands as $index => $brand)
                        <div class="col-6 col-md-4 col-lg-3 reveal"
                             style="transition-delay: {{ min($index * 60, 360) }}ms;">
                            <div class="client-card">
                                <a href="#"
                                   class="client-card-link"
                                   aria-label="{{ $brand->title ?? 'Client logo' }}">
                                    <img
                                        src="{{ asset('/setting/banner/' . $brand->logo) }}"
                                        class="client-logo"
                                        alt="{{ $brand->title ?? 'Client logo' }}"
                                        loading="lazy"
                                        width="160"
                                        height="80">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </section>
</main>

@endsection
