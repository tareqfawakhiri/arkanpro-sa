@extends('layout.main')

@section('title', $section->seo_title ? $section->seo_title : $section->getTranslatedAttribute('title'))
@section('meta_description',$section->meta_description ? $section->meta_description : setting('site.description'))
@section('meta_keywords',$section->meta_keywords ? $section->meta_keywords : setting('site.keywords'))

@section('meta_tags')
@if($section->features)
    @foreach($section->features as $ky => $feature)
        <meta name="keywords" content="{{$feature->meta_keywords}}">
        <meta name="description" content="{{$feature->meta_description}}" />
    @endforeach
@endif
@if($pricing)
    @foreach($pricing as $plane)
        <meta name="keywords" content="{{$plane->meta_keywords}}">
        <meta name="description" content="{{$plane->meta_description}}" />
    @endforeach
@endif
@if($slider)
    @foreach($slider as $slide)
        <meta name="keywords" content="{{$slide->meta_keywords}}">
        <meta name="description" content="{{$slide->meta_description}}" />
    @endforeach
@endif
@endsection

@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section space hero-3">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                @foreach($slider as $slide)
                    <div class="swiper-slide">
                        <div class="slider-image bg-cover"
                             style="background-image: url('{{ Voyager::image($slide->bk_image) }}');">
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
                                                        <img class="rotate360" data-src="{{ asset('assets/img/shape/heroShape2_1.png') }}"
                                                             alt="{{ $slide->getTranslatedAttribute('title')  }}">
                                                    </a>
                                                </div>
                                            @else
                                                <img data-src="{{ Voyager::image($slide->file_media_path_original) }}"
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

    <!-- Project Section Start -->
    <section class="Project-details-section fix ">
        <div class="container">
            <div class="service-details-items">
                <div class="details-content">
                    {!! $section->getTranslatedAttribute('description') !!}
                </div>
            </div>
        </div>

    </section>
    <section class="service-section  fix">
        <div class="service-container-wrapper style1">
            <div class="container">
                <div class="title-wrap mb-45">
                    <div class="section-title">
                        <div class="subtitle">
                            <img data-src="{{ asset('assets/img/icon/arrowLeft.svg') }}" alt="icon">
                            <span> {{ trans('general.system-features')  }} </span>
                            <img data-src="{{ asset('assets/img/icon/arrowRight.svg') }}" alt="icon">
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
                                                <img data-src="{{ Voyager::image($feature->icon) }}"
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
                                                @if($link !='#')
                                                <a href="{{ $link }}" class="link-btn style1">
                                                    {{ trans('general.read-more') }} <i class="fa-regular fa-chevrons-{{ app()->getLocale() == 'ar' ? 'Left' : 'Right' }}"></i>
                                                </a>
                                                @endif
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
