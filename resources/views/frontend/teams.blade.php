@extends('frontend.layouts.master')
@section('content')
<div class="main-breadcrumb-area" style="background-image : url({{ asset('front/img/breadcrumb_image_.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="pagetitle">
                        Team
                    </h1>
                    <ul class="pages">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="active">
                            <a href="/teams">
                                Teams
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
                @foreach ($teams as $team)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-price">
                            <h4 class="name">
                                {{ $team->name }}
                            </h4>
                            <div class="mbps">
                                <img src="{{ asset('storage/'.$team->image) }}" alt="{{ $team->name }}" style="width:200px;
                                 height: 100%; object-fit: cover;">
                            </div>
                            <div class="designation text-center p-3">
                                {{ $team->designation }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</section>
@endsection
