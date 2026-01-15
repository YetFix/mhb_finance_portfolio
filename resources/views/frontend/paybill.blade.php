@extends('frontend.layouts.master')
@section('content')
        <section class="top-position1 py-0">
            <div class="page-title-section bg-img cover-background left-overlay-dark" data-overlay-dark="7" data-background="{{asset('frontend/img/bg/bg-09.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Pay Bill</h1>
                            <div class="breadcrumb">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/paybill">Pay Bill</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR TEAM
        ================================================== -->
        <section>
            <div class="container">
                <div class="mb-7 title-style text-center">
                    <div class="position-relative d-inline-block title-shape">
                        <div class="shape1 bg-primary position-absolute border-radius-10"></div>
                        <div class="shape2 bg-primary position-absolute border-radius-10"></div>
                    </div>
                    <span class="text-secondary font-weight-600 ms-3">Pay Internet Bill with the bKash</span>
                    <h2 class="mb-0 h1">bKash Paybill Process</h2>
                </div>
                <div class="row mt-n1-9">
                    <p>
                        Pay your internet bills easily with bKash, without any charges! Any bKash user can enjoy the offer.
                    </p>
                    <p>How to Pay Internet Bill from the bKash App:</p>
                    <img src="{{asset('frontend/img/paybill.jpg')}}" alt="paybill">
                </div>
            </div>
        </section>

        <!-- CALL TO ACTION
        ================================================== -->
        <section class="parallax cover-background" data-overlay-dark="4" data-background="{{asset('frontend/img/bg/bg-09.jpg')}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 text-center">
                        <h2 class="h1 text-white mb-2-3">All Your Streaming, in One Place</h2>
                        <h3 class="h1 text-white mb-6">Call us (+880)9611678064</h3>
                        <a href="/contact" class="btn-style01">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
@endsection