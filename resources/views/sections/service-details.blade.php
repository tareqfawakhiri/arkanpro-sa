@extends('layout.main')
@section('title', 'Service Details')
@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="border-shape">
            <img src="assets/img/element.png" alt="shape-img">
        </div>
        <div class="line-shape">
            <img src="assets/img/line-element.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Services Details</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        Services Details
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Service Details Section Start -->
    <section class="service-details-section fix section-padding">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="row g-4">
                    <div class="col-12 col-lg-4 order-2 order-md-1">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>All Services</h3>
                                </div>
                                <div class="widget-categories">
                                    <ul>
                                        <li><a href="service-details.html">Database Security <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="service-details.html">IT Consultancy <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li class="active"><a href="service-details.html">App Development <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="service-details.html">UI/UX Design <i
                                                    class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="service-details.html">Cyber Security <i
                                                    class="fa-solid fa-arrow-right-long"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Opening Hours</h3>
                                </div>
                                <div class="opening-category">
                                    <ul>
                                        <li><i class="fa-regular fa-clock"></i>Mon - Sat: 10.00 AM - 4.00 PM</li>
                                        <li><i class="fa-regular fa-clock"></i>Sun: 09.00 AM - 4.00 PM</li>
                                        <li><i class="fa-regular fa-clock"></i>Friday: Closed</li>
                                        <li><i class="fa-regular fa-clock"></i>Emergency: 24 hours</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-image bg-cover"
                                style="background-image: url('assets/img/service/post.jpg');">
                                <div class="contact-text">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <h4>Need Help? Call Here</h4>
                                    <h5>
                                        <a href="tel:+2085550112">+208-555-0112</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 order-1 order-md-2">
                        <div class="service-details-items">
                            <div class="details-image">
                                <img src="assets/img/service/details-1.jpg" alt="img">
                            </div>
                            <div class="details-content">
                                <h3>IT Consultancy</h3>
                                <p class="mt-3">
                                    The is ipsum dolor sit amet consectetur adipiscing elit. Fusce is eleifend porta
                                    arcu In hac habitasse the platea thelorem turpoi dictumst. In lacus libero faucibus
                                    malesuada sagittis placerat eros sed istincidunt augue ac ante rutrum sed the is
                                    sodales augue consequat.
                                </p>
                                <p class="mt-3">
                                    lacus sed pretium pretium justo. Integer is vitae venenatis lorem. Maecenas lacinia
                                    turpis the in nunc quam hendrerit scelerisque at finibus enim sagittis. Aliquam erat
                                    is volutpat nam nec purus at is orci volutpat semper vel id turpis In a malesuada
                                    arcu ac hendrerit.
                                </p>
                                <div class="details-video-items">
                                    <div class="video-thumb">
                                        <img src="assets/img/service/details-video.jpg" alt="img">
                                        <div class="video-box">
                                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                                class="video-btn ripple popup-video">
                                                <i class="fa-solid fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>Benefits With Our Service</h4>
                                        <p> Fusce is eleifend porta arcu In hac <br> habitasse the platea thelorem</p>
                                        <ul class="list">
                                            <li>
                                                <i class="fa-regular fa-circle-check"></i>
                                                Branding and design Identity
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-circle-check"></i>
                                                Web site Marketing Solutions
                                            </li>
                                            <li>
                                                <i class="fa-regular fa-circle-check"></i>
                                                unlimited Download Data
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p>
                                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and
                                    dolor in reprehenderit.
                                </p>
                                <div class="image-area">
                                    <div class="row g-4">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="thumb">
                                                <img src="assets/img/service/details-2.jpg" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="thumb">
                                                <img src="assets/img/service/details-3.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Most Comment Question?</h3>
                                <p class="mt-3">
                                    The is ipsum dolor sit amet consectetur adipiscing elit. Fusce is eleifend porta
                                    arcu In hac habitasse the platea thelorem turpoi dictumst. In lacus libero faucibus
                                    malesuada.
                                </p>
                            </div>
                            <div class="faq-content style-3">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq1"
                                                    aria-expanded="true" aria-controls="faq1">
                                                    Where should I incorporate my business?
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq2"
                                                    aria-expanded="false" aria-controls="faq2">
                                                    How long should a business plan be?
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                    What is included in your services?
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq4"
                                                    aria-expanded="false" aria-controls="faq4">
                                                    What type of company is measured?
                                                </button>
                                            </h5>
                                            <div id="faq4" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
