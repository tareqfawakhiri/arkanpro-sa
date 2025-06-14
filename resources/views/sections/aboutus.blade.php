@extends('layout.main')
@section('title', $section->seo_title ? $section->seo_title : trans('general.about-us'))
@section('meta_description',$section->meta_description ? $section->meta_description : setting('site.description'))
@section('meta_keywords',$section->meta_keywords ? $section->meta_keywords : setting('site.keywords'))
@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url({{ Voyager::image($page->image) }});">
        <div class="border-shape">
            <img data-src="{{ asset('assets/img/element.png') }}" >
        </div>
        <div class="line-shape">
            <img data-src="{{ asset('assets/img/line-element.png') }}" >
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ trans('general.about-us') }}</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ route('home') }}">
                            {{ trans('general.home') }}
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-{{ app()->getLocale() =='ar' ? 'left' : 'right' }}"></i>
                    </li>
                    <li>
                        {{ trans('general.about-us') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- About Section Start -->
    <section class="about-section section-padding fix bg-cover">
        <div class="container">
            {!! $page->getTranslatedAttribute('body') !!}
        </div>
    </section>
@endsection
