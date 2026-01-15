@extends('frontend.layouts.master')
@section('content')
    <!--Main Breadcrumb Area Start -->
    <div class="main-breadcrumb-area" style="background-image : url({{ asset('front/speed.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="pagetitle">
                        Speed Test
                    </h1>
                    <ul class="pages">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('speed') }}">
                                Speed Test
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Main Breadcrumb Area End -->
    <!-- Speed Test Start -->
    <section class="contact-us">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div style="text-align:right;">
                        <div style="min-height:360px;">
                            <div style="width:100%;height:0;padding-bottom:50%;position:relative;">
                                <iframe
                                        style="border:none;position:absolute;top:0;left:0;width:100%;height:100%;min-height:360px;border:none;overflow:hidden !important;"
                                        src="https://openspeedtest.com/Get-widget.php">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Speed Test End-->
@endsection
