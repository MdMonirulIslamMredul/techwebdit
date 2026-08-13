@extends('frontend.layouts.app')

@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img1" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 100px 0 60px;">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title text-white font-weight-bold mb-2">{{ Str::limit($blog->title, 50) }}</h1>
        <ul class="d-flex justify-content-center align-items-center list-unstyled gap-2 text-white-50">
            <li><a class="text-white text-decoration-none" href="{{ route('frontend.index') }}">Home</a></li>
            <li><a class="text-white text-decoration-none" href="{{ route('frontend.blogs') }}">Blogs</a></li>
            <li class="text-primary font-weight-bold">Details</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Details Section Start -->
<div class="rs-inner-blog pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8 pr-35 md-pr-15">
                <div class="blog-deatils bg-white p-4 p-md-5 rounded shadow-sm" style="border: 1px solid #e2e8f0;">
                    @if($blog->banner)
                        <div class="bs-img mb-35">
                            <img src="{{ asset('setting/blog/' . $blog->banner) }}" alt="{{ $blog->title }}" class="w-100 rounded" style="max-height: 400px; object-fit: cover;">
                        </div>
                    @elseif($blog->image1)
                        <div class="bs-img mb-35">
                            <img src="{{ asset('setting/blog/' . $blog->image1) }}" alt="{{ $blog->title }}" class="w-100 rounded" style="max-height: 400px; object-fit: cover;">
                        </div>
                    @endif

                    <div class="blog-full">
                        <ul class="single-post-meta list-unstyled d-flex align-items-center mb-4 text-muted border-bottom pb-3">
                            <li class="mr-4"><i class="fa fa-user text-primary mr-2"></i> TechWebDIT Team</li>
                            <li class="mr-4"><i class="fa fa-calendar text-primary mr-2"></i> {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Recent' }}</li>
                            <li><i class="fa fa-tags text-primary mr-2"></i> Software & Tech</li>
                        </ul>

                        <h2 class="title font-weight-bold mb-4" style="font-size: 28px; line-height: 1.3; color: #0f172a;">
                            {{ $blog->title }}
                        </h2>

                        @if($blog->short_details)
                            <div class="lead font-weight-normal text-dark mb-4 p-3 rounded" style="background: #f8fafc; border-left: 4px solid #2563eb; font-size: 16px;">
                                {{ $blog->short_details }}
                            </div>
                        @endif

                        @if($blog->details1)
                            <div class="blog-desc mb-4 text-secondary" style="line-height: 1.8; font-size: 15px;">
                                {!! $blog->details1 !!}
                            </div>
                        @endif

                        @if($blog->image2)
                            <div class="blog-img mb-4">
                                <img src="{{ asset('setting/blog/' . $blog->image2) }}" alt="Additional Detail Image" class="w-100 rounded" style="max-height: 350px; object-fit: cover;">
                            </div>
                        @endif

                        @if($blog->details2)
                            <div class="blog-desc mb-4 text-secondary" style="line-height: 1.8; font-size: 15px;">
                                {!! $blog->details2 !!}
                            </div>
                        @endif

                        <div class="border-top pt-4 mt-5 d-flex justify-content-between align-items-center">
                            <a href="{{ route('frontend.blogs') }}" class="btn btn-outline-secondary rounded-pill">
                                <i class="fa fa-arrow-left mr-2"></i> Back to Blogs
                            </a>
                            <div class="share-post">
                                <strong class="mr-2 text-dark">Share Article:</strong>
                                <a href="#" class="btn btn-sm btn-light rounded-circle text-primary"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="btn btn-sm btn-light rounded-circle text-info"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="btn btn-sm btn-light rounded-circle text-danger"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12 md-mt-50">
                <div class="widget-area">
                    <!-- Recent Posts Widget -->
                    <div class="recent-posts mb-50 bg-white p-4 rounded shadow-sm" style="border: 1px solid #e2e8f0;">
                        <h3 class="widget-title font-weight-bold mb-4 pb-2 border-bottom" style="font-size: 20px;">Recent Articles</h3>
                        @foreach($recentBlogs as $recent)
                            <div class="recent-post-widget d-flex align-items-center mb-3 pb-3 border-bottom">
                                @if($recent->image1)
                                    <div class="post-img mr-3" style="width: 70px; height: 70px; flex-shrink: 0;">
                                        <a href="{{ route('frontend.blogdetails', $recent->id) }}">
                                            <img src="{{ asset('setting/blog/' . $recent->image1) }}" alt="{{ $recent->title }}" class="rounded" style="width: 70px; height: 70px; object-fit: cover;">
                                        </a>
                                    </div>
                                @endif
                                <div class="post-desc">
                                    <h5 class="mb-1" style="font-size: 14px; font-weight: 600; line-height: 1.3;">
                                        <a href="{{ route('frontend.blogdetails', $recent->id) }}" class="text-dark text-decoration-none">
                                            {{ Str::limit($recent->title, 45) }}
                                        </a>
                                    </h5>
                                    <span class="text-muted" style="font-size: 12px;"><i class="fa fa-calendar mr-1"></i> {{ $recent->created_at ? $recent->created_at->format('M d, Y') : '' }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Contact CTA Widget -->
                    <div class="cta-widget p-4 rounded text-white text-center" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
                        <h4 class="text-white font-weight-bold mb-3">Need Custom Software Solutions?</h4>
                        <p class="text-white-50 mb-4" style="font-size: 14px;">Our engineering team is ready to build your web & mobile applications.</p>
                        <a href="/contact" class="btn btn-primary rounded-pill px-4 py-2 font-weight-bold">Contact TechWebDIT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Details Section End -->
@endsection
