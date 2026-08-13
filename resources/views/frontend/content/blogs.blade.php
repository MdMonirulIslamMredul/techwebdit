@extends('frontend.layouts.app')

@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img1" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 100px 0 60px;">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title text-white font-weight-bold mb-2">Our Latest Tech Insights & Blog</h1>
        <ul class="d-flex justify-content-center align-items-center list-unstyled gap-2 text-white-50">
            <li><a class="text-white text-decoration-none" href="{{ route('frontend.index') }}">Home</a></li>
            <li class="text-primary font-weight-bold">Blogs</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section Start -->
<div class="rs-blog main-home pt-120 pb-120 md-pt-80 md-pb-80 gray-color">
    <div class="container">
        <div class="sec-title text-center mb-60">
            <span class="sub-text text-primary font-weight-bold text-uppercase">Tech & Innovation</span>
            <h2 class="title mb-0">Explore Our Latest Insights & Industry Trends</h2>
        </div>

        <div class="row">
            @forelse($blogs as $blog)
                <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                    <div class="blog-item bg-white rounded shadow-sm overflow-hidden d-flex flex-column transition-all" style="border: 1px solid #e2e8f0; width: 100%;">
                        <div class="image-part position-relative" style="max-height: 220px; overflow: hidden;">
                            @if($blog->image1)
                                <img src="{{ asset('setting/blog/' . $blog->image1) }}" alt="{{ $blog->title }}" class="w-100 object-fit-cover" style="height: 220px; transition: transform 0.3s ease;">
                            @else
                                <img src="{{ asset('frontend/assets/images/blog/main-home/1.jpg') }}" alt="{{ $blog->title }}" class="w-100 object-fit-cover" style="height: 220px;">
                            @endif
                            <span class="badge badge-primary position-absolute" style="top: 15px; left: 15px; background: #2563eb; padding: 6px 12px; font-size: 12px;">Tech</span>
                        </div>
                        <div class="blog-content p-4 d-flex flex-column flex-grow-1">
                            <ul class="blog-meta list-unstyled d-flex align-items-center mb-3 text-muted" style="font-size: 13px;">
                                <li><i class="fa fa-calendar mr-2 text-primary"></i> {{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Recent' }}</li>
                                <li class="ml-auto"><i class="fa fa-user mr-1 text-primary"></i> TechWebDIT Team</li>
                            </ul>
                            <h4 class="title mb-3" style="font-size: 18px; font-weight: 700; line-height: 1.4;">
                                <a href="{{ route('frontend.blogdetails', $blog->id) }}" class="text-dark text-decoration-none hover-primary">
                                    {{ $blog->title }}
                                </a>
                            </h4>
                            <p class="desc text-muted mb-4 flex-grow-1" style="font-size: 14px; line-height: 1.6;">
                                {{ Str::limit($blog->short_details, 110) }}
                            </p>
                            <div class="btn-part mt-auto">
                                <a href="{{ route('frontend.blogdetails', $blog->id) }}" class="btn btn-outline-primary btn-sm font-weight-bold rounded-pill px-4">
                                    Read Article <i class="fa fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="p-5 bg-white rounded shadow-sm">
                        <i class="fa fa-newspaper-o fa-3x text-muted mb-3"></i>
                        <h4 class="text-muted">No Blog Articles Published Yet</h4>
                        <p class="text-muted">Check back soon for new software development and technology insights!</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
<!-- Blog Section End -->
@endsection
