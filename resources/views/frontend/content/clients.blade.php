@extends('frontend.layouts.app')
@section('content')
<style>
    .st:hover {
  background-color: #7547d3;
}
.xs-single-causes {
    background-color: #fff;
    -webkit-box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 3px 19px 0 rgb(147 42 42);
    margin-bottom: 30px;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
</style>
     
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img4">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Our Team</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="index.html">Home</a>
                        </li>
                       <li>Our Team</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

    <main class="xs-main">

        <section class="xs-content-section-padding">
            <div class="container">
                <div class="row">
                    @foreach ($brands as $brand)
                        <div class="col-md-6 col-lg-3">
                            <div class="xs-single-causes text-center p-5 st"
                                style="border: 1px solid #ff914d;border-radius: 10px;    margin: 25px 0px;">
                                <a href="#">
                                    <img src="{{ asset('/setting/banner/' . $brand->logo) }}" style="height: 80px;"
                                    alt="">
                                {{-- <div class="xs-causes-footer">
                                    <h2 class="color-light-red">{{ $brand->title }}</h2>
                                </div> --}}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
