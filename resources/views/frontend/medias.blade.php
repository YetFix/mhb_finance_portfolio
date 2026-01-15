@extends('frontend.layouts.master')

@section('content')
 
	<div class="main-breadcrumb-area" style="background-image : url('front/img/breadcrumb_image_.jpg');">
        <div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="pagetitle">
						Media
					</h1>
					<ul class="pages">
						<li>
							<a href="/">
								Home
							</a>
						</li>
						<li class="active">
							<a href="/medias">
								Media
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<section class="media-page">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-8">
					<div class="section-heading">
						<h2 class="title">
							Entertainment
						</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
                			</div>
		</div>
		<div class="container mt-5 pt-3">
			<div class="row">
               @foreach($ftps as $ftp)
				<div class="col-lg-3 col-md-6">
					<a href="{{ $ftp->link }}" class="single-service media d-block" target="_blank">
						<div class="left-area">
							<img src="{{ asset('storage/'.$ftp->logo) }}" style="width:200px; height: 150px;" alt="{{ $ftp->name }}">
						</div>
						<div class="right-area">
							<h4 class="title">
								{{ $ftp->name }}
							</h4>
						</div>
					</a>
                </div>
			  @endforeach
            </div>
		</div>
	</section>

@endsection