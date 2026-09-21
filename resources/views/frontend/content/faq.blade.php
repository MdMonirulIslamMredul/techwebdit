@extends('frontend.layouts.app')

@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img1" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 100px 0 60px;">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title text-white font-weight-bold mb-2">Frequently Asked Questions (FAQ)</h1>
        <ul class="d-flex justify-content-center align-items-center list-unstyled gap-2 text-white-50">
            <li><a class="text-white text-decoration-none" href="{{ route('frontend.index') }}">Home</a></li>
            <li class="text-primary font-weight-bold">FAQs</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- FAQ Section Start -->
<div class="rs-faq main-home pt-120 pb-120 md-pt-80 md-pb-80 gray-color">
    <div class="container">
        <div class="sec-title text-center mb-60">
            <span class="sub-text text-primary font-weight-bold text-uppercase">Help & Support</span>
            <h2 class="title mb-3">Got Questions? We Have Answers</h2>
            <p class="desc text-muted mx-auto" style="max-width: 650px;">
                Find answers to common questions about our software development process, technologies, pricing, and project delivery timelines.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="faqAccordion">
                    @forelse($faqs as $index => $faq)
                        <div class="card border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <div class="card-header bg-white p-0 border-0" id="heading{{ $faq->id }}">
                                <h2 class="mb-0">
                                    <button class="btn btn-link text-left w-100 p-4 font-weight-bold text-dark d-flex justify-content-between align-items-center text-decoration-none {{ $index === 0 ? '' : 'collapsed' }}"
                                            type="button" data-toggle="collapse" data-target="#collapse{{ $faq->id }}"
                                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $faq->id }}"
                                            style="font-size: 17px; line-height: 1.4;">
                                        <span><i class="fa fa-question-circle text-primary mr-3"></i>{{ $faq->question }}</span>
                                        <i class="fa fa-chevron-down text-muted transition-transform"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse{{ $faq->id }}" class="collapse {{ $index === 0 ? 'show' : '' }}"
                                 aria-labelledby="heading{{ $faq->id }}" data-parent="#faqAccordion">
                                <div class="card-body p-4 pt-0 text-secondary border-top bg-light" style="font-size: 15px; line-height: 1.7;">
                                    {!! nl2br(e($faq->answer)) !!}
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-5 bg-white rounded shadow-sm">
                            <i class="fa fa-question-circle-o fa-3x text-muted mb-3"></i>
                            <h4 class="text-muted">No FAQ Items Available</h4>
                            <p class="text-muted">Feel free to reach out to us directly if you have any questions!</p>
                        </div>
                    @endforelse
                </div>

                <!-- Still Have Questions CTA -->
                <div class="mt-5 p-4 rounded text-center bg-white shadow-sm border text-dark">
                    <h4 class="font-weight-bold mb-2">Still Have Questions?</h4>
                    <p class="text-muted mb-3">Can't find the answer you're looking for? Reach out to our expert team for a personalized consultation.</p>
                    <a href="/contact" class="btn btn-primary font-weight-bold px-4 py-2 rounded-pill">Contact TechWebDIT Support</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Section End -->
@endsection
