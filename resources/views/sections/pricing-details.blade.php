@extends('layout.main')

@section('title', $pricing->seo_title ? $pricing->seo_title : $pricing->getTranslatedAttribute('title'))
@section('meta_description',$pricing->meta_description ? $pricing->meta_description : setting('site.description'))
@section('meta_keywords',$pricing->meta_keywords ? $pricing->meta_keywords : setting('site.keywords'))


@section('content')
@php
    $amount=($pricing->amount + $pricing->fees);
    $vat=((($amount) * 15)/100);
    $amount_before_discount=$pricing->amount_before_discount ? ($pricing->amount_before_discount - $pricing->amount) : 0;
    $vat_discount=((($amount_before_discount) * 15)/100);
@endphp
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover">
        <div class="border-shape">
            <img data-src="{{ asset('assets/img/element.png') }}" >
        </div>
        <div class="line-shape">
            <img data-src="{{ asset('assets/img/line-element.png') }}" >
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ trans('pricing.order-summary') }}</h1>

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
                            <div class="row g-4 justify-content-between">
                                <div class="col-lg-7">
                                    <div class="pricing-card style1" style="margin-top:-90px;padding:unset;">
                                    <div class="pricing-card_header">
                                        <div class="item">
                                            <h4>{{ $pricing->getTranslatedAttribute('title') }}</h4>

                                        </div>

                                    </div>
                                    <div class="pricing-card_body">
                                        <div class="checklist-wrapper">
                                        @foreach($pricing->pricing_check as $check)
                                            <ul class="checklist style1">
                                                <li><img data-src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}" alt="icon">
                                                @if(app()->getLocale() == 'ar')
                                                    {{ $check->title_ar }}
                                                @else
                                                    {{ $check->title }}
                                                @endif
                                                </li>

                                            </ul>
                                        @endforeach
                                        @foreach($pricing->pricing_uncheck as $uncheck)
                                        @if($uncheck->title)
                                            <ul class="checklist style1">
                                                <li><img data-src="{{ asset('assets/img/icon/crossIcon.svg') }}" alt="icon">
                                                @if(app()->getLocale() == 'ar')
                                                    {{ $uncheck->title_ar }}
                                                @else
                                                    {{ $uncheck->title }}
                                                @endif
                                                </li>
                                            </ul>
                                        @endif
                                        @endforeach
                                        </div>
                                        <div class="btn-wrapper">

                                                <form action="https://cpe-soft.com/arkanmerchant/" method="POST">
                                                    <input type="hidden" name="amt" id="amt" value="{{ $pricing->amount + $pricing->fees }}">
                                                    <button type="submit" class="gt-btn style3 w-100">{{ trans('pricing.continue') }} <i
                                                        class="fa-sharp fa-light fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}-long"></i></button>
                                                </form>

                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="project-catagory">
                                        <h3 style="color:#000;margin-top: 30px;">{{ trans('pricing.payment-details') }}: </h3>
                                        <ul>
                                            <li style="color:#000;">
                                                {{ trans('pricing.amount_before_discount') }}:
                                                <span>SR{{ (($amount - $vat) + ($amount_before_discount - $vat_discount)) }}</span>
                                            </li>
                                            <li style="color:#000;">
                                                {{ trans('pricing.total-discounts') }}:
                                                <span>SR{{ ($amount_before_discount -$vat_discount) }}</span>
                                            </li>
                                            <li style="color:#000;">
                                                {{ trans('pricing.sub-total') }}:
                                                <span>SR{{ ($amount - $vat) }}</span>
                                            </li>
                                            <li style="color:#000;">
                                                {{ trans('pricing.total-vat') }}:
                                                <span>SR{{ $vat }}</span>
                                            </li>
                                            <li style="color:#000;">
                                                {{ trans('pricing.total') }}:
                                                <span>SR{{ $amount }}</span>
                                            </li>
                                        </ul>
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
