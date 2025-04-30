@extends('layout.main')
@section('title', trans('general.home'))
@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section  hero-3">
        <div class="bottom-shape">
            <img src="{{ asset('assets/img/hero/bottom-shape.png') }}" alt="shape-img">
        </div>
        <div class="array-button">
            <button class="array-prev">
                <i class="fal fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
            </button>
            <button class="array-next">
                <i class="fal fa-arrow-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}"></i>
            </button>
        </div>
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                @foreach($slider as $slide)
                    <div class="swiper-slide">
                        <div class="slider-image bg-cover"
                             style="background-image: url('{{ Voyager::image($slide->bk_image) }}');">
                            <div class="mask-shape">
                                <img src="{{ asset('assets/img/hero/mask-shape-2.png') }}" alt="shape-img">
                            </div>
                            <div class="border-shape">
                                <img src="{{ asset('assets//img/hero/border-shape.png') }}" alt="shape-img">
                            </div>
                            <div class="circle-shape">
                                <img src="{{ asset('assets/img/choose/circle.png') }}" alt="shape-img">
                            </div>
                            <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
                                <img src="{{ asset('assets/img/frame.png') }}" alt="shape-img">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row g-4 align-items-center">
                                <div class="col-lg-7">
                                    <div class="hero-content">
                                        <h5>{{ $slide->getTranslatedAttribute('sub_title') }}</h5>
                                        <h1>
                                            {{ $slide->getTranslatedAttribute('title') }}
                                        </h1>
                                        <p>
                                            {!! $slide->getTranslatedAttribute('body') !!}
                                        </p>
                                        <div class="hero-button">
                                            @if(!is_null($slide->external_link) && $slide->external_link != '')
                                                <a href="{{ $slide->external_link }}" class="theme-btn hover-white">
                                                    {{ trans('slider.explore-more')}}
                                                    <i class="fa-solid fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}-long"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    @if($slide->type == 'VIDEO' || $slide->type == 'IMAGE')
                                        <div class="hero-thumb style2">
                                            @if($slide->type == 'VIDEO')
                                                <div class="video-box">
                                                    <a href="{{ $slide->media }}"
                                                       class="play-btn popup-video">
                                                        <img class="rotate360" src="assets/img/shape/heroShape2_1.png"
                                                             alt="{{ $slide->getTranslatedAttribute('title')  }}">
                                                    </a>
                                                </div>
                                            @else
                                                <img src="{{ Voyager::image($slide->file_media_path_original) }}"
                                                     alt="{{ $slide->getTranslatedAttribute('title')  }}">
                                            @endif
                                        </div>
                                    @elseif($slide->type == 'FORM')
                                        @include('sections.slider-form')
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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
                             data-slider-options='{"loop": false, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":2,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":3},"1200":{"slidesPerView":4}}}'>
                            <div class="swiper-wrapper">
                                @foreach($services as $service)
                                    <div class="swiper-slide">
                                        <div class="service-card style1">
                                            <div class="icon">
                                                <img src="{{ Voyager::image($service->image) }}"
                                                     alt="icon">
                                            </div>
                                            <div class="body">
                                                <h3>
                                                    <a href="{{ route('service',$service->slug) }}">{{ $service->getTranslatedAttribute('title') }}</a>
                                                </h3>
                                                <p>
                                                    {!! $service->short_content !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-section fix space">
        <div class="container">
            <div class="brand-wrapper">
                <h6 class="text-center wow fadeInUp" data-wow-delay=".3s">{{ trans('brands.partners-success')}}</h6>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        @foreach($partners as $partner)
                            <div class="swiper-slide">
                                <div class="brand-image">
                                    <img src="{{ Voyager::image($partner->logo) }}"
                                         alt="{{ $partner->title }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if($service)
        <!-- About Section    S T A R T -->
        <section class="about-section space fix bg-theme-color">
            <div class="about-container-wrapper style1">
                <div class="shape1"><img src="{{ asset('assets/img/shape/aboutShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/img/shape/aboutShape1_2.png') }}" alt="shape"></div>
                <div class="shape3"><img src="{{ asset('assets/img/shape/aboutShape1_3.png') }}" alt="shape"></div>
                <div class="container">
                    <div class="row gy-5 gx-70">
                        <div class="col-xl-6">
                            <div class="about-thumb">
                                <div class="thumb1">
                                    <img class="img-custom-anim-left wow fadeInUp" data-wow-delay=".5s"
                                         src="{{ Voyager::image($service->image) }}" alt="thumb">

                                    <!-- SVG Mask -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0"
                                         style="position: absolute;">
                                        <clipPath id="aboutThumbdMask1">
                                            <path
                                                    d="M0 20C0 8.95431 8.9543 0 20 0H395.5C423.114 0 445.5 22.3858 445.5 50V72.5C445.5 100.114 467.886 122.5 495.5 122.5H520C547.614 122.5 570 144.886 570 172.5V321.5L562.197 537.223C561.808 547.98 552.975 556.5 542.21 556.5H20C8.95432 556.5 0 547.546 0 536.5V20Z"/>
                                        </clipPath>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-content">
                                <div class="section-title mxw-560">
                                    <div class="subtitle text-white wow fadeInUp" data-wow-delay=".3s"><img
                                                src="{{ asset('assets/img/icon/arrowLeftWhite.svg') }}" alt="icon">
                                        <span
                                                class="text-white"> {{ trans('general.our-services') }}
                                        </span>
                                        <img src="{{ asset('assets/img/icon/arrowRightWhite.svg') }}" alt="icon">
                                    </div>
                                    <h2 class="title text-white wow fadeInUp" data-wow-delay=".6s">
                                        {{ $service->getTranslatedAttribute('title') }}
                                    </h2>
                                    <p class="mt-25 text-white wow fadeInUp" data-wow-delay=".5s">
                                        {{ strip_tags($service->getTranslatedAttribute('description')) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($products)
        <!-- Project Section    S T A R T -->
        <section class="project-section space fix">
            <div class="project-container-wrapper style1">
                <div class="container">
                    <div class="section-title title-area  mx-auto mb-10">
                        <h2 class="title text-center">Check Our Latest Services</h2>
                    </div>
                    @php
                        $count = 0;
                    @endphp
                    <div class="project-item-wrapper style1">
                        @foreach($products as $product)
                            <a class="project-item-card style1 {{ $count++ == 0 ? 'active' : '' }}"
                               href="#portfolio-{{ $product->id }}">
                                <div class="project-icon">
                                    <img src="{{ Voyager::image($product->icon) }}"
                                         alt="{{ $product->getTranslatedAttribute('sub_title') }}">
                                </div>
                                <h5>{{ $product->getTranslatedAttribute('sub_title') }}</h5>
                            </a>
                        @endforeach
                    </div>

                    @php
                        $count = 0;
                    @endphp

                    <div class="project-wrapper style1">
                        @foreach($products as $product)
                            <div class="row gy-5 gx-60" id="portfolio-{{ $product->id }}"
                                 style="{{ $count++ == 0 ? 'display: flex' : 'display: none' }}">
                                <div class="col-xl-5">
                                    <div class="project-thumb img-custom-anim-left">
                                        <img src="{{ Voyager::image($product->icon) }}"
                                             alt="{{ $product->getTranslatedAttribute('sub_title') }}">
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="project-content-wrapper style1">
                                        <div class="project-content style1">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="project-content-left">
                                                        <h3>{{ $product->getTranslatedAttribute('title') }}</h3>
                                                        <p class="text">{!! $product->excerpt !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    @include('sections.pricing')

    <!-- Cta Section   S T A R T -->
    <section class="cta-section space pb-0">
        <div class="container">
            <div class="cta-wrap style1 fix">
                <div class="shape"><img src="assets/img/shape/ctaShape1_1.png" alt="shape"></div>
                <div class="row gy-5">
                    <div class="col-xl-3">
                        <div class="cta-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                            <img src="{{ asset('assets/img/logo-light.png') }}" alt="thumb">
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex align-items-center">
                        <div class="section-title">
                            <div class="subtitle"><img src="assets/img/icon/arrowLeftWhite.svg" alt="icon"> <span
                                        class="text-white"> {{ trans('general.contact-us') }}
                        </span><img src="assets/img/icon/arrowRightWhite.svg" alt="icon"></div>
                            <h2 class="title">24/7 Expert Hosting Support Our Customers Love</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 d-flex align-items-center">
                        <div class="btn-wrapper">
                            <a class="gt-btn style5" href="{{ route('contact') }}">Talk to a Specialist
                                <i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
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
                            <div class="subtitle d-flex justify-content-center">
                                <img src="assets/img/icon/arrowLeft.svg" alt="icon">
                                <span>{{ trans('general.testimonial') }}</span>
                                <img src="assets/img/icon/arrowRight.svg" alt="icon">
                            </div>
                            <h2 class="title text-center">Our Latest Client Feedback</h2>
                        </div>
                    </div>
                </div>
                <div class="slider-area">
                    <div class="swiper gt-slider testimonial-slider3" id="testimonialSlider3"
                         data-slider-options='{"loop": false,"centeredSlides":true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                        <div class="swiper-wrapper">
                            @foreach($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial-card style3 img-custom-anim-left wow fadeInUp"
                                         data-wow-delay=".4s">
                                        <ul class="star-wrap"></ul>
                                        <p class="text">{{ $testimonial->getTranslatedAttribute('description') }}</p>
                                        <div class="profile-box">
                                            <div class="testi-thumb">
                                                <img src="assets/img/testimonial/testiThumb3_1.png" alt="thumb">
                                            </div>
                                            <div class="testi-content">
                                                <h3 class="title">{{ $testimonial->getTranslatedAttribute('name') }}</h3>
                                                <div
                                                        class="designation">{{ $testimonial->getTranslatedAttribute('job') }}</div>
                                            </div>
                                        </div>
                                        <div class="quote">
                                            <img class="darkQuote" src="assets/img/icon/quoteIconDark.png" alt="icon">
                                            <img class="whiteQuote" src="assets/img/icon/quoteIconWhite.png" alt="icon">
                                        </div>
                                        <div class="shape3_1">
                                            <img src="assets/img/shape/testimonialShape3_1.png" alt="shape">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                        <div class="subtitle">
                            <img src="assets/img/icon/arrowLeft.svg" alt="icon">
                            <span>{{ trans('general.blog') }}</span>
                            <img src="assets/img/icon/arrowRight.svg" alt="icon">
                        </div>
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
                             data-slider-options='{"loop": false, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                            <div class="swiper-wrapper">
                                @foreach($posts as $post)
                                    <div class="swiper-slide">
                                        <div class="blog-card style1 img-custom-anim-left wow fadeInUp"
                                             data-wow-delay=".4s">
                                            <div class="blog-card-thumb">
                                                <img src="{{ Voyager::image($post->thumbnail('cropped')) }}"
                                                     alt="thumb">
                                            </div>
                                            <div class="blog-card-body">
                                                <div class="blog-meta">
                                                    <div class="date">{!! $post->getDateTime !!}</div>
                                                </div>
                                                <h3>
                                                    <a href="{{ route('blog.details',$post->slug) }}">{{ $post->getTranslatedAttribute('title') }}</a>
                                                </h3>
                                                <div class="author-meta">
                                                    <div class="fancy-box style1">
                                                        <div class="item">
                                                            <h6>{{ $post->author->name ?? '' }}</h6>
                                                            <p>{{ $post->category->name }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="brand-section fix pt-0">
        <div class="container">
            <div class="brand-wrapper">
                <h6 class="text-center wow fadeInUp" data-wow-delay=".3s">{{ trans('brands.clients-success')}}</h6>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        @foreach($clients as $client)
                            <div class="swiper-slide">
                                <div class="brand-image">
                                    <img src="{{ Voyager::image($client->image) }}"
                                         alt="{{ $client->title }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
