@extends('frontend.layouts.app')
@section('content')
  <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img1">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">{{ $page->title }}</h1>
                    <ul>
                        <li title="Techwebd It">
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>{{ $page->title }}</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- About Section Start -->
               <!-- slider-area -->
    <section class="banner">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    {!! $page->description !!}
                </div>

            </div>
        </div>
    </section>
    <!-- slider-area-end -->
            <!-- About Section End -->

         
@endsection
