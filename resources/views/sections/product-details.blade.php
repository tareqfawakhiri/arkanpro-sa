@extends('layout.main')

@section('title', $product->seo_title ? $product->seo_title : $product->getTranslatedAttribute('title'))
@section('meta_description',$product->meta_description ? $product->meta_description : setting('site.description'))
@section('meta_keywords',$product->meta_keywords ? $product->meta_keywords : setting('site.keywords'))


@section('content')
@php
    $media_banner = $product->file_media_path_original;
@endphp
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url({{ Voyager::image($media_banner) }})">
        <div class="border-shape">
            <img data-src="{{ asset('assets/img/element.png') }}" >
        </div>
        <div class="line-shape">
            <img data-src="{{ asset('assets/img/line-element.png') }}" >
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $product->getTranslatedAttribute('title') }}</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ route('home') }}">
                            {{ trans('general.home') }}
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        {{ trans('products.product-details') }}
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
                                <img data-src="{{ Voyager::image($product->image_details) }}" alt="img">
                            </div>
                            <div class="row g-4 justify-content-between">
                                <div class="col-lg-7">

                                </div>
                                <div class="col-lg-4">
                                    <div class="project-catagory">
                                        <h3 style="color:#000;">{{ trans('products.product-info') }}: </h3>
                                        <ul>
                                            <li style="color:#000;">
                                                {{ trans('products.product-name') }}:
                                                <span>{{ $product->getTranslatedAttribute('title') }}</span>
                                            </li>
                                            <li style="color:#000;">
                                                {{ trans('products.product-category') }}:
                                                <span>{{ $product->getTranslatedAttribute('excerpt') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {!! $product->getTranslatedAttribute('description') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
