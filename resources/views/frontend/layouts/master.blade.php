<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Link of CSS files -->
        @include('frontend.layouts.helpers.css')
        
        <title>MhbCon – Accounting & Management Consulting </title>
        <link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/logos/logo_1.png') }}">
    </head>
    <body>

       <!--  Preloader Start -->
        <div class="preloader-area" id="preloader">
            <div class="spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!--  Preloader End -->


        <!-- Custom Cursor -->
        <div class="cursor">
            <span class="cursor-text d-flex flex-column align-items-center justify-content-center rounded-circle bg-white text-title fs-14 fw-semibold"></span>
        </div>
        <div class="cursor-inner"></div>

        <div id="smooth-wrapper">
            <div id="smooth-content">

                <div class="bg-albastor position-relative z-1">
                    <!-- Navbar Area Start -->
                    @include('frontend.layouts.partials.header')
                    <!-- Navbar Area End -->

                   @yield('content')
                </div>

                <!-- Footer Section Start -->
                @include('frontend.layouts.partials.footer')
                <!-- Footer End -->

            </div>
        </div>
        <!-- Back to Top -->
        <div id="progress-wrap" class="progress-wrap style-one">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
              <path id="progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>

        <!-- Link of JS files -->
       @include('frontend.layouts.helpers.scripts')
</html>