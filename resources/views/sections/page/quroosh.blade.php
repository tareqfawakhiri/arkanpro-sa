@extends('layout.main')
@section('title', 'Quroosh')
@section('content')
    <!--<< Breadcrumb Section Start >>-->
    @php
        $media_banner = $section->file_media_path_original;
    @endphp
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url({{ Voyager::image($media_banner) }});">
        <div class="border-shape">
            <img src="{{ asset('assets/img/element.png') }}" alt="shape-img">
        </div>
        <div class="line-shape">
            <img src="{{ asset('assets/img/line-element.png') }}" alt="shape-img">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $section->getTranslatedAttribute('title') }}</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ route('home') }}">
                            {{ trans('general.home') }}
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left': 'right' }}"></i>
                    </li>
                    <li>
                        {{ trans('general.services') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Project Section Start -->
    <section class="Project-details-section fix section-padding">
        <div class="container">
            <div class="service-details-items">
                <div class="details-content">
                    {!! $section->getTranslatedAttribute('description') !!}
                </div>
            </div>

            <section class="service-section space fix">
                <div class="service-container-wrapper style1">
                    <div class="container">
                        <div class="title-wrap mb-45">
                            <div class="section-title">
                                <div class="subtitle">
                                    <img src="{{ asset('assets/img/icon/arrowLeft.svg') }}" alt="icon">
                                    <span> {{ trans('general.system-features')  }} </span>
                                    <img src="{{ asset('assets/img/icon/arrowRight.svg') }}" alt="icon">
                                </div>
                                <h2 class="title">{{ trans('general.elevating-businesses-with-it-ingenuity') }}</h2>
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
                                        @foreach($section->features as $ky => $feature)
                                            <div class="swiper-slide">
                                                <div class="service-card style1">
                                                    <div class="icon">
                                                        <img src="{{ Voyager::image($feature->icon) }}"
                                                             alt="icon">
                                                    </div>
                                                    <div class="body">
                                                        @php
                                                            $link = $feature->external_link != '' ? $feature->external_link : '#';
                                                        @endphp
                                                        <h3>
                                                            <a href="{{ $link }}">{{ $feature->getTranslatedAttribute('title') }}</a>
                                                        </h3>
                                                        <p>{{ $feature->getTranslatedAttribute('description') }}</p>
                                                        <a href="{{ $link }}" class="link-btn style1">
                                                            {{ trans('general.read-more') }} <i class="fa-regular fa-chevrons-{{ app()->getLocale() == 'ar' ? 'Left' : 'Right' }}"></i>
                                                        </a>
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


        </div>

        <!-- Pricing Section   S T A R T -->
        <section class="pricing-section fix section-padding">
            <div class="pricing-wrapper style1">
                <div class="shape1 d-none d-xxl-block"><img
                        src="{{ asset('assets/img/shape/pricingShape1_1.png') }}" alt="shape"></div>
                <div class="shape2 d-none d-xxl-block"><img
                        src="{{ asset('assets/img/shape/pricingShape1_2.png') }}" alt="shape"></div>
                <div class="container">
                    <div class="section-title title-area  mx-auto mb-25">
                        <div class="subtitle d-flex justify-content-center"><img
                                src="{{ asset('assets/img/icon/arrowLeft.svg') }}"
                                alt="icon">
                            <span> Our Pricing
                  </span><img src="{{ asset('assets/img/icon/arrowRight.svg') }}" alt="icon">
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
                            <img src="{{ asset('assets/img/icon/pricingIcon1_2.svg') }}" alt="icon">
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
                                                <img src="{{ asset('assets/img/icon/pricingIcon1_1.svg') }}"
                                                     alt="icon">
                                            </div>
                                        </div>
                                        <div class="pricing-card_body">
                                            <div class="checklist-wrapper">
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 100 GB SSD
                                                        Storage
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Weekly
                                                        Backups
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Unlimited
                                                        Free SSL
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 24/7 system
                                                        Monitoring
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Free Domain
                                                        ($9.99
                                                        value)
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> Frame 164236
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> 20+ Payment
                                                        Methods
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
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
                                                <img src="{{ asset('assets/img/icon/pricingIcon1_1.svg') }}"
                                                     alt="icon">
                                            </div>
                                        </div>
                                        <div class="pricing-card_body">
                                            <div class="checklist-wrapper">
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 100 GB SSD
                                                        Storage
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Weekly
                                                        Backups
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Unlimited
                                                        Free SSL
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 24/7 system
                                                        Monitoring
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Free Domain
                                                        ($9.99
                                                        value)
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> Frame 164236
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> 20+ Payment
                                                        Methods
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
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
                                                <img src="{{ asset('assets/img/icon/pricingIcon1_1.svg') }}"
                                                     alt="icon">
                                            </div>
                                        </div>
                                        <div class="pricing-card_body">
                                            <div class="checklist-wrapper">
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 100 GB SSD
                                                        Storage
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Weekly
                                                        Backups
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Unlimited
                                                        Free SSL
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 24/7 system
                                                        Monitoring
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Free Domain
                                                        ($9.99
                                                        value)
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> Frame 164236
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> 20+ Payment
                                                        Methods
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
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
                        <div class="tab-pane fade" id="pills-yearly" role="tabpanel"
                             aria-labelledby="pills-yearly-tab">
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
                                                <img src="{{ asset('assets/img/icon/pricingIcon1_1.svg') }}"
                                                     alt="icon">
                                            </div>
                                        </div>
                                        <div class="pricing-card_body">
                                            <div class="checklist-wrapper">
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 100 GB SSD
                                                        Storage
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Weekly
                                                        Backups
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Unlimited
                                                        Free SSL
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 24/7 system
                                                        Monitoring
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Free Domain
                                                        ($9.99
                                                        value)
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> Frame 164236
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> 20+ Payment
                                                        Methods
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
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
                                                <img src="{{ asset('assets/img/icon/pricingIcon1_1.svg') }}"
                                                     alt="icon">
                                            </div>
                                        </div>
                                        <div class="pricing-card_body">
                                            <div class="checklist-wrapper">
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 100 GB SSD
                                                        Storage
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Weekly
                                                        Backups
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Unlimited
                                                        Free SSL
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 24/7 system
                                                        Monitoring
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Free Domain
                                                        ($9.99
                                                        value)
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> Frame 164236
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> 20+ Payment
                                                        Methods
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
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
                                                <img src="{{ asset('assets/img/icon/pricingIcon1_1.svg') }}"
                                                     alt="icon">
                                            </div>
                                        </div>
                                        <div class="pricing-card_body">
                                            <div class="checklist-wrapper">
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 100 GB SSD
                                                        Storage
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Weekly
                                                        Backups
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Unlimited
                                                        Free SSL
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> 24/7 system
                                                        Monitoring
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}"
                                                             alt="icon"> Free Domain
                                                        ($9.99
                                                        value)
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> Frame 164236
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
                                                </ul>
                                                <ul class="checklist style1">
                                                    <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}"
                                                             alt="icon"> 20+ Payment
                                                        Methods
                                                    </li>
                                                    <li><img src="{{ asset('assets/img/icon/questionIcon.svg') }}"
                                                             alt="icon"></li>
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

        <section class="faq-section space pb-0 fix" style="display:nonw">
            <div class="container">
                <div class="faq-wrapper style1">
                    <div class="row gy-5">
                        <div class="col-xl-6">
                            <div class="faq-thumb">
                                <img class="thumb1 img-custom-anim-top wow fadeInUp" data-wow-delay=".4s"
                                     src="{{ asset('assets/img/faq/faqThumb1_1.png') }}" alt="thumb">
                                <div class="thumb2"><img src="{{ asset('assets/img/faq/faqThumb1_2.png') }}"
                                                         alt="thumb"></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="section-title mxw-560">
                                <div class="subtitle"><img src="{{ asset('assets/img/icon/arrowLeft.svg') }}"
                                                           alt="icon"> <span> Faq
                        </span><img src="{{ asset('assets/img/icon/arrowRight.svg') }}" alt="icon"></div>
                                <h2 class="title">Prioritize Your Site’s Safety and Security</h2>
                            </div>
                            <div class="faq-content style1">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#faq1" aria-expanded="true"
                                                        aria-controls="faq1">
                                                    Where should I incorporate my business?
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available,
                                                    but the
                                                    majority
                                                    have suffered
                                                    alteration in some form, by injected humour, or randomised words
                                                    which
                                                    don't.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#faq2" aria-expanded="false"
                                                        aria-controls="faq2">
                                                    How long should a business plan be?
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available,
                                                    but the
                                                    majority
                                                    have suffered
                                                    alteration in some form, by injected humour, or randomised words
                                                    which
                                                    don't.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#faq3" aria-expanded="false"
                                                        aria-controls="faq3">
                                                    What is included in your services?
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse show"
                                                 data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available,
                                                    but the
                                                    majority
                                                    have suffered
                                                    alteration in some form, by injected humour, or randomised words
                                                    which
                                                    don't.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#faq4" aria-expanded="false"
                                                        aria-controls="faq4">
                                                    What type of company is measured?
                                                </button>
                                            </h5>
                                            <div id="faq4" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of Lorem Ipsum available,
                                                    but the
                                                    majority
                                                    have suffered
                                                    alteration in some form, by injected humour, or randomised words
                                                    which
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
    </section>
@endsection
