@extends('layout.main')
@section('title', 'Blog Details')
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Blog Details</h1>
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
                        Blog Details
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- News Standard Section Start -->
    <section class="news-standard fix section-padding">
        <div class="container">
            <div class="news-details-area">
                <div class="row g-5">
                    <div class="col-12 col-lg-8">
                        <div class="blog-post-details">
                            <div class="single-blog-post">
                                <div class="post-featured-thumb bg-cover"
                                     style="background-image: url('assets/img/news/post-4.jpg');"></div>
                                <div class="post-content">
                                    <ul class="post-list d-flex align-items-center">
                                        <li>
                                            <i class="fa-regular fa-user"></i>
                                            By Admin
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            18 Dec, 2024
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-tag"></i>
                                            IT Services
                                        </li>
                                    </ul>
                                    <h3>Tackling the Changes of Retail Industry</h3>
                                    <p class="mb-3">
                                        Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis
                                        aute irure and dolor in reprehenderit.
                                    </p>
                                    <p class="mb-3">
                                        The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta
                                        arcu In hac habitasse the is platea augue thelorem turpoi dictumst. In lacus
                                        libero faucibus at malesuada sagittis placerat eros sed istincidunt augue ac
                                        ante rutrum sed the is sodales augue consequat.
                                    </p>
                                    <p>
                                        Nulla facilisi. Vestibulum tristique sem in eros eleifend imperdiet. Donec quis
                                        convallis neque. In id lacus pulvinar lacus, eget vulputate lectus. Ut viverra
                                        bibendum lorem, at tempus nibh mattis in. Sed a massa eget lacus consequat
                                        auctor.
                                    </p>
                                    <div class="hilight-text mt-4 mb-4">
                                        <p>Pellentesque sollicitudin congue dolor non aliquam. Morbi volutpat, nisi vel
                                            ultricies urnacondimentum, sapien neque
                                            lobortis tortor, quis efficitur mi ipsum eu metus. Praesent eleifend orci
                                            sit
                                            amet
                                            est vehicula.</p>
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 20.3698H7.71428L2.57139 30.5546H10.2857L15.4286 20.3698V5.09247H0V20.3698Z"
                                                fill="#3C72FC"/>
                                            <path
                                                d="M20.5703 5.09247V20.3698H28.2846L23.1417 30.5546H30.856L35.9989 20.3698V5.09247H20.5703Z"
                                                fill="#3C72FC"/>
                                        </svg>
                                    </div>
                                    <p class="mt-4 mb-5">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam
                                        in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula
                                        consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis
                                        imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu.
                                        Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet.
                                        Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam
                                        condimentum, vel euismod erat placerat. In iaculis arcu eros.
                                    </p>
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="details-image">
                                                <img src="assets/img/news/post-5.jpg" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="details-image">
                                                <img src="assets/img/news/post-6.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>

                                    <p class="pt-5">
                                        Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis
                                        aute irure and dolor in reprehenderit.Consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim
                                        veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in
                                        reprehenderit.
                                    </p>
                                </div>
                            </div>
                            <div class="row tag-share-wrap mt-4 mb-5">
                                <div class="col-lg-8 col-12">
                                    <div class="tagcloud">
                                        <a href="#">News</a>
                                        <a href="#">business</a>
                                        <a href="#">marketing</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                    <div class="social-share">
                                        <span class="me-3">Share:</span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-area">
                                <div class="comments-heading">
                                    <h3>02 Comments</h3>
                                </div>
                                <div class="blog-single-comment d-flex gap-4 pt-4 pb-5">
                                    <div class="image">
                                        <img src="assets/img/news/comment.png" alt="image">
                                    </div>
                                    <div class="content">
                                        <div
                                            class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="con">
                                                <h5><a href="#">Albert Flores</a></h5>
                                                <span>March 20, 2024 at 2:37 pm</span>
                                            </div>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mt-30 mb-4">Neque porro est qui dolorem ipsum quia quaed inventor
                                            veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed
                                            sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                                <div class="blog-single-comment d-flex gap-4 pt-5 pb-5">
                                    <div class="image">
                                        <img src="assets/img/news/comment-2.png" alt="image">
                                    </div>
                                    <div class="content">
                                        <div
                                            class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="con">
                                                <h5><a href="#">Alex Flores</a></h5>
                                                <span>March 20, 2024 at 2:37 pm</span>
                                            </div>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mt-30 mb-4">Neque porro est qui dolorem ipsum quia quaed inventor
                                            veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed
                                            sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form-wrap pt-5">
                                <h3>Leave a comments</h3>
                                <form action="#" id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email2" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <textarea name="message" id="message"
                                                          placeholder="Write Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="theme-btn ">
                                                post comment<i class="fa-solid fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Search here">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul>
                                        <li><a href="#">Database Security <span>(08)</span></a></li>
                                        <li><a href="#">IT Consultancy <span>(11)</span></a></li>
                                        <li class="active"><a href="#">App
                                                Development <span>(12)</span></a></li>
                                        <li><a href="#">UI/UX Design <span>(18)</span></a></li>
                                        <li><a href="#">Cyber Security <span>(07)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Recent Post</h3>
                                </div>
                                <div class="recent-post-area">
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp3.jpg" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    18 Dec, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="#">
                                                    Keep Your Business Safe & <br>
                                                    Endure High Availability
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp4.jpg" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    18 Dec, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="#">
                                                    Tacking the Changes of <br>
                                                    Retail Industry
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp5.jpg" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    18 Dec, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="#">
                                                    What’s the Holding Back <br>
                                                    the It Solution
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Tags</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <div class="tagcloud">
                                        <a href="#">News</a>
                                        <a href="#">business</a>
                                        <a href="#">marketing</a>
                                        <a href="#">solution</a>
                                        <a href="#">SMM</a>
                                        <a href="#">strategy</a>
                                        <a href="#">SEO</a>
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
