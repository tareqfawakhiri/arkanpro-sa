@extends('layout.main')
@section('title', 'Home Page')
@section('content')
    <!-- Hero Section    S T A R T -->
    <section class="hero-section fix">
        <div class="hero-wrapper style1">
            <div class="shape1_2 d-none d-xxl-block">
                <img src="assets/img/shape/heroShape1_2.png" alt="shape">
            </div>
            <div class="shape1_3">
                <a href="contact-us">
                    <img class="rotate360" src="assets/img/shape/heroShape1_3.png" alt="shape">
                </a>
            </div>
            <div class="shape1_4 movingX d-none d-xxl-block">
                <img src="assets/img/shape/heroShape1_4.png" alt="shape">
            </div>
            <div class="shape1_5  float-bob-y d-none d-xxl-block">
                <img src="assets/img/shape/heroShape1_5.png" alt="shape">
            </div>
            <div class="container">
                <div class="hero-main-container style1 border-radius">
                    <div class="container">
                        <div class="row d-flex align-items-center align-items-xl-start">
                            <div class="col-xl-6 order-2 order-xl-1">
                                <div class="hero-content style1">
                                    <h6 class="subtitle"><img src="assets/img/icon/subtitleIcon1_1.svg" alt="icon">
                                        Everything
                                        You
                                        Need to Create a Website</h6>
                                    <h1>Business Innovation With IT Services expertise</h1>

                                    <div class="checklist-wrapper style3">
                                        <ul class="checklist style3">
                                            <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Deployment and
                                                Support
                                            </li>
                                            <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Discovery and
                                                Analysis
                                            </li>
                                        </ul>
                                        <ul class="checklist style3">
                                            <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Flexibility
                                                and
                                                Adaptability
                                            </li>
                                            <li><img src="assets/img/icon/checkmarkIcon2.svg" alt="icon"> Competitive
                                                Advantage
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="contact-meta">
                                        <div class="btn-wrapper">
                                            <a href="contact-us" class="gt-btn style4">get Started <i
                                                    class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>


                                    <div class="fancy-box-wrapper style5  wow fadeInUp" data-wow-delay=".9s">
                                        <div class="fancy-box style5">
                                            <div class="title"><img src="assets/img/icon/starIcon1_1.svg" alt="icon">
                                                Trustipilot
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <img src="assets/img/shape/profileShape1_1.png" alt="shape">
                                                </div>
                                                <div class="item">
                                                    <div class="star-wrapper">
                                                        <img src="assets/img/icon/starIcon1_2.svg" alt="icon">
                                                        <img src="assets/img/icon/starIcon1_2.svg" alt="icon">
                                                        <img src="assets/img/icon/starIcon1_2.svg" alt="icon">
                                                    </div>
                                                    <h6>450+ reviews</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fancy-box style5 border-0">
                                            <div class="title"> Google</div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <img src="assets/img/shape/profileShape1_1.png" alt="shape">
                                                </div>
                                                <div class="item">
                                                    <div class="star-wrapper">
                                                        <img src="assets/img/icon/starIcon1_2.svg" alt="icon">
                                                        <img src="assets/img/icon/starIcon1_2.svg" alt="icon">
                                                        <img src="assets/img/icon/starIcon1_2.svg" alt="icon">
                                                    </div>
                                                    <h6>450+ reviews</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 order-1 order-xl-2 justify-content-center">
                                <div class="hero-thumb style1">
                                    <div class="main-thumb">
                                        <img src="assets/img/hero/heroThumb1_1.png" alt="thumb">
                                    </div>

                                    <div class="shape1_1 d-none d-xxl-block"><img
                                            src="assets/img/shape/heroShape1_1.png"
                                            alt="shape"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SVG Mask -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" style="position: absolute;">
                        <clipPath id="heroMask2">
                            <path
                                d="M0 50C0 22.3858 22.3858 0 50 0H1780C1807.61 0 1830 22.3858 1830 50V774C1830 801.614 1807.61 824 1780 824H1042.05C1015.85 824 991.426 810.575 977.326 788.498C947.176 741.292 878.083 741.197 848.055 788.482C834.009 810.601 809.627 824 783.425 824H50C22.3858 824 0 801.614 0 774V50Z"
                                fill="#384BFF"/>
                        </clipPath>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Slider Section    S T A R T -->
    <div class="brand-slider-section fix">
        <div class="brand-slider-container-wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="slider-area brandSliderOne">
                        <div class="swiper gt-slider" id="brandSliderOne"
                             data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":2,"centeredSlides":true},"768":{"slidesPerView":3},"992":{"slidesPerView":4},"1200":{"slidesPerView":5}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand-logo/brandLogo1_1.svg" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand-logo/brandLogo1_2.svg" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand-logo/brandLogo1_3.svg" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand-logo/brandLogo1_4.svg" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand-logo/brandLogo1_5.svg" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand-logo/brandLogo1_1.svg" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand-logo/brandLogo1_2.svg" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand-logo/brandLogo1_3.svg" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand-logo/brandLogo1_4.svg" alt="brandLogo">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-logo">
                                        <img src="assets/img/brand-logo/brandLogo1_5.svg" alt="brandLogo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Section    S T A R T -->
    <section class="service-section space fix">
        <div class="service-container-wrapper style1">
            <div class="container">
                <div class="title-wrap mb-45">
                    <div class="section-title">
                        <div class="subtitle"><img src="assets/img/icon/arrowLeft.svg" alt="icon"> <span> Our Services
                     </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                        <h2 class="title">Elevating Businesses with IT Ingenuity</h2>
                    </div>
                    <div class="arrow-btn text-end wow fadeInUp" data-wow-delay=".9s">
                        <button data-slider-prev="#serviceSliderOne" class="slider-arrow style1"><i
                                class="fa-sharp fa-regular fa-arrow-left-long"></i></button>
                        <button data-slider-next="#serviceSliderOne" class="slider-arrow style1 slider-next"><i
                                class="fa-regular fa-arrow-right-long"></i></button>
                    </div>
                </div>

                <div class="row">
                    <div class="slider-area serviceSliderOne">
                        <div class="swiper gt-slider" id="serviceSliderOne"
                             data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":2,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":3},"1200":{"slidesPerView":4}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-card style1">
                                        <div class="icon">
                                            <img src="assets/img/icon/serviceIcon1_1.svg" alt="icon">
                                        </div>
                                        <div class="body">
                                            <h3><a href="service-details">Data Guard Sentinel</a></h3>
                                            <p>Collaboratively formulate principle capital. Progressively evolve user
                                                revolutionary hosting services.</p>
                                            <a href="service-details" class="link-btn style1">Read more <i
                                                    class="fa-regular fa-chevrons-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style1">
                                        <div class="icon">
                                            <img src="assets/img/icon/serviceIcon1_2.svg" alt="icon">
                                        </div>
                                        <div class="body">
                                            <h3><a href="service-details">Woo Commerce</a></h3>
                                            <p>Collaboratively formulate principle capital. Progressively evolve user
                                                revolutionary hosting services.</p>
                                            <a href="service-details" class="link-btn style1">Read more <i
                                                    class="fa-regular fa-chevrons-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style1">
                                        <div class="icon">
                                            <img src="assets/img/icon/serviceIcon1_3.svg" alt="icon">
                                        </div>
                                        <div class="body">
                                            <h3><a href="service-details">CRM Solutions</a></h3>
                                            <p>Collaboratively formulate principle capital. Progressively evolve user
                                                revolutionary hosting services.</p>
                                            <a href="service-details" class="link-btn style1">Read more <i
                                                    class="fa-regular fa-chevrons-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style1">
                                        <div class="icon">
                                            <img src="assets/img/icon/serviceIcon1_4.svg" alt="icon">
                                        </div>
                                        <div class="body">
                                            <h3><a href="service-details">Web Design</a></h3>
                                            <p>Collaboratively formulate principle capital. Progressively evolve user
                                                revolutionary hosting services.</p>
                                            <a href="service-details" class="link-btn style1">Read more <i
                                                    class="fa-regular fa-chevrons-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style1">
                                        <div class="icon">
                                            <img src="assets/img/icon/serviceIcon1_1.svg" alt="icon">
                                        </div>
                                        <div class="body">
                                            <h3><a href="service-details">Data Guard Sentinel</a></h3>
                                            <p>Collaboratively formulate principle capital. Progressively evolve user
                                                revolutionary hosting services.</p>
                                            <a href="service-details" class="link-btn style1">Read more <i
                                                    class="fa-regular fa-chevrons-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style1">
                                        <div class="icon">
                                            <img src="assets/img/icon/serviceIcon1_2.svg" alt="icon">
                                        </div>
                                        <div class="body">
                                            <h3><a href="service-details">Woo Commerce</a></h3>
                                            <p>Collaboratively formulate principle capital. Progressively evolve user
                                                revolutionary hosting services.</p>
                                            <a href="service-details" class="link-btn style1">Read more <i
                                                    class="fa-regular fa-chevrons-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style1">
                                        <div class="icon">
                                            <img src="assets/img/icon/serviceIcon1_1.svg" alt="icon">
                                        </div>
                                        <div class="body">
                                            <h3><a href="service-details">Data Guard Sentinel</a></h3>
                                            <p>Collaboratively formulate principle capital. Progressively evolve user
                                                revolutionary hosting services.</p>
                                            <a href="service-details" class="link-btn style1">Read more <i
                                                    class="fa-regular fa-chevrons-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-card style1">
                                        <div class="icon">
                                            <img src="assets/img/icon/serviceIcon1_2.svg" alt="icon">
                                        </div>
                                        <div class="body">
                                            <h3><a href="service-details">Woo Commerce</a></h3>
                                            <p>Collaboratively formulate principle capital. Progressively evolve user
                                                revolutionary hosting services.</p>
                                            <a href="service-details" class="link-btn style1">Read more <i
                                                    class="fa-regular fa-chevrons-right"></i></a>
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

    <!-- About Section    S T A R T -->
    <section class="about-section space fix bg-theme-color">
        <div class="about-container-wrapper style1">
            <div class="shape1"><img src="assets/img/shape/aboutShape1_1.png" alt="shape"></div>
            <div class="shape2"><img src="assets/img/shape/aboutShape1_2.png" alt="shape"></div>
            <div class="shape3"><img src="assets/img/shape/aboutShape1_3.png" alt="shape"></div>
            <div class="container">
                <div class="row gy-5 gx-70">
                    <div class="col-xl-6">
                        <div class="about-thumb">
                            <div class="thumb1">
                                <img class="img-custom-anim-left wow fadeInUp" data-wow-delay=".5s"
                                     src="assets/img/about/aboutThumb1_1.png" alt="thumb">

                                <!-- SVG Mask -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                     style="position: absolute;">
                                    <clipPath id="aboutThumbdMask1">
                                        <path
                                            d="M0 20C0 8.95431 8.9543 0 20 0H395.5C423.114 0 445.5 22.3858 445.5 50V72.5C445.5 100.114 467.886 122.5 495.5 122.5H520C547.614 122.5 570 144.886 570 172.5V321.5L562.197 537.223C561.808 547.98 552.975 556.5 542.21 556.5H20C8.95432 556.5 0 547.546 0 536.5V20Z"/>
                                    </clipPath>
                                </svg>
                            </div>
                            <div class="thumb2">
                                <img class="img-custom-anim-top wow fadeInUp" data-wow-delay=".8s"
                                     src="assets/img/about/aboutThumb1_2.png" alt="thumb">
                            </div>

                            <div class="shape"><a href="contact-us"><img class="rotate360"
                                                                           src="assets/img/shape/aboutShape1_4.png"
                                                                           alt="shape"></a></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-content">
                            <div class="section-title mxw-560">
                                <div class="subtitle text-white wow fadeInUp" data-wow-delay=".3s"><img
                                        src="assets/img/icon/arrowLeftWhite.svg" alt="icon"> <span class="text-white"> about
                              company
                           </span><img src="assets/img/icon/arrowRightWhite.svg" alt="icon"></div>
                                <h2 class="title text-white wow fadeInUp" data-wow-delay=".6s">Navigating Tech Horizons
                                    Together
                                </h2>
                                <p class="mt-25 text-white wow fadeInUp" data-wow-delay=".5s">There are many variations
                                    of
                                    passages of Lorem Ipsum available, but the majority have suffered alteration in some
                                    form, by
                                    injected humour, or randomised words which don't look even slightly believable. If
                                    you</p>
                            </div>
                            <div class="fancy-box-wrapper style2">
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item">
                                        <div class="icon"><img src="assets/img/icon/aboutIcon1_1.svg" alt="icon"></div>
                                    </div>
                                    <div class="item">
                                        <h6>Back-End Development</h6>
                                    </div>
                                </div>
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="item">
                                        <div class="icon"><img src="assets/img/icon/aboutIcon1_1.svg" alt="icon"></div>
                                    </div>
                                    <div class="item">
                                        <h6>Product Design</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="counter-box-wrapper style1">
                                <div class="counter-box style1 wow fadeInUp" data-wow-delay=".3s">
                                    <h3>
                                        <span class="counter-number">20.5</span> k
                                    </h3>
                                    <h6>Projects Done</h6>
                                </div>
                                <div class="counter-box style1 wow fadeInUp" data-wow-delay=".5s">
                                    <h3>
                                        <span class="counter-number">100.5</span> k
                                    </h3>
                                    <h6>Happy Clients</h6>
                                </div>
                                <div class="counter-box style1 wow fadeInUp" data-wow-delay=".8s">
                                    <h3>
                                        <span class="counter-number">150.5</span> k
                                    </h3>
                                    <h6>Team Members</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Section    S T A R T -->
    <section class="project-section space fix">
        <div class="project-container-wrapper style1">
            <div class="container">
                <div class="section-title title-area  mx-auto mb-10">
                    <div class="subtitle d-flex justify-content-center"><img src="assets/img/icon/arrowLeft.svg"
                                                                             alt="icon">
                        <span>Examples of our work
                  </span><img src="assets/img/icon/arrowRight.svg" alt="icon">
                    </div>
                    <h2 class="title text-center">Check Our Latest Portfolios</h2>
                </div>
                <div class="project-item-wrapper style1">
                    <div class="project-item-card style1 wow fadeInUp" data-wow-delay=".2s">
                        <div class="project-icon">
                            <img src="assets/img/icon/projectItemIcon1_1.svg" alt="icon">
                        </div>
                        <h5>Data Analysis</h5>
                    </div>
                    <div class="project-item-card style1 wow fadeInUp" data-wow-delay=".4s">
                        <div class="project-icon">
                            <img src="assets/img/icon/projectItemIcon1_2.svg" alt="icon">
                        </div>
                        <h5>UI/UX Designing</h5>
                    </div>
                    <div class="project-item-card style1 active wow fadeInUp" data-wow-delay=".6s">
                        <div class="project-icon">
                            <img src="assets/img/icon/projectItemIcon1_3.svg" alt="icon">
                        </div>
                        <h5>App Development</h5>
                    </div>
                    <div class="project-item-card style1 wow fadeInUp" data-wow-delay=".8s">
                        <div class="project-icon">
                            <img src="assets/img/icon/projectItemIcon1_4.svg" alt="icon">
                        </div>
                        <h5>Wp Development</h5>
                    </div>
                    <div class="project-item-card style1 wow fadeInUp" data-wow-delay="1s">
                        <div class="project-icon">
                            <img src="assets/img/icon/projectItemIcon1_5.svg" alt="icon">
                        </div>
                        <h5>3D Design Solution</h5>
                    </div>
                </div>
                <div class="project-wrapper style1">
                    <div class="row gy-5 gx-60">
                        <div class="col-xl-5">
                            <div class="project-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".5s">
                                <img src="assets/img/project/projectThumb1_1.png" alt="thumb">
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="project-content-wrapper style1">
                                <div class="project-content style1">
                                    <div class="row">
                                        <div class="col-xl-9">
                                            <div class="project-content-left">
                                                <h3>Detailing of our Project</h3>
                                                <p class="text">There are many variations passages of Lorem Ipsum
                                                    available but the
                                                    majority
                                                    have suffered alteration in some form by injected humour,</p>
                                                <div class="fancy-box-wrapper style3">
                                                    <div class="fancy-box style3">
                                                        <div class="item">
                                                            <div class="icon">
                                                                <img src="assets/img/icon/projectIcon1_1.svg"
                                                                     alt="icon">
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <h6>Responsive website</h6>
                                                        </div>
                                                    </div>
                                                    <div class="fancy-box style3">
                                                        <div class="item">
                                                            <div class="icon">
                                                                <img src="assets/img/icon/projectIcon1_2.svg"
                                                                     alt="icon">
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <h6>100% Customers Satisfaction</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="fancy-box style3">
                                                    <div class="item">
                                                        <div class="icon">
                                                            <img src="assets/img/icon/projectIcon1_3.svg" alt="icon">
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <h6>Big Data & Analytics</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="project-content-right">
                                                <img class="img-custom-anim-right wow fadeInUp" data-wow-delay=".6s"
                                                     src="assets/img/project/projectThumb1_2.png" alt="thumb">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- SVG Mask -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                         style="position: absolute;">
                                        <clipPath id="projectContentdMask">
                                            <path
                                                d="M0 16C0 7.16344 7.16344 0 16 0H746C754.837 0 762 7.16344 762 16V354C762 362.837 754.837 370 746 370H454.326C432.82 370 412.992 358.378 402.484 339.614L401.681 338.18C379.099 297.856 320.881 298.393 299.048 339.127C288.859 358.136 269.04 370 247.472 370H16C7.16344 370 0 362.837 0 354V16Z"/>
                                        </clipPath>
                                    </svg>
                                </div>

                                <div class="shape"><a href="product-details"><img class="rotate360"
                                                                                       src="assets/img/shape/projectShape1_1.png"
                                                                                       alt="shape"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section    S T A R T -->
    <div class="video-box-area wow fadeInUp" data-wow-delay="0.6s">
        <div class="video-wrap style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".6s">
            <div class="container">
                <div class="video-box fix background-image" data-bg-src="assets/img/video/videoThumb1_1.png">
                    <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8" class="play-btn popup-video"><i
                            class="fa-sharp fa-solid fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Work Process Section   S T A R T -->
    <section class="work-process-section space bg-theme-color2 fix">
        <div class="work-process-wrapper style1 space pb-0">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-xl-3">
                        <div class="work-process-card style1 wow fadeInUp" data-wow-delay=".2s">
                            <div class="number">01</div>
                            <h3 class="title">Requirement</h3>
                            <p class="text">There are many variations of passages of Lorem Ipsum available, but the
                                majority
                                have suffered alteration.</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="work-process-card style1 active wow fadeInUp" data-wow-delay=".4s">
                            <div class="number">02</div>
                            <h3 class="title">UI/UX Desing</h3>
                            <p class="text">There are many variations of passages of Lorem Ipsum available, but the
                                majority
                                have suffered alteration.</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="work-process-card style1 wow fadeInUp" data-wow-delay=".6s">
                            <div class="number">03</div>
                            <h3 class="title">Prototype</h3>
                            <p class="text">There are many variations of passages of Lorem Ipsum available, but the
                                majority
                                have suffered alteration.</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="work-process-card style1 wow fadeInUp" data-wow-delay=".8s">
                            <div class="number">04</div>
                            <h3 class="title">Development</h3>
                            <p class="text">There are many variations of passages of Lorem Ipsum available, but the
                                majority
                                have suffered alteration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section   S T A R T -->
    <section class="pricing-section fix section-padding">
        <div class="pricing-wrapper style1">
            <div class="shape1 d-none d-xxl-block"><img src="assets/img/shape/pricingShape1_1.png" alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img src="assets/img/shape/pricingShape1_2.png" alt="shape"></div>
            <div class="container">
                <div class="section-title title-area  mx-auto mb-25">
                    <div class="subtitle d-flex justify-content-center"><img src="assets/img/icon/arrowLeft.svg"
                                                                             alt="icon">
                        <span> Our Pricing
                  </span><img src="assets/img/icon/arrowRight.svg" alt="icon">
                    </div>
                    <h2 class="title text-center">Our Awesome Pricing Plans</h2>

                    <div class="tab-section d-flex justify-content-center align-items-center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-monthly-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-monthly" type="button" role="tab"
                                        aria-controls="pills-monthly"
                                        aria-selected="true">Monthly
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-yearly-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-yearly" type="button" role="tab"
                                        aria-controls="pills-yearly"
                                        aria-selected="false">Yearly
                                </button>
                            </li>
                        </ul>
                        <img src="assets/img/icon/pricingIcon1_2.svg" alt="icon">
                        <span class="save">Save 25%</span>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-monthly" role="tabpanel"
                         aria-labelledby="pills-monthly-tab">
                        <div class="row gy-5">
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card_header">
                                        <div class="item">
                                            <h4>Regular Plans</h4>
                                            <div class="price">
                                                <h2>$49</h2> <span>/ Month</span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/icon/pricingIcon1_1.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="pricing-card_body">
                                        <div class="checklist-wrapper">
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 100 GB SSD
                                                    Storage
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Weekly
                                                    Backups
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Unlimited
                                                    Free SSL
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 24/7 system
                                                    Monitoring
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Free Domain
                                                    ($9.99
                                                    value)
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> Frame 164236
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> 20+ Payment
                                                    Methods
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="pricing" class="gt-btn style2 w-100">Get Started Now <i
                                                    class="fa-sharp fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style2">
                                    <div class="pricing-card_header">
                                        <div class="item">
                                            <h4>Regular Plans</h4>
                                            <div class="price">
                                                <h2>$49</h2> <span>/ Month</span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/icon/pricingIcon1_1.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="pricing-card_body">
                                        <div class="checklist-wrapper">
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 100 GB SSD
                                                    Storage
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Weekly
                                                    Backups
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Unlimited
                                                    Free SSL
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 24/7 system
                                                    Monitoring
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Free Domain
                                                    ($9.99
                                                    value)
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> Frame 164236
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> 20+ Payment
                                                    Methods
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="pricing" class="gt-btn style3 w-100">Get Started Now <i
                                                    class="fa-sharp fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card_header">
                                        <div class="item">
                                            <h4>Regular Plans</h4>
                                            <div class="price">
                                                <h2>$49</h2> <span>/ Month</span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/icon/pricingIcon1_1.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="pricing-card_body">
                                        <div class="checklist-wrapper">
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 100 GB SSD
                                                    Storage
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Weekly
                                                    Backups
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Unlimited
                                                    Free SSL
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 24/7 system
                                                    Monitoring
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Free Domain
                                                    ($9.99
                                                    value)
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> Frame 164236
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> 20+ Payment
                                                    Methods
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="pricing" class="gt-btn style2 w-100">Get Started Now <i
                                                    class="fa-sharp fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
                        <div class="row gy-5">
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card_header">
                                        <div class="item">
                                            <h4>Regular Plans</h4>
                                            <div class="price">
                                                <h2>$49</h2> <span>/ Month</span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/icon/pricingIcon1_1.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="pricing-card_body">
                                        <div class="checklist-wrapper">
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 100 GB SSD
                                                    Storage
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Weekly
                                                    Backups
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Unlimited
                                                    Free SSL
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 24/7 system
                                                    Monitoring
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Free Domain
                                                    ($9.99
                                                    value)
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> Frame 164236
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> 20+ Payment
                                                    Methods
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="pricing" class="gt-btn style2 w-100">Get Started Now <i
                                                    class="fa-sharp fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style2">
                                    <div class="pricing-card_header">
                                        <div class="item">
                                            <h4>Regular Plans</h4>
                                            <div class="price">
                                                <h2>$49</h2> <span>/ Month</span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/icon/pricingIcon1_1.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="pricing-card_body">
                                        <div class="checklist-wrapper">
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 100 GB SSD
                                                    Storage
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Weekly
                                                    Backups
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Unlimited
                                                    Free SSL
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 24/7 system
                                                    Monitoring
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Free Domain
                                                    ($9.99
                                                    value)
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> Frame 164236
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> 20+ Payment
                                                    Methods
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="pricing" class="gt-btn style3 w-100">Get Started Now <i
                                                    class="fa-sharp fa-light fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card_header">
                                        <div class="item">
                                            <h4>Regular Plans</h4>
                                            <div class="price">
                                                <h2>$49</h2> <span>/ Month</span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/icon/pricingIcon1_1.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="pricing-card_body">
                                        <div class="checklist-wrapper">
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 100 GB SSD
                                                    Storage
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Weekly
                                                    Backups
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Unlimited
                                                    Free SSL
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> 24/7 system
                                                    Monitoring
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/checkmarkIcon.svg" alt="icon"> Free Domain
                                                    ($9.99
                                                    value)
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> Frame 164236
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                            <ul class="checklist style1">
                                                <li><img src="assets/img/icon/crossIcon.svg" alt="icon"> 20+ Payment
                                                    Methods
                                                </li>
                                                <li><img src="assets/img/icon/questionIcon.svg" alt="icon"></li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="pricing" class="gt-btn style2 w-100">Get Started Now <i
                                                    class="fa-sharp fa-light fa-arrow-right-long"></i></a>
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

    <!-- Team Section   S T A R T -->
    <section class="team-section  fix">
        <div class="team-wrapper space style1" data-bg-src="assets/img/bg/teamBg1_1.png">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="section-title title-area  mx-auto mb-45">
                            <div class="subtitle d-flex justify-content-center"><img src="assets/img/icon/arrowLeft.svg"
                                                                                     alt="icon"> <span> Our Expert
                        </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                            <h2 class="title text-center">See Our Skilled Expert Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="slider-area">
                        <div class="swiper gt-slider teamSliderOne" id="teamSliderOne"
                             data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1,"centeredSlides":true},"576":{"slidesPerView":2,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":3},"1300":{"slidesPerView":4}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team-card style1 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".4s">
                                        <div class="team-card-thumb">
                                            <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png"
                                                                     alt="shape"></div>
                                            <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png"
                                                                     alt="shape"></div>

                                            <img class="thumbimg" src="assets/img/team/teamThumb1_1.png" alt="thumb">


                                            <!-- SVG Mask -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                                 style="position: absolute;">
                                                <clipPath id="teamCardMask">
                                                    <path
                                                        d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z"/>
                                                </clipPath>
                                            </svg>
                                        </div>

                                        <div class="team-content">
                                            <h3><a href="team-details">Wade Warren</a></h3>
                                            <p>Medical Assistant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style1 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".6s">
                                        <div class="team-card-thumb">
                                            <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png"
                                                                     alt="shape"></div>
                                            <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png"
                                                                     alt="shape"></div>

                                            <img class="thumbimg" src="assets/img/team/teamThumb1_2.png" alt="thumb">


                                            <!-- SVG Mask -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                                 style="position: absolute;">
                                                <clipPath id="teamCardMask2">
                                                    <path
                                                        d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z"/>
                                                </clipPath>
                                            </svg>
                                        </div>

                                        <div class="team-content">
                                            <h3><a href="team-details">Masirul Islam</a></h3>
                                            <p>Manager Assistant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style1 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".8s">
                                        <div class="team-card-thumb">
                                            <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png"
                                                                     alt="shape"></div>
                                            <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png"
                                                                     alt="shape"></div>

                                            <img class="thumbimg" src="assets/img/team/teamThumb1_3.png" alt="thumb">


                                            <!-- SVG Mask -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                                 style="position: absolute;">
                                                <clipPath id="teamCardMask3">
                                                    <path
                                                        d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z"/>
                                                </clipPath>
                                            </svg>
                                        </div>

                                        <div class="team-content">
                                            <h3><a href="team-details">Jenny Wilson</a></h3>
                                            <p>Web Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style1 img-custom-anim-left wow fadeInUp" data-wow-delay="1s">
                                        <div class="team-card-thumb">
                                            <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png"
                                                                     alt="shape"></div>
                                            <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png"
                                                                     alt="shape"></div>

                                            <img class="thumbimg" src="assets/img/team/teamThumb1_4.png" alt="thumb">


                                            <!-- SVG Mask -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                                 style="position: absolute;">
                                                <clipPath id="teamCardMask4">
                                                    <path
                                                        d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z"/>
                                                </clipPath>
                                            </svg>
                                        </div>

                                        <div class="team-content">
                                            <h3><a href="team-details">Floyd Miles</a></h3>
                                            <p>Head Assistant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style1 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".4s">
                                        <div class="team-card-thumb">
                                            <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png"
                                                                     alt="shape"></div>
                                            <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png"
                                                                     alt="shape"></div>

                                            <img class="thumbimg" src="assets/img/team/teamThumb1_1.png" alt="thumb">


                                            <!-- SVG Mask -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                                 style="position: absolute;">
                                                <clipPath id="teamCardMask5">
                                                    <path
                                                        d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z"/>
                                                </clipPath>
                                            </svg>
                                        </div>

                                        <div class="team-content">
                                            <h3><a href="team-details">Wade Warren</a></h3>
                                            <p>Medical Assistant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style1 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".8s">
                                        <div class="team-card-thumb">
                                            <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png"
                                                                     alt="shape"></div>
                                            <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png"
                                                                     alt="shape"></div>

                                            <img class="thumbimg" src="assets/img/team/teamThumb1_2.png" alt="thumb">


                                            <!-- SVG Mask -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                                 style="position: absolute;">
                                                <clipPath id="teamCardMask6">
                                                    <path
                                                        d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z"/>
                                                </clipPath>
                                            </svg>
                                        </div>

                                        <div class="team-content">
                                            <h3><a href="team-details">Masirul Islam</a></h3>
                                            <p>Manager Assistant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style1 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".4s">
                                        <div class="team-card-thumb">
                                            <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png"
                                                                     alt="shape"></div>
                                            <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png"
                                                                     alt="shape"></div>

                                            <img class="thumbimg" src="assets/img/team/teamThumb1_3.png" alt="thumb">


                                            <!-- SVG Mask -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                                 style="position: absolute;">
                                                <clipPath id="teamCardMask7">
                                                    <path
                                                        d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z"/>
                                                </clipPath>
                                            </svg>
                                        </div>

                                        <div class="team-content">
                                            <h3><a href="team-details">Jenny Wilson</a></h3>
                                            <p>Web Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card style1 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".6s">
                                        <div class="team-card-thumb">
                                            <div class="shape1"><img src="assets/img/shape/teamCardShape1_1.png"
                                                                     alt="shape"></div>
                                            <div class="shape2"><img src="assets/img/shape/teamCardShape1_2.png"
                                                                     alt="shape"></div>

                                            <img class="thumbimg" src="assets/img/team/teamThumb1_4.png" alt="thumb">


                                            <!-- SVG Mask -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                                 style="position: absolute;">
                                                <clipPath id="teamCardMask8">
                                                    <path
                                                        d="M0 12C0 5.37259 5.37258 0 12 0H318C324.627 0 330 5.37258 330 12V399C330 405.627 324.627 411 318 411H298.949C291.398 411 284.875 405.72 283.301 398.335L275.699 362.665C274.125 355.28 267.602 350 260.051 350H174H82.7439C75.2862 350 68.8175 355.152 67.1493 362.421L58.8507 398.579C57.1825 405.848 50.7138 411 43.2561 411H12C5.37258 411 0 405.627 0 399V12Z"/>
                                                </clipPath>
                                            </svg>
                                        </div>

                                        <div class="team-content">
                                            <h3><a href="team-details">Floyd Miles</a></h3>
                                            <p>Head Assistant</p>
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

    <!-- Faq Section   S T A R T -->
    <section class="faq-section space pb-0 fix">
        <div class="container">
            <div class="faq-wrapper style1">
                <div class="row gy-5">
                    <div class="col-xl-6">
                        <div class="faq-thumb">
                            <img class="thumb1 img-custom-anim-top wow fadeInUp" data-wow-delay=".4s"
                                 src="assets/img/faq/faqThumb1_1.png" alt="thumb">
                            <div class="thumb2"><img src="assets/img/faq/faqThumb1_2.png" alt="thumb"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="section-title mxw-560">
                            <div class="subtitle"><img src="assets/img/icon/arrowLeft.svg" alt="icon"> <span> Faq
                        </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                            <h2 class="title">Prioritize Your Site’s Safety and Security</h2>
                        </div>
                        <div class="faq-content style1">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                Where should I incorporate my business?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority
                                                have suffered
                                                alteration in some form, by injected humour, or randomised words which
                                                don't.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                How long should a business plan be?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority
                                                have suffered
                                                alteration in some form, by injected humour, or randomised words which
                                                don't.
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
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority
                                                have suffered
                                                alteration in some form, by injected humour, or randomised words which
                                                don't.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                What type of company is measured?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority
                                                have suffered
                                                alteration in some form, by injected humour, or randomised words which
                                                don't.
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

    <!-- Cta Section   S T A R T -->
    <section class="cta-section space pb-0">
        <div class="container">
            <div class="cta-wrap style1 fix">
                <div class="shape"><img src="assets/img/shape/ctaShape1_1.png" alt="shape"></div>
                <div class="row gy-5">
                    <div class="col-xl-3">
                        <div class="cta-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                            <img src="assets/img/cta/ctaThumb1_1.png" alt="thumb">
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex align-items-center">
                        <div class="section-title">
                            <div class="subtitle"><img src="assets/img/icon/arrowLeftWhite.svg" alt="icon"> <span
                                    class="text-white"> Contact US
                        </span><img src="assets/img/icon/arrowRightWhite.svg" alt="icon"></div>
                            <h2 class="title">24/7 Expert Hosting Support Our Customers Love</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 d-flex align-items-center">
                        <div class="btn-wrapper">
                            <a class="gt-btn style5" href="contact-us">Talk to a Specialist<i
                                    class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section   S T A R T -->
    <section class="testimonial-section space pb-0 fix wow fadeInUp" data-wow-delay=".5s"
             data-bg-src="assets/img/bg/testimonialBg1_1.png">
        <div class="testimonial-wrap style3 space">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="section-title title-area mb-50 mx-auto">
                            <div class="subtitle d-flex justify-content-center"><img src="assets/img/icon/arrowLeft.svg"
                                                                                     alt="icon"> <span> Testimonials
                        </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                            <h2 class="title text-center">Our Latest Client Feedback</h2>
                        </div>
                    </div>
                </div>
                <div class="slider-area">
                    <div class="swiper gt-slider testimonial-slider3" id="testimonialSlider3"
                         data-slider-options='{"loop": true,"centeredSlides":true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp"
                                     data-wow-delay=".4s">
                                    <ul class="star-wrap">
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                                    </ul>
                                    <p class="text">"Extech has completely transformed our process. The user-friendly
                                        interface and powerful features maintaining our website. Highly recommended for
                                        all!"
                                    </p>
                                    <div class="profile-box">
                                        <div class="testi-thumb">
                                            <img src="assets/img/testimonial/testiThumb3_1.png" alt="thumb">
                                        </div>
                                        <div class="testi-content">
                                            <h3 class="title">Kristin Watson</h3>
                                            <div class="designation">Web Designer</div>
                                        </div>
                                    </div>
                                    <div class="quote">
                                        <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                                        <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                                    </div>
                                    <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png"
                                                               alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp"
                                     data-wow-delay=".4s">
                                    <ul class="star-wrap">
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                                    </ul>
                                    <p class="text">"I've been using Extech for several months now, and I'm extremely
                                        impressed with the ease of customization it offers. The wide range of
                                        templates."
                                    </p>
                                    <div class="profile-box">
                                        <div class="testi-thumb">
                                            <img src="assets/img/testimonial/testiThumb3_2.png" alt="thumb">
                                        </div>
                                        <div class="testi-content">
                                            <h3 class="title">Theresa Webb</h3>
                                            <div class="designation">Tech enthusiast</div>
                                        </div>
                                    </div>
                                    <div class="quote">
                                        <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                                        <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                                    </div>
                                    <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png"
                                                               alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp"
                                     data-wow-delay=".4s">
                                    <ul class="star-wrap">
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                                    </ul>
                                    <p class="text">"Extech offers exceptional value for money. The comprehensive suite
                                        of tools and seamless integration with various plugins and services make it a
                                        for all "
                                    </p>
                                    <div class="profile-box">
                                        <div class="testi-thumb">
                                            <img src="assets/img/testimonial/testiThumb3_3.png" alt="thumb">
                                        </div>
                                        <div class="testi-content">
                                            <h3 class="title">Ronald Richards</h3>
                                            <div class="designation">Web Enterprenuor</div>
                                        </div>
                                    </div>
                                    <div class="quote">
                                        <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                                        <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                                    </div>
                                    <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png"
                                                               alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp"
                                     data-wow-delay=".4s">
                                    <ul class="star-wrap">
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                                    </ul>
                                    <p class="text">"Extech has completely transformed our process. The user-friendly
                                        interface and powerful features maintaining our website. Highly recommended for
                                        all!"
                                    </p>
                                    <div class="profile-box">
                                        <div class="testi-thumb">
                                            <img src="assets/img/testimonial/testiThumb3_1.png" alt="thumb">
                                        </div>
                                        <div class="testi-content">
                                            <h3 class="title">Kristin Watson</h3>
                                            <div class="designation">Web Designer</div>
                                        </div>
                                    </div>
                                    <div class="quote">
                                        <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                                        <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                                    </div>
                                    <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png"
                                                               alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp"
                                     data-wow-delay=".4s">
                                    <ul class="star-wrap">
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                                    </ul>
                                    <p class="text">"I've been using Extech for several months now, and I'm extremely
                                        impressed with the ease of customization it offers. The wide range of
                                        templates."
                                    </p>
                                    <div class="profile-box">
                                        <div class="testi-thumb">
                                            <img src="assets/img/testimonial/testiThumb3_2.png" alt="thumb">
                                        </div>
                                        <div class="testi-content">
                                            <h3 class="title">Theresa Webb</h3>
                                            <div class="designation">Tech enthusiast</div>
                                        </div>
                                    </div>
                                    <div class="quote">
                                        <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                                        <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                                    </div>
                                    <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png"
                                                               alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp"
                                     data-wow-delay=".4s">
                                    <ul class="star-wrap">
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIcon2.png" alt="icon"></li>
                                        <li><img src="assets/img/icon/starIconRegular.png" alt="icon"></li>
                                    </ul>
                                    <p class="text">"Extech offers exceptional value for money. The comprehensive suite
                                        of tools and seamless integration with various plugins and services make it a
                                        for all "
                                    </p>
                                    <div class="profile-box">
                                        <div class="testi-thumb">
                                            <img src="assets/img/testimonial/testiThumb3_3.png" alt="thumb">
                                        </div>
                                        <div class="testi-content">
                                            <h3 class="title">Ronald Richards</h3>
                                            <div class="designation">Web Enterprenuor</div>
                                        </div>
                                    </div>
                                    <div class="quote">
                                        <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                                        <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                                    </div>
                                    <div class="shape3_1"><img src="assets/img/shape/testimonialShape3_1.png"
                                                               alt="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section    S T A R T -->
    <section class="blog-section space fix">
        <div class="blog-wrapper style1 space pt-0">
            <div class="container">
                <div class="title-wrap mb-45">
                    <div class="section-title">
                        <div class="subtitle"><img src="assets/img/icon/arrowLeft.svg" alt="icon"> <span> Blog & News
                     </span><img src="assets/img/icon/arrowRight.svg" alt="icon"></div>
                        <h2 class="title">Featured News And Insights</h2>
                    </div>
                    <div class="arrow-btn text-end wow fadeInUp" data-wow-delay=".9s">
                        <button data-slider-prev="#blogSliderOne" class="slider-arrow style1"><i
                                class="fa-sharp fa-regular fa-arrow-left-long"></i></button>
                        <button data-slider-next="#blogSliderOne" class="slider-arrow style1 slider-next"><i
                                class="fa-regular fa-arrow-right-long"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="slider-area blogSliderOne">
                        <div class="swiper gt-slider" id="blogSliderOne"
                             data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog-card style1 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".4s">
                                        <div class="blog-card-thumb">
                                            <img src="assets/img/blog/blogThumb1_1.jpg" alt="thumb">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <div class="tag">Shared Hosting</div>
                                                <div class="date">MARCH 24, 2024</div>
                                            </div>
                                            <h3><a href="blog-details">Attentive was born in 2015 help sales
                                                    teams</a></h3>
                                            <div class="author-meta">
                                                <div class="fancy-box style1">
                                                    <div class="item"><img src="assets/img/blog/blogProfile1_1.png"
                                                                           alt="thumb">
                                                    </div>
                                                    <div class="item">
                                                        <h6>Admin</h6>
                                                        <p>Co, Founder</p>
                                                    </div>
                                                </div>

                                                <a class="link-btn style1" href="blog-details"><i
                                                        class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card style1 img-custom-anim-top wow fadeInUp" data-wow-delay=".6s">
                                        <div class="blog-card-thumb">
                                            <img src="assets/img/blog/blogThumb1_2.jpg" alt="thumb">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <div class="tag"> Uncategorized</div>
                                                <div class="date">MARCH 14, 2024</div>
                                            </div>
                                            <h3><a href="blog-details">Best and fastest data server ever</a></h3>
                                            <div class="author-meta">
                                                <div class="fancy-box style1">
                                                    <div class="item"><img src="assets/img/blog/blogProfile1_2.png"
                                                                           alt="thumb">
                                                    </div>
                                                    <div class="item">
                                                        <h6>Admin</h6>
                                                        <p>Co, Founder</p>
                                                    </div>
                                                </div>

                                                <a class="link-btn style1" href="blog-details"><i
                                                        class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card style1 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".8s">
                                        <div class="blog-card-thumb">
                                            <img src="assets/img/blog/blogThumb1_3.jpg" alt="thumb">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <div class="tag">Technology</div>
                                                <div class="date">MARCH 29, 2024</div>
                                            </div>
                                            <h3><a href="blog-details">Life won’t one beast air over above all</a>
                                            </h3>
                                            <div class="author-meta">
                                                <div class="fancy-box style1">
                                                    <div class="item"><img src="assets/img/blog/blogProfile1_3.png"
                                                                           alt="thumb">
                                                    </div>
                                                    <div class="item">
                                                        <h6>Admin</h6>
                                                        <p>Co, Founder</p>
                                                    </div>
                                                </div>

                                                <a class="link-btn style1" href="blog-details"><i
                                                        class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card style1 img-custom-anim-left wow fadeInUp" data-wow-delay="1s">
                                        <div class="blog-card-thumb">
                                            <img src="assets/img/blog/blogThumb1_1.jpg" alt="thumb">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <div class="tag">Shared Hosting</div>
                                                <div class="date">MARCH 24, 2024</div>
                                            </div>
                                            <h3><a href="blog-details">Attentive was born in 2015 help sales
                                                    teams</a></h3>
                                            <div class="author-meta">
                                                <div class="fancy-box style1">
                                                    <div class="item"><img src="assets/img/blog/blogProfile1_1.png"
                                                                           alt="thumb">
                                                    </div>
                                                    <div class="item">
                                                        <h6>Admin</h6>
                                                        <p>Co, Founder</p>
                                                    </div>
                                                </div>

                                                <a class="link-btn style1" href="blog-details"><i
                                                        class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card style1 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".4s">
                                        <div class="blog-card-thumb">
                                            <img src="assets/img/blog/blogThumb1_2.jpg" alt="thumb">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <div class="tag"> Uncategorized</div>
                                                <div class="date">MARCH 14, 2024</div>
                                            </div>
                                            <h3><a href="blog-details">Best and fastest data server ever</a></h3>
                                            <div class="author-meta">
                                                <div class="fancy-box style1">
                                                    <div class="item"><img src="assets/img/blog/blogProfile1_2.png"
                                                                           alt="thumb">
                                                    </div>
                                                    <div class="item">
                                                        <h6>Admin</h6>
                                                        <p>Co, Founder</p>
                                                    </div>
                                                </div>

                                                <a class="link-btn style1" href="blog-details"><i
                                                        class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card style1 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".8s">
                                        <div class="blog-card-thumb">
                                            <img src="assets/img/blog/blogThumb1_3.jpg" alt="thumb">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <div class="tag">Technology</div>
                                                <div class="date">MARCH 29, 2024</div>
                                            </div>
                                            <h3><a href="blog-details">Life won’t one beast air over above all</a>
                                            </h3>
                                            <div class="author-meta">
                                                <div class="fancy-box style1">
                                                    <div class="item"><img src="assets/img/blog/blogProfile1_3.png"
                                                                           alt="thumb">
                                                    </div>
                                                    <div class="item">
                                                        <h6>Admin</h6>
                                                        <p>Co, Founder</p>
                                                    </div>
                                                </div>

                                                <a class="link-btn style1" href="blog-details"><i
                                                        class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
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

    <!-- Cta Section   S T A R T -->
    <section class="cta-section space pb-0 mt-n150 mb-n116 z-5">
        <div class="container">
            <div class="cta-wrap style2">
                <div class="shape1_1 rotate360 d-none d-xl-block"><img src="assets/img/shape/ctaShape2_1.png"
                                                                       alt="shape">
                </div>
                <div class="shape1_2 d-none d-xl-block"><img src="assets/img/shape/ctaShape2_2.png" alt="shape"></div>
                <div class="shape1_3 d-none d-xl-block"><img src="assets/img/shape/ctaShape2_3.png" alt="shape"></div>
                <div class="shape1_4 d-none d-xl-block"><img src="assets/img/shape/ctaShape2_4.png" alt="shape"></div>
                <div class="cta-thumb d-none d-xl-block">
                    <img src="assets/img/cta/ctaThumb.png" alt="thumb">
                </div>
                <h3 class="cta-title text-white wow fadeInUp" data-wow-delay=".3s">Stay Connected With Cutting Edge IT
                </h3>
                <div class="btn-wrapper">
                    <a class="gt-btn style5" href="contact-us">Talk to a Specialist<i
                            class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
