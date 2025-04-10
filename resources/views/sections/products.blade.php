@extends('layout.main')
@section('title', 'Products')
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Products</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        Products
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Project Section Start -->
    <section class="project-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/img/project/01.jpg" alt="project-img">
                            <div class="project-content style2">
                                <p>Technology</p>
                                <h4>
                                    <a href="product-details">Platform Integration</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/img/project/02.jpg" alt="project-img">
                            <div class="project-content style2">
                                <p>Security</p>
                                <h4>
                                    <a href="product-details">Network Security</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/img/project/03.jpg" alt="project-img">
                            <div class="project-content style2">
                                <p>Solution</p>
                                <h4>
                                    <a href="product-details">Web Development</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/img/project/04.jpg" alt="project-img">
                            <div class="project-content style2">
                                <p>Technology</p>
                                <h4>
                                    <a href="product-details">IT Management</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/img/project/10.jpg" alt="project-img">
                            <div class="project-content style2">
                                <p>Technology</p>
                                <h4>
                                    <a href="product-details">Design Solutions</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="assets/img/project/11.jpg" alt="project-img">
                            <div class="project-content style2">
                                <p>Technology</p>
                                <h4>
                                    <a href="product-details">Software Development</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
