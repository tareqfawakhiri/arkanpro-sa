@extends('layout.main')
@section('title', trans('general.customer-service'))
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ trans('general.customer-service') }}</h1>
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
                        {{ trans('general.customer-service') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contact Section Start -->
    <section class="contact-section fix section-padding">
        <div class="container">
            <div class="contact-wrapper">
                <div class="arrow-shape">
                    <img src="{{ asset('assets/img/arrow-shape.png') }}" alt="shape-img">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-image wow fadeInUp" data-wow-delay=".4s">

                            @if(setting('site.customer-service-image'))
                                <img src="{{ Voyager::image(setting('site.customer-service-image')) }}" alt="customer-service-img" width="594px">
                            @else
                                <img src="{{ asset('assets/img/contact.png') }}" alt="customer-service-img">
                            @endif

                            <div class="cricle-shape">
                                <img src="{{ asset('assets/img/circle-shape.png') }}" alt="shape-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <div class="section-title mb-40 mxw-650">
                                <div class="subtitle">
                                    <img src="{{ asset('assets/img/icon/arrowLeftWhite.svg') }}" alt="icon">
                                    <span class="text-white">
                                        {{ trans('general.talk-to-us') }}
                                    </span>
                                    <img src="{{ asset('assets/img/icon/arrowRightWhite.svg') }}" alt="icon">
                                </div>
                                <h2 class="title text-white"> {{ trans('general.how-may-we-help-you') }} </h2>
                            </div>

                            <form action="{{ route('customer.service.send') }}" class="contact-form" id="contact-form"
                                  method="POST">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-lg-12  ">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name"
                                                   value="{{ old('name') }}"
                                                   placeholder="{{ trans('contact-us.your-name') }}">
                                            @error('name')
                                            <div style="color: red;">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12  ">
                                        <div class="form-clt">
                                            <input type="tel" name="phone_number" id="phone"
                                                   value="{{ old('phone_number') }}"
                                                   style="direction: {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }};"
                                                   placeholder="{{ trans('contact-us.your-phone') }}">
                                            @error('phone_number')
                                            <div style="color: red;">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12  ">
                                        <div class="form-clt">
                                            <div class="form-clt">
                                                <input type="email" name="email" id="email"
                                                       value="{{ old('email') }}"
                                                       placeholder="{{ trans('contact-us.your-email') }}">
                                                @error('email')
                                                <div style="color: red;">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12  ">
                                        <div class="form-clt">
                                            <div class="form-clt">
                                                <input type="message" name="message" id="message"
                                                       value="{{ old('message') }}"
                                                       placeholder="{{ trans('contact-us.your-message') }}">
                                                @error('message')
                                                <div style="color: red;">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    @if(session('success'))
                                        <div style="color: white;">{{ session('success') }}</div>
                                    @endif

                                    <div class="col-lg-12 btn-text-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}">
                                        <button type="submit" class="theme-btn">
                                            {{ trans('contact-us.send') }}
                                            <i class="fa-solid fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        select, .single-select, .form-control, .form-select, textarea, input {
            background-color: white;
            color: black;
        }
    </style>
@endsection
