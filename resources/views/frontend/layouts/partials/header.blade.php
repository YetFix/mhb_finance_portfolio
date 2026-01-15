<div class="navbar-area style-two position-relative z-2" id="navbar">
    <div class="container style-two">
        <div class="navbar-wrapper d-flex justify-content-between align-items-center">
            <a href="/" class="navbar-brand">
                <img src="{{ asset('frontend/assets/img/logos/logo_1.png') }}" style="height:60px" alt="Logo">
            </a>
            <div class="menu-area me-auto">
                <div class="overlay"></div>
                <nav class="menu">
                    <div class="menu-mobile-header">
                        <button type="button" class="menu-mobile-arrow bg-transparent border-0"><i
                                class="ri-arrow-left-s-line"></i></button>
                        <div class="menu-mobile-title"></div>
                        <button type="button" class="menu-mobile-close bg-transparent border-0"><i
                                class="ri-close-line"></i></button>
                    </div>
                    <ul class="menu-section p-0 mb-0 lh-1">
                        <li class="menu-item-has-children">
                            <a href="/" class="active">Home<i class="ri-arrow-down-s-line1"></i></a>   
                        </li>
						 <li class="menu-item-has-children">
                            <a href="#about">About Us<i class="ri-arrow-down-s-line1"></i></a>   
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#services">Services<i class="ri-arrow-down-s-line1"></i></a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#cases">Case Studies<i class="ri-arrow-down-s-line1"></i></a>
                        </li>
						<li class="menu-item-has-children1">
                            <a href="#blogs">Blogs<i class="ri-arrow-down-s-line1"></i></a>
                        </li>
						<li class="menu-item-has-children1">
                            <a href="#teams">Teams<i class="ri-arrow-down-s-line1"></i></a>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="other-options d-flex flex-wrap align-items-center justify-content-end">
                <div class="option-item d-lg-block d-none">
                    <a href="#contact" class="btn style-one d-inline-flex align-items-center">
                        <span
                            class="btn-icon-one d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon"></span>
                        <span
                            class="btn-text fw-bold d-flex flex-column align-items-center justify-content-center transition">Get
                            A Free Consultation</span>
                        <span
                            class="btn-icon-two d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}" alt="Icon"></span>
                    </a>
                </div>
                <div class="option-item position-relative d-flex align-items-center">
                    <div class="mobile-options position-relative d-lg-none me-3">
                        <button class="dropdown-toggle  text-center bg-transparent border-0 p-0 transition"
                            type="button" data-bs-toggle="dropdown" aria-expanded="true">
                            <i class="ri-more-fill"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-centered mobile-option-list top-1 border-0"
                            data-bs-popper="static">
                            <a href="#contact" class="btn style-one d-inline-flex align-items-center">
                                <span
                                    class="btn-icon-one d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                        src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}"
                                        alt="Icon"></span>
                                <span
                                    class="btn-text fw-bold d-flex flex-column align-items-center justify-content-center transition">Get
                                    A Free Consultation</span>
                                <span
                                    class="btn-icon-two d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                        src="{{ asset('frontend/assets/img/icons/right-arrow.svg') }}"
                                        alt="Icon"></span>
                            </a>
                        </div>
                    </div>
                    <button
                        class="search-btn bg_primary border-0 rounded-circle d-flex flex-column align-items-center justify-content-center dropdown-toggle transition"
                        type="button" data-bs-toggle="dropdown" aria-expanded="true">
                        <i class="ri-search-line"></i>
                        <i class="ri-close-line"></i>
                    </button>
                    <div class="search-dropdown dropdown-menu dropdown-menu-right top-1 border-0"
                        data-bs-popper="static">
                        <form class="search-popup position-relative" action="#">
                            <input type="search" class="form-control text-para" placeholder="Search Here">
                            <button type="submit"
                                class="position-absolute top-0 end-0 h-100 border-0 bg-transparent d-flex flex-column align-items-center justify-content-center"><i
                                    class="ri-search-2-line"></i></button>
                        </form>
                    </div>
                </div>
                <div class="option-item d-lg-none">
                    <button type="button" class="menu-mobile-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
