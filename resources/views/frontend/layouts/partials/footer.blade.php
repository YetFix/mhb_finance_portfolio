  <footer class="footer-area style-one">
      <div class="container style-one">
          <div class="footer-top pt-115">
              <div class="row mb-65">
                  <div class="col-xxl-5 col-lg-4 col-md-5">
                      <div class="footer-widget mb-30">
                          <a href="/" class="logo d-block mb-50">
                              <img src="{{ asset('frontend/assets/img/logos/logo_1.png') }}" style="height:80px"
                                  alt="Logo">
                          </a>
                          <a href="tel:01719336566" class="contact-num d-block fw-bold text_secondary mb-18">+880-1719336566</a>
                         
                      </div>
                  </div>
                  <div class="col-xxl-4 col-lg-4 col-md-7 ps-xxl-4">
                      <div class="footer-widget mb-30">
                          <h3 class="footer-widget-title fs-24 text-white mb-20">Quick Links</h3>
                          <ul class="footer-menu style-one list-unstyled mb-0">
                              <li class="d-block fs-xxl-18"><a href="/">Home</a></li>
                              <li class="d-block fs-xxl-18"><a href="#about">About Us</a></li>
                              <li class="d-block fs-xxl-18"><a href="#services">Services</a></li>
                              <li class="d-block fs-xxl-18"><a href="#cases">Case Studies</a></li>
                              <li class="d-block fs-xxl-18"><a href="#blogs">Blog </a></li>
                              <li class="d-block fs-xxl-18"><a href="#contact">Contact</a></li>
                
                          </ul>
                      </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6">
                      <div class="footer-widget mb-30">
                          <h3 class="footer-widget-title fs-24 text-white mb-20">Stay Connected</h3>
                          <p class="text-gray fs-xxl-18 mb-25">Join our newsletter and stay updated on the latest news
                          </p>
                          <form action="{{ route('subscribe') }}" class="newsletter-form style-one position-relative" method="post">
                              @csrf
                              <input type="email" name="email" class="w-100 fs-xxl-18 text-white border-0 round-5 outline-0"
                                  placeholder="Type your email" required>
                              <button type="submit"
                                  class="position-absolute top-0 end-0 h-100 border-0 bg-transparent"><i
                                      class="ri-send-plane-fill"></i></button>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="row ">
                  <div class="col-md-7 pe-xxl-0">
                      <a href="/" class="logo-text text-white reveal-text-left transition">MhbCon</a>
                  </div>
                  <div class="col-xl-4 offset-xxl-1 col-md-5 ps-xxl-4">
                      <p class="text-gray fs-xxl-18 mb-25">MhbCon is a trusted accounting and management consulting firm
                          helping businesses grow with clarity and control.</p>
                      <ul class="social-profile style-one list-unstyled mb-0">
                          <li><a href="https://www.facebook.com/" target="_blank"
                                  class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                      class="ri-facebook-fill"></i></a></li>
                          <li><a href="https://x.com/?lang=en" target="_blank"
                                  class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                      class="ri-twitter-x-line"></i></a></li>
                          <li><a href="https://www.linkedin.com/" target="_blank"
                                  class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                      class="ri-linkedin-fill"></i></a></li>
                          <li><a href="https://www.instagram.com/" target="_blank"
                                  class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                      class="ri-instagram-line"></i></a></li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="footer-bottom">
              <div class="row align-items-center">
                  <div class="col-md-7 pe-md-0 mb-sm-10">
                      <p class="copyright-text fs-xxl-18 text-md-start text-center text-gray mb-0"><i
                              class="ri-copyright-line"></i><span class="text_secondary ms-1">MhbCon</span> is
                          Design and Developed By <a href="https://yetfix.com" target="_blank"
                              class="text_secondary link-hover-white">Yetfix Limited</a></p>
                  </div>
                  <div class="col-md-5">
                      <ul class="footer-bottom-menu list-unstyled text-lg-end text-center mb-0">
                          <li class="fs-xxl-18"><a href="#">Terms And Conditions</a></li>
                          <li class="fs-xxl-18"><a href="#">Privacy Policy</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>
