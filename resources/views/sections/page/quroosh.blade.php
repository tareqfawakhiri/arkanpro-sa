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
        </div>

    </section>
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

    @include('sections.pricing')

@endsection
