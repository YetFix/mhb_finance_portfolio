@extends('frontend.layouts.master')
@section('content')
    <div class="main-breadcrumb-area" style="background-image : url({{ asset('front/img/breadcrumb_image_.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="pagetitle">
                        Package
                    </h1>
                    <ul class="pages">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="active">
                            <a href="/packages">
                                Package
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="pricingPlan-section packag-page">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($packages as $package)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-price">
                            <h4 class="name">
                                {{ $package->name }}
                            </h4>
                            <div class="mbps">
                                {{ $package->bandwidth }} <span>Mbps</span>
                            </div>
                            <div class="list">
                                <li>
                                    <p href="mailto:Internet - 10 Mbps">Internet - {{ $package->bandwidth }} Mbps</p>
                                </li>
                                <li>
                                    <p href="mailto:Youtube - 40 Mbps">Youtube - 40 Mbps</p>
                                </li>
                                <li>
                                    <p href="mailto:Facebook - 40 Mbps">Facebook - 40 Mbps</p>
                                </li>
                                <li>
                                    <p href="mailto:BDIX / NIX - 50 Mbps">BDIX / NIX - 50 Mbps</p>
                                </li>
                                <li>
                                    <p href="mailto:Webserver - 40 Mbps">Webserver - 40 Mbps</p>
                                </li>
                                <li>
                                    <p href="mailto:Gaming Server - 30 Mbps">Gaming Server - 30 Mbps</p>
                                </li>
                                <li>
                                    <p href="mailto:Streaming Server - N/A">Streaming Server - N/A</p>
                                </li>
                            </div>
                            <div class="bottom-area">
                                <div class="price-area">
                                    <div class="price-top-area">
                                        <p class="price showprice">৳{{ $package->price }}</p>
                                    </div>
                                    <p class="time">
                                        Monthly
                                    </p>
                                </div>
                                <a href="/contact" class="mybtn1">Get Start</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
