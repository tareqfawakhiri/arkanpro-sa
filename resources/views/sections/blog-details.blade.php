@extends('layout.main')

@section('title', $post->seo_title ? $post->seo_title : $post->getTranslatedAttribute('title'))
@section('meta_description',$post->meta_description ? $post->meta_description : setting('site.description'))
@section('meta_keywords',$post->meta_keywords ? $post->meta_keywords : setting('site.keywords'))

@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url({{ asset('assets/img/breadcrumb.jpg') }}">
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
                    <div class="col-12 col-lg-8">
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
                                                {{ $post->category->name }}
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
                                        <span class="me-3">Share:</span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Search here">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul>
                                        <li><a href="#">Database Security <span>(08)</span></a></li>
                                        <li><a href="#">IT Consultancy <span>(11)</span></a></li>
                                        <li class="active"><a href="#">App
                                                Development <span>(12)</span></a></li>
                                        <li><a href="#">UI/UX Design <span>(18)</span></a></li>
                                        <li><a href="#">Cyber Security <span>(07)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Recent Post</h3>
                                </div>
                                <div class="recent-post-area">
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="{{ asset('assets/img/news/pp3.jpg') }}" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    18 Dec, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="#">
                                                    Keep Your Business Safe & <br>
                                                    Endure High Availability
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="{{ asset('assets/img/news/pp4.jpg') }}" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    18 Dec, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="#">
                                                    Tacking the Changes of <br>
                                                    Retail Industry
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="{{ asset('assets/img/news/pp5.jpg') }}" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    18 Dec, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="#">
                                                    What’s the Holding Back <br>
                                                    the It Solution
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Tags</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <div class="tagcloud">
                                        <a href="#">News</a>
                                        <a href="#">business</a>
                                        <a href="#">marketing</a>
                                        <a href="#">solution</a>
                                        <a href="#">SMM</a>
                                        <a href="#">strategy</a>
                                        <a href="#">SEO</a>
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
