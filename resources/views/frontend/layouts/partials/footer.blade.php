<!-- Footer Area Start -->
<footer class="footer" id="footer"
    style="background-image: url({{ asset('front/img/shanta.gif') }});background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-widget about-widget">
                    <div class="footer-logo">
                        <a href="/">
                            <img src="{{ asset('front/img/shanta_Network_logo.jpg') }}" alt="Shanta network"
                                style="width:100px;border-radius:50%">
                        </a>
                    </div>
                    <div class="text">
                        <p>
                            Shanta Network
                        </p>
                    </div>

                </div>
                <div class="footer-widget  footer-newsletter-widget">
                    <h4 class="title">
                        Newsletter
                    </h4>
                    <div class="newsletter-form-area">
                        <form action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Email Address" required>
                            <button type="submit">
                                <i class="far fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="footer-widget address-widget">
                    <h4 class="title">
                        Sitemap
                    </h4>
                    <ul class="about-info">
                        <li><a href="#">Teams</a></li>
                        <li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                        <li><a href="/privacy-policy">Privacy &amp; Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="footer-widget address-widget">
                    <h4 class="title">
                        Address
                    </h4>
                    <ul class="about-info">
                        <li>
                            <p>
                                <i class="fas fa-globe"></i>
                                Chuknagar Bazar, Dumuria Upazila, Khulna , Bangladesh.
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-phone"></i>
                                01901167070 , 01911907337
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="far fa-envelope"></i>
                                shantanetwork2021@gmail.com
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="footer-widget  footer-newsletter-widget">
                    <div class="social-links">
                        <h4 class="title">
                            Connect with us on social media :
                        </h4>
                        <div class="fotter-social-links">
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
                               
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
<section class="copy">
    <div class="copy-bg" style="background-color:#black">
        <div class="container">
            <div class="row align-items-center text-white">
                <!-- Center Section: Copyright -->
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="content text-white">
                        <p>Copyright © 2025. All Rights Reserved By Shanta Network</p>
                    </div>
                </div>
                <div class="position-absolute end-0 pe-5">
                    <div class="content d-flex justify-content-end align-items-center" style="margin-top: -17px;">
                        <span>Design & Developed by &nbsp;</span>
                        <a href="https://yetfix.com" target="_blank">
                            <span style="color:#2BABE4">Yetfix Limited</span>
                            <img src="{{ asset('front/img/yetfix.png') }}" alt="Company Logo"
                                style="height: 30px; margin-left: 5px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Area End -->
