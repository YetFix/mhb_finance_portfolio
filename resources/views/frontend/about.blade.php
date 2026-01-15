@extends('frontend.layouts.master')
@section('content')
    <div class="main-breadcrumb-area" style="background-image : url({{ asset('front/img/breadcrumb_image_.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="pagetitle">
                        About
                    </h1>
                    <ul class="pages">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="active">
                            <a href="/about#">
                                About
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h4 class="title">
                            Shanta Network Stands for Providing Quality Boardband Internet Services Using Latest
                            Technologies.
                        </h4>
                        <p class="text">
                        <p><b>Shanta Network</b> is one of the leading Internet Service Provider (ISP) in Chuknagar Bazar,
                            Dumuria Upazila, Khulna , Bangladesh.Shanta Network has started its operation in the year 2025
                            with the commitment of quality internet service at an affordable price.</p>
                        </p>
                        <ul class="list">
                            <li>
                                <p>Home Internet Service</p>
                            </li>
                            <li>
                                <p>Corporate Internet Service</p>
                            </li>
                            <li>
                                <p>Shared Internet Bandwidth</p>
                            </li>
                            <li>
                                <p>Dedicated Internet Bandwidth</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="right-images">
                        <img src="{{ asset('front/img/in.jpg') }}" alt="Internet Service Provider">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="counter-section" style="background-image : url({{ asset('front/img/16114739431050239109.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6" >
                    <div class="single-counter" style="height: 250px;important">
                        <div class="icon">
                            <img src="{{ asset('front/img/1610030683846809482.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>5000+</h4>
                            <p>Positive Review</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" >
                    <div class="single-counter" style="height: 250px;important">
                        <div class="icon">
                            <img src="{{ asset('front/img/16100306921155612689.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>45</h4>
                            <p>Team member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="height: 200px;important">
                    <div class="single-counter" style="height: 250px;important">
                        <div class="icon">
                            <img src="{{ asset('front/img/16100307021292642445.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>3</h4>
                            <p>Branch</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="height: 200px;important">
                    <div class="single-counter" style="height: 250px;important">
                        <div class="icon">
                            <img src="{{ asset('front/img/16100307111162234491.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>10000+</h4>
                            <p>Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="offer-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-heading">
                        <h2 class="title">
                            Offer We Provide
                        </h2>
                        <p class="text">
                            We offer a wide range of internet packages to suit your needs, from basic home internet to high-speed corporate solutions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <ul class="offer-list">
                        <li>
                            <div class="content">
                                <p>Pay 6 Months Bill and get<b> 50%</b> Discount on OTC.</p>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Pay 3 Months Bill and Get <b>25%</b> Discount on OTC.</p>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>One-Time Installation charge (<b>OTC</b>) is taka 2000 only .</p>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Pay 12 Months Bill and get a new Skynet Connection completely <b>Free</b>.</p>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                For Super Ultra pack, One-Time Installation charge (OTC) is 2999 Taka.
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Security Deposit of 1000 Taka (<b>Refundable</b>) has to be paid during Signup.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="offer-image">
                        <img class="w-80" src="{{ asset('front/img/in1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
