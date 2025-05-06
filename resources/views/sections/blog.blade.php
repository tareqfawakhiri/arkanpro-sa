@extends('layout.main')
@section('title', 'Blog')
@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover">
        <div class="border-shape">
            <img src="{{ asset('assets/img/element.png') }}" alt="shape-img">
        </div>
        <div class="line-shape">
            <img src="{{ asset('assets/img/line-element.png') }}" alt="shape-img">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ trans('general.blog') }}</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ route('home') }}">
                            {{ trans('general.home') }}
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                    </li>
                    <li>
                        {{ trans('general.blog') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- News Section Start -->
    <section class="news-section-4 fix section-padding">
        <div class="container">
            <div class="row g-4">
                @foreach($posts as $post)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-card-items style-2 mt-0 pb-0">
                            <div class="news-image">
                                <img src="{{ Voyager::image($post->thumbnail('cropped')) }}" alt="news-img"
                                     style="height:240px">
                                <div class="post-date">
                                    <h3>{!! $post->getDateTime !!}</h3>
                                </div>
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        {{ $post->author->name ?? '' }}
                                    </li>
                                    @if($post->category)
                                        <li>
                                            <i class="fa-solid fa-tag"></i>
                                            {{ $post->category->name ?? '' }}
                                        </li>
                                    @endif
                                </ul>
                                <h3>
                                    <a href="{{ route('blog.details',$post->slug) }}">{{ $post->getTranslatedAttribute('title') }}</a>
                                </h3>
                                <a href="{{ route('blog.details',$post->slug) }}"
                                   class="theme-btn-2 mt-3">
                                    {{ trans('general.read-more') }}
                                    <i class="fa-solid fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="page-nav-wrap pt-5 text-center wow fadeInUp" data-wow-delay=".3s">
                {!! $posts->links()  !!}
            </div>
        </div>
    </section>

@endsection
