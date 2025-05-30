@extends('layout.main')
@section('title', $section->getTranslatedAttribute('title'))
@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url({{ Voyager::image($section->image) }});">
        <div class="border-shape">
            <img data-src="{{ asset('assets/img/element.png') }}" >
        </div>
        <div class="line-shape">
            <img data-src="{{ asset('assets/img/line-element.png') }}" >
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $section->getTranslatedAttribute('title') }}</h1>
            </div>
        </div>
    </div>

    <!-- Project Section Start -->
    <section class="Project-details-section fix section-padding">
        <div class="container">
            {!! $section->getTranslatedAttribute('body') !!}
        </div>
    </section>
@endsection
