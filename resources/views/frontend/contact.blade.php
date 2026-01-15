@extends('frontend.layouts.master')
@section('content')
    <!--Main Breadcrumb Area Start -->
    <div class="main-breadcrumb-area" style="background-image : url({{ asset('front/img/breadcrumb_image_.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="pagetitle">
                        Contact
                    </h1>
                    <ul class="pages">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="active">
                            <a href="contact">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Main Breadcrumb Area End -->

    <!-- Contact Us Area Start -->
    <section class="contact-us">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7">
                    <div class="left-area">
                        <div class="contact-form">
                            <form action="{{ route('send') }}" method="POST">
                                @csrf
                                <ul>
                                    <li>
                                        <input type="text" name="name" value="{{ old('name') }}" class="input-field" placeholder="Name *" required>
                                        @if($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </li>
                                   
                                    <li>
                                        <input type="number" name="phone" value="{{ old('phone') }}" class="input-field"
                                            placeholder="Phone Number *" required>
                                            @if($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                         @endif
                                    </li>
                                     <li>
                                        <input type="text" name="address" value="{{ old('address') }}" class="input-field"
                                            placeholder="Your Address *" required>
                                            @if($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                         @endif
                                    </li>
                                    <li>
                                        <textarea name="message" value="{{ old('message') }}" class="input-field textarea" placeholder="Your Message *" required></textarea>
                                        @if($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </li>
                                </ul>
                                <button class="submit-btn mybtn1" type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="right-area">
                        <div class="contact-info">
                            <div class="left ">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Email
                                </h4>
                                <a href="mailto:nahidinternetservice@gmail.com">
                                    rasheduil217793@gmail.com
                                </a>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="left ">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Phone
                                </h4>
                                <a href="tel:8801713907336">8801713907336</a>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="left ">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Location
                                </h4>
                                Head Office:  Chuknagar, Dumuria, Khulna, Bangladesh.
                            </div>
                        </div>

                        <div class="social-links">
                            <h4 class="title">Find us here :</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End-->
@endsection
