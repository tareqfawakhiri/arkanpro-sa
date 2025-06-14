@extends('layout.main')

@section('title', setting('partner.seo-title') ? setting('partner.seo-title') : trans('general.partner'))
@section('meta_description',setting('partner.meta-description') ? setting('partner.meta-description') : setting('site.description'))
@section('meta_keywords',setting('partner.meta-keywords') ? setting('partner.meta-keywords') : setting('site.keywords'))

@section('content')
    <section class="about-section section-padding fix bg-cover"
             style="background-image: url('{{ asset("assets/img/service/service-bg-2.jpg") }}');">
        <div class="container">
            <div class="about-wrapper style-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="counter-shape float-bob-y">
                                @if(setting('partner.image_1'))
                                    <div class="icon">
                                        <img src="{{ Voyager::image(setting('partner.image_1')) }}" alt="{{ setting('partner.seo-title') }}">
                                    </div>
                                @else
                                    <div class="icon">
                                        <img src="{{ asset("assets/img/about/icon-3.svg") }}" alt="{{ setting('partner.seo-title') }}">
                                    </div>
                                @endif
                            </div>
                            <div class="about-image-1 bg-cover wow fadeInLeft" data-wow-delay=".3s"
                                 style="background-image: url('{{ asset("assets/img/about/03.png") }}');">
                                <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s"
                                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    @if(setting('partner.image_2'))
                                        <div class="icon">
                                            <img src="{{ Voyager::image(setting('partner.image 2')) }}" alt="{{ setting('partner.seo-title') }}">
                                        </div>
                                    @else
                                        <div class="icon">
                                            <img src="{{ asset("assets/img/about/04.jpg") }}" alt="{{ setting('partner.seo-title') }}">
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="about-content">
                            <h2 class="mb-2">{{ trans('general.become-partner') }}</h2>
                            <p>{{ trans('general.become-partner-desc') }}</p>
                            <form action="{{ route('partner.send') }}" id="contact-form" method="POST"
                                  class="card g-4 mt-4">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 wow fadeInUp mb-4" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                                       placeholder="{{ trans('partner.your-name') }}">
                                                @error('name')
                                                <div style="color: red;">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp mb-4" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="company" id="company"
                                                       value="{{ old('company') }}"
                                                       placeholder="{{ trans('partner.your-company') }}">
                                                @error('company')
                                                <div style="color: red;">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp mb-4" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="tel" name="phone" id="phone"
                                                       value="{{ old('phone') }}"
                                                       style="direction: {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }};"
                                                       placeholder="{{ trans('partner.your-phone') }}">
                                                @error('phone')
                                                <div style="color: red;">{{ $message }}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 wow fadeInUp mb-4" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email" value="{{ old('email') }}"
                                                       placeholder="{{ trans('partner.your-email') }}">
                                                @error('email')
                                                <div style="color: red;">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp mb-4" data-wow-delay=".7s">
                                            <div class="form-clt">
                                            <textarea name="message" id="message"
                                                      placeholder="{{ trans('partner.your-message') }}">{{ old('message') }}</textarea>
                                                @error('message')
                                                <div style="color: red;">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        @if(session('success'))
                                            <div style="color: green;">{{ session('success') }}</div>
                                        @endif

                                        <div class="col-lg-7 wow fadeInUp mb-4" data-wow-delay=".9s">
                                            <button type="submit" class="theme-btn">
                                                {{ trans('partner.send') }}
                                                <i class="fa-solid fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}-long"></i>
                                            </button>
                                        </div>
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
            color: black !important;
        }
    </style>
@endsection
