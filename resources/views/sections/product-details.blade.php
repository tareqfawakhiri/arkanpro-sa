@extends('layout.main')
@section('title', 'Product Details')
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Product Details</h1>
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
                        Product Details
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Project Section Start -->
    <section class="Project-details-section fix section-padding">
        <div class="container">
            <div class="project-details-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-details-items">
                            <div class="details-image">
                                <img src="assets/img/project/details.jpg" alt="img">
                            </div>
                            <div class="row g-4 justify-content-between">
                                <div class="col-lg-7">
                                    <div class="details-content pt-5">
                                        <h3>IT Management</h3>
                                        <p>
                                            Nulla faucibus malesuada. In placerat feugiat eros ac tempor. Integer
                                            euismod massa sapien, et consequat enim laoreet et. Nulla sit amet nisi
                                            dapibus, gravida turpis sit amet, accumsan nisl. Fusce vel semper risus.
                                            Morbi congue eros sagittis, sodales turpis venenatis, iaculis dui. Proin ac
                                            purus sed nibh dapibus neque. scelerisque sed quis ante.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="project-catagory">
                                        <h3>Project Info: </h3>
                                        <ul>
                                            <li>
                                                Client:
                                                <span>Ralph Edwards</span>
                                            </li>
                                            <li>
                                                Category:
                                                <span>IT Management</span>
                                            </li>
                                            <li>
                                                Location:
                                                <span>Landon</span>
                                            </li>
                                            <li>
                                                Share:
                                                <span>
                                                    <a href="#"> <i class="fa-brands fa-facebook-f me-3"></i> </a>
                                                    <a href="#"> <i class="fa-brands fa-instagram me-3"></i> </a>
                                                    <a href="#"> <i class="fa-brands fa-linkedin-in"></i> </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="details-content pt-3">
                                <h3>Our Challenge</h3>
                                <p>
                                    Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci
                                    malesuada sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum
                                    mauris id nunc molestie, ac tincidunt erat gravida. Nullam dui libero, mollis ac
                                    quam et, venenatis tincidunt quam. Proin nec volutpat ligula, id porttitor augue.
                                    Proin id volutpat massa. Vivamus tincidunt nunc justo, ac aliquam ex molestie id.
                                </p>
                            </div>
                            <div class="row g-4 pt-5">
                                <div class="col-lg-3 col-md-6">
                                    <ul class="list">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Branding and design Identity
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Web site Marketing Solutions
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <ul class="list">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Branding and design Identity
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Web site Marketing Solutions
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <ul class="list">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Branding and design Identity
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Web site Marketing Solutions
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details-content pt-5">
                                <h3>The Result of Project</h3>
                                <p>
                                    Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci
                                    malesuada sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum
                                    mauris id nunc molestie, ac tincidunt erat gravida. Nullam dui libero, mollis ac
                                    quam et, venenatis tincidunt quam. Proin nec volutpat ligula, id porttitor augue.
                                    Proin id volutpat massa. Vivamus tincidunt nunc justo, ac aliquam ex molestie id.
                                </p>
                            </div>
                            <div class="row g-4 pt-5">
                                <div class="col-lg-6 col-md-6">
                                    <div class="thumb">
                                        <img src="assets/img/project/details-2.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="thumb">
                                        <img src="assets/img/project/details-3.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="preview-area">
                            <div class="preview-item">
                                <img src="assets/img/project/p-1.png" alt="img">
                                <div class="content">
                                    <h3>Preview</h3>
                                    <p>Analytic Solutions</p>
                                </div>
                            </div>
                            <div class="preview-item">
                                <div class="content text-right">
                                    <h3>Next</h3>
                                    <p>Software Development</p>
                                </div>
                                <img src="assets/img/project/p-2.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
