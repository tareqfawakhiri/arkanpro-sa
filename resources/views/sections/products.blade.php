@extends('layout.main')
@section('title', 'Products')
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ trans('general.products') }}</h1>
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
                    {{ trans('general.products') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Project Section Start -->
    <section class="project-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                @foreach($products as $product)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-items">
                        <div class="project-image">
                            <img src="{{ Voyager::image($product->thumbnail('cropped')) }}" alt="project-img">
                            <div class="project-content style2">
                                <p>{{ $product->getTranslatedAttribute('excerpt') }}</p>
                                <h4>
                                    <a href="{{ route('product.details',$product->slug) }}">{{ $product->getTranslatedAttribute('title') }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
