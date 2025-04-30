<!-- Pricing Section   S T A R T -->
<section class="pricing-section fix section-padding">
        <div class="pricing-wrapper style1">
            <div class="shape1 d-none d-xxl-block"><img src="{{ asset('assets/img/shape/pricingShape1_1.png') }}" alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img src="{{ asset('assets/img/shape/pricingShape1_2.png') }}" alt="shape"></div>
            <div class="container">
                <div class="section-title title-area  mx-auto mb-25">
                    <div class="subtitle d-flex justify-content-center"><img src="{{ asset('assets/img/icon/arrowLeft.svg') }}"
                                                                             alt="icon">
                        <span> {{ trans('pricing.our-pricing') }}
                  </span><img src="{{ asset('assets/img/icon/arrowRight.svg') }}" alt="icon">
                    </div>
                    <h2 class="title text-center">{{ trans('pricing.our-pricing-plan') }}</h2>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-monthly" role="tabpanel"
                         aria-labelledby="pills-monthly-tab">
                        <div class="row gy-5">
                            @foreach($pricing as $plane)
                            <div class="col-xl-4 col-md-6">
                            @if($plane->id !=2)
                                <div class="pricing-card style1">
                            @else
                                <div class="pricing-card style2">
                            @endif
                                    <div class="pricing-card_header">
                                        <div class="item">
                                            <h4>{{ $plane->getTranslatedAttribute('title') }}</h4>
                                            <div class="price">
                                                <h2>SR{{ $plane->amount }} </h2>
                                            </div>
                                            @if($plane->fees > 0)
                                                <div class="price">
                                                    <span>{{ trans('pricing.establishment-fees') }}</span>
                                                </div>
                                                <div class="price">
                                                    <h4>SR{{ $plane->fees }} </h4>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="item">
                                            <img src="{{ asset('assets/img/icon/pricingIcon1_1.svg') }}" alt="icon">
                                        </div>
                                    </div>
                                    <div class="pricing-card_body">
                                        <div class="checklist-wrapper">
                                        @foreach($plane->pricing_check as $check)
                                            <ul class="checklist style1">
                                                <li><img src="{{ asset('assets/img/icon/checkmarkIcon.svg') }}" alt="icon">
                                                @if(app()->getLocale() == 'ar')
                                                    {{ $check->title_ar }}
                                                @else
                                                    {{ $check->title }}
                                                @endif
                                                </li>

                                            </ul>
                                        @endforeach
                                        @foreach($plane->pricing_uncheck as $uncheck)
                                        @if($uncheck->title)
                                            <ul class="checklist style1">
                                                <li><img src="{{ asset('assets/img/icon/crossIcon.svg') }}" alt="icon">
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
                                            @if($plane->id !=2)
                                                <form action="https://cpe-soft.com/arkanmerchant/" method="POST">
                                                    <input type="hidden" name="amt" id="amt" value="{{ $plane->amount + $plane->fees }}">
                                                    <button type="submit" class="gt-btn style2 w-100">{{ trans('pricing.choose-plan') }} <i
                                                        class="fa-sharp fa-light fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}-long"></i></button>
                                                </form>
                                            @else
                                                <form action="https://cpe-soft.com/arkanmerchant/" method="POST">
                                                    <input type="hidden" name="amt" id="amt" value="{{ $plane->amount + $plane->fees }}">
                                                    <button type="submit" class="gt-btn style3 w-100">{{ trans('pricing.choose-plan') }} <i
                                                        class="fa-sharp fa-light fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}-long"></i></button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
