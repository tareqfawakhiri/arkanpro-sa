@extends('layout.main')

@section('title', $post->seo_title ? $post->seo_title : $post->getTranslatedAttribute('title'))
@section('meta_description',$post->meta_description ? $post->meta_description : setting('site.description'))
@section('meta_keywords',$post->meta_keywords ? $post->meta_keywords : setting('site.keywords'))

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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $post->getTranslatedAttribute('title') }}</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ route('home') }}">
                            {{ trans('general.home') }}
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-{{ app()->getLocale() != 'ar' ? 'right' : 'left' }}"></i>
                    </li>
                    <li>
                        {{ trans('general.blog-details') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- News Standard Section Start -->
    <section class="news-standard fix section-padding">
        <div class="container">
            <div class="news-details-area">
                <div class="row g-5">
                    <div class="col-12 col-lg-12">
                        <div class="blog-post-details">
                            <div class="single-blog-post">
                                <div class="post-featured-thumb bg-cover"
                                     style="background-image: url('{{ Voyager::image($post->image) }}');"></div>
                                <div class="post-content">
                                    <ul class="post-list d-flex align-items-center">
                                        <li>
                                            <i class="fa-regular fa-user"></i>
                                            {{ $post->author->name }}
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            {{ $post->created_at }}
                                        </li>
                                        @if($post->category)
                                            <li>
                                                <i class="fa-solid fa-tag"></i>
                                                {{ $post->category->name ?? ''}}
                                            </li>
                                        @endif

                                    </ul>
                                    {!! $post->body !!}
                                </div>
                            </div>
                            <div class="row tag-share-wrap mt-4 mb-5">
                                <div class="col-lg-8 col-12">
                                </div>
                                <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                    <div class="social-share">
                                        <span class="me-3">{{ trans('general.share') }}:</span>
                                        <a href="{{ setting('social-media.facebook_url') }}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ setting('social-media.twitter_url') }}"><i class="fab fa-x"></i></a>
                                        <a href="{{ setting('social-media.linkedin_url') }}"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
