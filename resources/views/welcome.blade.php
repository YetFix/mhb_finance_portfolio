@extends('frontend.layouts.master')
@section('content')
   <!-- Hero Section Start -->
                    <div class="hero-area style-two position-relative z-1 overflow-hidden bg_primary">
                        <img src="{{ asset('frontend/assets/img/hero/diagram-2.png') }}" alt="Shape" class="hero-shape-one position-absolute start-0 z-n1 move-top">
                        <div class="container style-two">
                            <div class="row align-items-end">
                                <div class="col-xxl-5 col-xl-6 col-lg-7">
                                    <div class="hero-content moveContent">
                                        <h1 class="fw-bold text-white d-flex title-anim" >Expert <b class="fw-bold text_secondary">Accounting & Tax Solutions</b> For Your Business Growth</h1>
                                        <div class="hero-stat-wrapper d-flex flex-wrap">
                                            <div class="stat-card style-one position-relative z-1 round-20 me-xxl-2" data-cue="slideInUp" data-delay="450" data-duration="800">
                                                <h3 class="text-white fw-semibold lh-1 mb-0">5+</h3>
                                                <span class="text-gray fs-xxl-18 d-block mb-22">Years Of Expertise</span>
                                               
                                                <p class="text-gray fs-xxl-18 mb-0">85+ businesses are trusting us.</p>
                                            </div>
                                            <div class="hero-para position-relative" data-cue="slideInRight" data-delay="550" data-duration="800">
                                                <p class="fs-xxl-18 text-gray mb-45">MhbCon provides tailored accounting, tax planning, and audit services to help businesses save money, stay compliant, and achieve financial success.</p>
                                                <a href="#services" class="btn style-two d-inline-flex align-items-center">
                                                    <span class="btn-icon-one d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon"></span>
                                                    <span class="btn-text fw-bold d-flex flex-column align-items-center justify-content-center transition">Explore Services</span>
                                                    <span class="btn-icon-two d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-5 offset-xxl-2 col-xl-5 offset-xl-1 col-lg-5 ps-xxl-0">
                                    <div class="row align-items-end">
                                        <div class="col-xl-8 col-md-8 mb-sm-20">
                                            <ul class="contact-info list-unstyled d-flex flex-column mb-0" data-cue="slideInUp" data-delay="400" data-duration="800">
                                                <li class="fs-24"><a href="tel:01719336566" class="contact-num fw-bold text_secondary link-hover-secondary d-inline-block">+880-1719336566</a></li>
                                                <li class="fs-xxl-18 d-inline-block"><a href="#" class="contact-mail fw-semibold text-white hover-text-secondary d-inline-block">business<span class="text_secondary">@</span>mhbCon.com</a></li>
                                                <li class="d-inline-block text-gray fs-xxl-18">Sun–Thr, 9:00am–6:00pm</li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-4 col-md-4">
                                            <ul class="social-profile style-five d-flex flex-column align-items-md-end align-items-start list-unstyled mb-0" data-cue="slideInUp" data-delay="460" data-duration="800">
                                                <li class="fs-xxl-18"><a href="https://www.facebook.com/profile.php?id=61582127813299" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle">Facebook</a></li>
                                                <li class="fs-xxl-18"><a href="#" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle">Twitter</a></li>
                                                <li class="fs-xxl-18"><a href="#" target="_blank" class="d-flex flex-column align-items-center justify-content-center rounded-circle">Linkedin</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-bg img-container position-absolute top-0 end-0 z-n1" data-cue="anim-right" data-delay="200" data-duration="1000">
                            <img src="{{ asset('frontend/assets/img/hero/hero-bg-5.jpg') }}" alt="Image" class="w-100 h-100 object-fit-cover d-lg-block d-none">
                        </div>
                    </div>
                    <!-- Hero Section End -->

                  

                    <!-- About Section Start -->
                    <div class="about-area style-two pt-115 pb-90" id="about">
                        <div class="container style-one">
                            <h2 class="section-title style-two fw-semibold text-center reveal-text-bottom mb-45">We are a trusted Accounting, Tax, Audit, and Business Consulting firm committed to delivering accuracy, transparency, and strategic insight. With a focus on client success, we help businesses of all sizes maintain financial health, ensure compliance, and drive growth through data-backed decision-making.</h2>
                            <div class="row align-items-stretch">
                                <div class="col-xl-6 mb-30">
                                    <div class="about-content bg-white round-20" data-cue="anim-left" data-duration="800">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about-card style-one round-10 bg-albastor mb-25">
                                                    <h3 class="fs-24 mb-12">Our Mission</h3>
                                                    <p class="fs-xxl-18 mb-0">Our mission is to provide accurate, transparent, and strategic financial solutions that drive lasting business success.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about-card style-one round-10 bg_secondary mb-25">
                                                    <h3 class="fs-24 mb-12">Our Vision</h3>
                                                    <p class="fs-xxl-18 text-title mb-0">To be the most trusted partner for transformative financial solutions, driving sustainable success for businesses worldwide.</p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="features-wrap d-flex flex-wrap align-items-center mb-25">
                                                    <div class="feature-img round-15">
                                                        <img src="{{ asset('frontend/assets/img/about/about-img-2.jpg') }}" alt="Image" class="round-15">
                                                    </div>
                                                    <div class="feature-info">
                                                        <h3 class="fs-24">Trust Builders</h3>
                                                        <ul class="feature-list style-one list-unstyled">
                                                            <li class="fs-xxl-18 position-relative"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Certified Accountants & Tax Advisors</li>
                                                            <li class="fs-xxl-18 position-relative"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Tech-Driven Financial Reporting</li>
                                                            <li class="fs-xxl-18 position-relative"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Transparent & Scalable Pricing</li>
                                                            <li class="fs-xxl-18 position-relative"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">20+ Years Of Industry Experience</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-30">
                                    <div class="about-img-wrap position-relative z-1 h-100 overflow-hidden bg_primary">
                                        <h3 class="text-white fs-24 fw-bold mb-32">A growing team of 50+ professionals, including CPAs, tax specialists, and audit experts.</h3>
                                        <img src="{{ asset('frontend/assets/img/about/about-img-4.png') }}" alt="Image" class="about-img move-left-two">
                                        <img src="{{ asset('frontend/assets/img/about/logo-text.png') }}" alt="Image" class="logo-text position-absolute bottom-0 end-0 z-n1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Section End -->

                    <!-- Service Section Start -->
                    <div class="container style-one pb-90" id="services">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                <h2 class="section-title style-two fw-semibold text-center reveal-text-bottom mb-35">
                                    Tailored Accounting, Tax, Audit & Consulting <span class="position-relative z-1">Services</span> For Your Business Growth
                                </h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xxl-3 col-lg-4 col-md-6">
                                <div class="service-card style-two position-relative z-1 round-20 mb-30" data-cue="anim-left" data-duration="500">
                                    <img src="{{ asset('frontend/assets/img/services/account-maintenance.svg') }}" alt="Icon">
                                    <h3 class="fs-24"><a href="#" class="text-title link-hover-primary transition">Accounting Services</a></h3>
                                    <ul class="feature-list style-one list-unstyled">
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Bookkeeping</li>
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Financial Reporting</li>
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Payroll Management</li>
                                    </ul>
                                    <a href="#" class="btn style-one d-inline-flex align-items-center">
                                        <span class="btn-icon-one d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                        <span class="btn-text fw-bold d-flex flex-column align-items-center justify-content-center transition">Discover More</span>
                                        <span class="btn-icon-two d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6">
                               <div class="service-card style-two position-relative z-1 round-20 mb-30" data-cue="anim-top" data-duration="500" data-delay="200">
                                    <img src="{{ asset('frontend/assets/img/services/online-tax.svg') }}" alt="Icon">
                                    <h3 class="fs-24"><a href="#" class="text-title link-hover-primary transition">Tax Services</a></h3>
                                    <ul class="feature-list style-one list-unstyled">
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Corporate Tax Filing</li>
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">VAT & Sales Tax Support</li>
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Tax Advisory & Planning</li>
                                    </ul>
                                    <a href="#" class="btn style-one d-inline-flex align-items-center">
                                        <span class="btn-icon-one d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                        <span class="btn-text fw-bold d-flex flex-column align-items-center justify-content-center transition">Discover more</span>
                                        <span class="btn-icon-two d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6">
                                <div class="service-card style-two position-relative z-1 round-20 mb-30" data-cue="anim-top" data-duration="500" data-delay="300">
                                    <img src="{{ asset('frontend/assets/img/services/audit.svg') }}" alt="Icon">
                                    <h3 class="fs-24"><a href="#" class="text-title link-hover-primary transition">Audit & Assurance</a></h3>
                                    <ul class="feature-list style-one list-unstyled">
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Internal & External Audits</li>
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Risk Assessments</li>
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Compliance Reviews</li>
                                    </ul>
                                    <a href="#" class="btn style-one d-inline-flex align-items-center">
                                        <span class="btn-icon-one d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                        <span class="btn-text fw-bold d-flex flex-column align-items-center justify-content-center transition">Discover more</span>
                                        <span class="btn-icon-two d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6">
                                <div class="service-card style-two position-relative z-1 round-20 mb-30" data-cue="anim-left" data-duration="500" data-delay="400">
                                    <img src="{{ asset('frontend/assets/img/services/consultant.svg') }}" alt="Icon">
                                    <h3 class="fs-24"><a href="#" class="text-title link-hover-primary transition">Finance Consulting</a></h3>
                                    <ul class="feature-list style-one list-unstyled">
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Financial Strategy</li>
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Startup Advisory</li>
                                        <li class="position-relative fs-xxl-18"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Budgeting & Forecasting</li>
                                    </ul>
                                    <a href="#" class="btn style-one d-inline-flex align-items-center">
                                        <span class="btn-icon-one d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                        <span class="btn-text fw-bold d-flex flex-column align-items-center justify-content-center transition">Discover more</span>
                                        <span class="btn-icon-two d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Section End -->

                    <!-- Industry Category Start -->
                    <div class="industry-area style-two position-relative overflow-hidden z-1">
                        <div class="industry-bg img-container position-absolute overflow-hidden z-1 top-0 start-0 w-100 h-100">
                            <img src="{{ asset('frontend/assets/img/industry-bg-1.jpg') }}" alt="Image" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="container style-one pt-120 position-relative z-1">
                            <div class="row">
                                <div class="col-xl-10 offset-xl-1">
                                    <h2 class="section-title style-two fw-semibold text-center text-white reveal-text-bottom mb-0 mx-xxl-5 px-xxl-5">
                                        <span class="position-relative z-1">Industries We Serve</span> Tailored Financial Solutions for Your Sector’s Unique Needs
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid position-relative z-1 px-xxl-4">
                            <div class="industry-card-wrap style-one d-flex flex-wrap justify-content-center">
                                <div class="industry-category-card style-one position-relative z-1 d-flex flex-column align-items-start round-20 mb-30" data-cue="slideInLeft">
                                    <img src="{{ asset('frontend/assets/img/industry-icon/healthcare-2.svg') }}" alt="Icon">
                                    <h3 class="fs-18 font-primary fw-bold text-white link-hover-white transition">Healthcare</h3>
                                    <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                </div>
                               <div class="industry-category-card style-one position-relative z-1 d-flex flex-column align-items-start round-20 mb-30" data-cue="slideInLeft">
                                    <img src="{{ asset('frontend/assets/img/industry-icon/technology-2.svg') }}" alt="Icon">
                                    <h3 class="fs-18 font-primary fw-bold text-white link-hover-white transition">Technology</h3>
                                    <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                </div>
                               <div class="industry-category-card style-one position-relative z-1 d-flex flex-column align-items-start round-20 mb-30" data-cue="slideInLeft">
                                    <img src="{{ asset('frontend/assets/img/industry-icon/manufacturing-2.svg') }}" alt="Icon">
                                    <h3 class="fs-18 font-primary fw-bold text-white link-hover-white transition">Manufacturing</h3>
                                    <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                </div>
                               <div class="industry-category-card style-one position-relative z-1 d-flex flex-column align-items-start round-20 mb-30" data-cue="slideInLeft">
                                    <img src="{{ asset('frontend/assets/img/industry-icon/shopping-store-2.svg') }}" alt="Icon">
                                    <h3 class="fs-18 font-primary fw-bold text-white link-hover-white transition">Retail</h3>
                                    <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                </div>
                               <div class="industry-category-card style-one position-relative z-1 d-flex flex-column align-items-start round-20 mb-30" data-cue="slideInLeft">
                                    <img src="{{ asset('frontend/assets/img/industry-icon/real-estate-2.svg') }}" alt="Icon">
                                    <h3 class="fs-18 font-primary fw-bold text-white link-hover-white transition">Real Estate</h3>
                                    <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                </div>
                               <div class="industry-category-card style-one position-relative z-1 d-flex flex-column align-items-start round-20 mb-30" data-cue="slideInLeft">
                                    <img src="{{ asset('frontend/assets/img/industry-icon/charity-2.svg') }}" alt="Icon">
                                    <h3 class="fs-18 font-primary fw-bold text-white link-hover-white transition">Non Profits</h3>
                                    <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                </div>
                               <div class="industry-category-card style-one position-relative z-1 d-flex flex-column align-items-start round-20 mb-30" data-cue="slideInLeft">
                                    <img src="{{ asset('frontend/assets/img/industry-icon/start-up-2.svg') }}" alt="Icon">
                                    <h3 class="fs-18 font-primary fw-bold text-white link-hover-white transition">Startup</h3>
                                    <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                </div>
                               <div class="industry-category-card style-one position-relative z-1 d-flex flex-column align-items-start round-20 mb-30" data-cue="slideInLeft">
                                    <img src="{{ asset('frontend/assets/img/industry-icon/ecommerce-2.svg') }}" alt="Icon">
                                    <h3 class="fs-18 font-primary fw-bold text-white link-hover-white transition">e-Commerce</h3>
                                    <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="funfact-area style-one">
                        <div class="container-fluid px-xxl-5">
                            <div class="funfact-wrap style-one d-flex flex-wrap justify-content-between">
                                <div class="funfact-card style-one mb-25" data-cue="slideInLeft" data-delay="100">
                                    <h4 class="text-title fw-semibold">100+</h4>
                                    <span class="fs-xxl-18 text-title d-block">Tax Returns Filed Successfully</span>
                                </div>
                                <div class="funfact-card style-one mb-25" data-cue="slideInLeft" data-delay="100">
                                    <h4 class="text-title fw-semibold">98%</h4>
                                    <span class="fs-xxl-18 text-title d-block">Client Retention Rate</span>
                                </div>
                                <div class="funfact-card style-one mb-25" data-cue="slideInLeft" data-delay="100">
                                    <h4 class="text-title fw-semibold">99%</h4>
                                    <span class="fs-xxl-18 text-title d-block">On-Time Project Delivery</span>
                                </div>
                                <div class="funfact-card style-one mb-25" data-cue="slideInLeft" data-delay="100">
                                    <h4 class="text-title fw-semibold">24/7</h4>
                                    <span class="fs-xxl-18 text-title d-block">Client Support Availability</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Industry Category End -->

                    <!-- Case Study Section Start -->
                    <div class="case-area style-two pt-120 pb-90" id="cases">
                        <div class="container style-one">
                            <div class="row">
                                <div class="col-xl-10 offset-xl-1">
                                    <h2 class="section-title style-two fw-semibold text-center reveal-text-bottom mb-35 px-xxl-5 mx-xxl-5">
                                    How MhbCon <span class="position-relative z-1">Helped Clients</span> Overcome Challenges and Achieve Remarkable Results
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid px-xxl-5">
                            <div class="row">
                                <div class="col-lg-5 pe-xxl-0">
                                    <div class="case-card style-two mb-45">
                                        <div class="case-img img-container position-relative hover-text-target overflow-hidden round-20" data-cursor-text="View Case" data-cue="anim-left" data-duration="800" data-delay="100">
                                            <img src="{{ asset('frontend/assets/img/case-study/case-5.jpg') }}" alt="Image" class="round-20">
                                            <a class="case-category d-inline-block position-absolute round-oval transition" href="#">Healthcare</a>
                                            <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                        </div>
                                        <h3 class="fs-24 mb-0"><a href="#" class="text-title link-hover-primary transition">Revenue Cycle Optimization For Regional Hospital</a></h3>
                                    </div>
                                    <div class="case-card style-four mb-30">
                                       <div class="case-img img-container position-relative hover-text-target overflow-hidden round-20" data-cursor-text="View Case" data-cue="anim-left" data-duration="800" data-delay="200">
                                            <img src="{{ asset('frontend/assets/img/case-study/case-6.jpg') }}" alt="Image" class="round-20">
                                            <a class="case-category d-inline-block position-absolute round-oval transition" href="#">Technology</a>
                                            <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                        </div>
                                        <h3 class="fs-24 mb-0"><a href="#" class="text-title link-hover-primary transition">R&D Tax Credit Recovery for SaaS Startup</a></h3>
                                    </div>
                                    <div class="view-all-case mb-30"  data-cue="slideInUp" data-delay="300">
                                        <a href="#" class="btn style-one d-inline-flex align-items-center">
                                            <span class="btn-icon-one d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                            <span class="btn-text fw-bold d-flex flex-column align-items-center justify-content-center transition">View All Case Studies</span>
                                            <span class="btn-icon-two d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <div class="case-card style-five mb-45">
                                        <div class="case-img img-container position-relative hover-text-target overflow-hidden round-20" data-cursor-text="View Case" data-cue="anim-top" data-duration="800" data-delay="200">
                                            <img src="{{ asset('frontend/assets/img/case-study/case-7.jpg') }}" alt="Image" class="round-20">
                                            <a class="case-category d-inline-block position-absolute round-oval transition" href="#">Manufacturing</a>
                                            <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                        </div>
                                        <h3 class="fs-24 mb-0"><a href="#" class="text-title link-hover-primary transition">Cost Accounting Transformation</a></h3>
                                    </div>
                                    <div class="case-card style-six mb-45">
                                        <div class="case-img img-container position-relative hover-text-target overflow-hidden round-20" data-cursor-text="View Case" data-cue="anim-right" data-duration="800" data-delay="300">
                                            <img src="{{ asset('frontend/assets/img/case-study/case-8.jpg') }}" alt="Image" class="round-20">
                                            <a class="case-category d-inline-block position-absolute round-oval transition" href="#">e-Commerce</a>
                                            <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                        </div>
                                        <h3 class="fs-24 mb-0"><a href="#" class="text-title link-hover-primary transition">Multi-State Sales Tax Compliance</a></h3>
                                    </div>
                                    <div class="case-card style-five mb-30">
                                        <div class="case-img img-container position-relative hover-text-target overflow-hidden round-20" data-cursor-text="View Case" data-cue="anim-top" data-duration="800" data-delay="400">
                                            <img src="{{ asset('frontend/assets/img/case-study/case-9.jpg') }}" alt="Image" class="round-20">
                                            <a class="case-category d-inline-block position-absolute round-oval transition" href="#">Non-profit</a>
                                            <a href="#" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                        </div>
                                        <h3 class="fs-24 mb-0"><a href="#" class="text-title link-hover-primary transition">Grant Compliance & Audit Defense</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Case Study Section End -->

                    <!-- Why Choose Us Section Start -->
                    <div class="container style-one">
                        <div class="wh-box style-one bg_primary round-20 pt-115" data-cue="slideInUp" data-delay="300">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <h2 class="section-title style-two text-white fw-bold mb-35 px-3">Empowering Your Business With Reliable, Transparent, And Scalable Financial Solutions</h2>
                                </div>
                            </div>
                            <div class="row gx-0 position-relative align-items-end">
                                <div class="col-lg-6 mb-md-30">
                                    <div class="wh-bg img-container position-relative overflow-hidden">
                                        <img src="{{ asset('frontend/assets/img/about/wh-img-5.jpg') }}" alt="Image" class="w-100 h-100 object-fit-cover">
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex flex-column justify-content-between">
                                    <div class="wh-content position-relative">
                                        <p class="text-gray fs-xxl-18 mb-15">Eerox is not just an accounting firm, we are your trusted financial partner. With a focus on personalized service, we help businesses make confident, growth-driven decisions.</p>
                                        <h3 class="fs-24 text-white mb-15">What Sets Us Apart</h3>
                                        <ul class="feature-list style-one list-unstyled mb-25">
                                            <li class="position-relative fs-xxl-18 text-gray"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Certified Experts</li>
                                            <li class="position-relative fs-xxl-18 text-gray"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Transparent Pricing</li>
                                            <li class="position-relative fs-xxl-18 text-gray"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Strict Data Security</li>
                                            <li class="position-relative fs-xxl-18 text-gray"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Real Time Financial Reporting</li>
                                            <li class="position-relative fs-xxl-18 text-gray"><img src="{{ asset('frontend/assets/img/icons/check.svg') }}" alt="Icon" class="position-absolute start-0">Dedicated Client Support</li>
                                        </ul>
                                        <span class="vertical-text font-secondary fw-bold position-absolute">Why Choose MhbCon</span>
                                    </div>
                                    <div class="wh-quote-box bg_secondary">
                                        <h4 class="fs-24">"MhbCon saved us TK805K in taxes and answered every question within hours—worth every penny!"</h4>
                                        <span class="position-relative text-title">Carl Norrell</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Why Choose Us Section End -->
                    
                  


                    <!-- Contact Section Start -->
                    <div class="contact-area style-one pt-120 pb-120" id="contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-md-5 mb-sm-30">
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <h2 class="section-title style-two fw-semibold reveal-text-bottom mb-45">
                                            <span class="position-relative z-1">Get In Touch</span> For A Free Consultation
                                        </h2>
                                        <div class="contact-address style-one d-flex flex-wrap align-items-center me-xxl-5 w-xxl-50 w-xl-75">
                                            <span class="contact-icon d-flex flex-column align-items-center justify-content-center rounded-circle"><i class="ri-map-pin-line"></i></span>
                                            <p class="fs-xxl-18 text-title mb-0">150,Motijheel C/A Nahar Manshion,Dhaka-1000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-7 ps-xxl-4">
                                    <form action="{{ route('send') }}" class="contact-form style-one" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-45">
                                                    <input type="text" name="name" class="w-100 bg-transparent fs-xxl-18 text-title outline-0" placeholder="Name*" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-45">
                                                    <input type="text" name="phone" class="w-100 bg-transparent fs-xxl-18 text-title outline-0" placeholder="phone*" required>
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <div class="form-group mb-45">
                                                    <input type="text" name="service" class="w-100 bg-transparent fs-xxl-18 text-title outline-0" placeholder="Service Name*" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-45">
                                                    <input type="text" name="address" class="w-100 bg-transparent fs-xxl-18 text-title outline-0" placeholder="Your Address*" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb-22">
                                                    <textarea name="message" class="w-100 bg-transparent fs-xxl-18 text-title outline-0 resize-0" placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn style-two d-flex align-items-center" data-cue="slideInLeft" data-delay="300">
                                                    <span class="btn-icon-one d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                                    <span class="btn-text fw-bold d-flex flex-column align-items-center justify-content-center transition">Send Message</span>
                                                    <span class="btn-icon-two d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon" class="d-block mx-auto"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Section End -->
@endsection
