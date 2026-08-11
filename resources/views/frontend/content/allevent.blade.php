@extends('frontend.layouts.app')

@section('content')

{{-- ============================================================
     All Events / Portfolio Section
     ============================================================ --}}

{{-- Page-scoped styles — hardware-accelerated only, no transition:all --}}
@push('after-styles')
<style>
    /* Event card */
    .event-card {
        background-color: #fff;
        border: 1px solid #ff914d;
        border-radius: 12px;
        margin: 20px 0;
        overflow: hidden;
        /* Hardware-accelerated transitions only */
        transition: transform 260ms cubic-bezier(0.4, 0, 0.2, 1),
                    box-shadow 260ms cubic-bezier(0.4, 0, 0.2, 1),
                    border-color 200ms cubic-bezier(0.4, 0, 0.2, 1);
        will-change: transform, box-shadow;
    }

    .event-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(117, 71, 211, 0.18);
        border-color: #7547d3;
    }

    /* Iframe container — responsive aspect ratio */
    .event-iframe-wrap {
        position: relative;
        width: 100%;
        padding-top: 75%; /* 4:3 aspect ratio */
        overflow: hidden;
        border-radius: 8px;
    }

    .event-iframe-wrap iframe {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border: none;
        /* Fade in smoothly */
        opacity: 0;
        transition: opacity 380ms cubic-bezier(0.4, 0, 0.2, 1);
    }

    .event-iframe-wrap iframe.loaded {
        opacity: 1;
    }

    /* Card link overlay */
    .event-card-link {
        display: block;
        padding: 16px;
        text-decoration: none;
        color: inherit;
    }

    .event-card-link:hover {
        text-decoration: none;
        color: inherit;
    }
</style>
@endpush

{{-- Breadcrumbs --}}
<nav class="rs-breadcrumbs img4" aria-label="Breadcrumb">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Our Events</h1>
        <ol class="breadcrumb justify-content-center" style="background:transparent; padding:0;">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Our Events</li>
        </ol>
    </div>
</nav>
{{-- Breadcrumbs End --}}

<main class="xs-main" id="main-content">
    <section class="xs-content-section-padding py-5" aria-labelledby="events-heading">
        <div class="container">

            <h2 id="events-heading" class="sr-only">All Events</h2>

            @if($brands->isEmpty())
                <div class="text-center py-5">
                    <p class="text-muted">No events found.</p>
                </div>
            @else
                <div class="row">
                    @foreach ($brands as $index => $brand)
                        <div class="col-md-6 col-lg-4 reveal"
                             style="transition-delay: {{ min($index * 60, 300) }}ms;">
                            <div class="event-card">
                                <a href="{{ $brand->link }}"
                                   class="event-card-link"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   aria-label="View event">
                                    <div class="event-iframe-wrap">
                                        <iframe
                                            src="{{ $brand->link }}"
                                            title="Event preview"
                                            loading="lazy"
                                            onload="this.classList.add('loaded')">
                                        </iframe>
                                    </div>
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
