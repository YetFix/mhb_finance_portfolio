@extends('frontend.layouts.master')
@section('content')
    <!--Main Breadcrumb Area Start -->
    <div class="main-breadcrumb-area" style="background-image : url({{ asset('front/img/breadcrumb_image_.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="pagetitle">
                        Service
                    </h1>
                    <ul class="pages">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="active">
                            <a href="/services">
                                Service
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Main Breadcrumb Area End -->

    <!-- Service Area Start -->
    <section class="service-area service-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('services') }}" class="single-service">
                        <div class="left-area">
                            <img class="w-80" src="{{ asset('front/img/16092338262050278680.png') }}" alt="internet">
                        </div>
                        <div class="right-area">
                            <h4 class="title">
                                Internet Connectivity
                            </h4>
                            <p class="text">
                                We provide high-speed internet with ensuring you&#039;re always connected,
                            whether you&#039;re gaming, or working.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('services') }}" class="single-service">
                        <div class="left-area">
                            <img class="w-80" src="{{ asset('front/img/16092338491726308350.png') }}" alt="">
                        </div>
                        <div class="right-area">
                            <h4 class="title">
                                CCTV &amp; IP Surveillance
                            </h4>
                            <p class="text">
                                We offer comprehensive CCTV and IP surveillance solutions, ensuring your property is always protected and monitored.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('services') }}" class="single-service">
                        <div class="left-area">
                            <img class="w-80" src="{{ asset('front/img/1609233896696084804.png') }}" alt="lan">
                        </div>
                        <div class="right-area">
                            <h4 class="title">
                                LAN Solution
                            </h4>
                            <p class="text">
                                We provide LAN solutions for businesses, ensuring seamless connectivity and efficient network management.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->
@endsection
