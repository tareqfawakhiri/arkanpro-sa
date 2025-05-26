@if(isset($isHome) && $isHome == true)
    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
            <span data-text-preloader="A" class="letters-loading">
               A
            </span>
                <span data-text-preloader="R" class="letters-loading">
               R
            </span>
                <span data-text-preloader="K" class="letters-loading">
               K
            </span>
                <span data-text-preloader="A" class="letters-loading">
               A
            </span>
                <span data-text-preloader="N" class="letters-loading">
               N
            </span>
                <span data-text-preloader="PRO" class="letters-loading">
               PRO
            </span>
            </div>
            <p class="text-center">{{ trans('general.loading') }}</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-{{ app()->currentLocale() == 'ar' ? 'right' : 'left' }}">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-{{ app()->currentLocale() == 'ar' ? 'right' : 'left' }}">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-{{ app()->currentLocale() == 'ar' ? 'left' : 'right' }}">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-{{ app()->currentLocale() == 'ar' ? 'left' : 'right' }}">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
@endif
<!--<< Mouse Cursor Start >>-->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<!-- Offcanvas Area Start -->

<div class="offcanvas__overlay"></div>
<!-- Header Section Start -->
<header>
    <div id="header-sticky" class="header-1">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main style-2">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ route('home') }}" class="header-logo">
                                <img data-src="{{ asset('assets/img/logo.png') }}" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-middle">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="{{ route('home') }}">{{ trans('general.home') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('quroosh') }}">{{ trans('general.quroosh') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('products') }}">{{ trans('general.products') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('customer.service') }}">{{ trans('general.customer-service') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('page.details',['about-us']) }}">{{ trans('general.about-us') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog.all') }}">{{ trans('general.blog') }}</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        @if (session()->get('theme') == 'light')
                            <a class="menu-thumb" href="{{ route('change-theme') }}?theme=dark">
                                <i class="fa-solid fa-moon"></i>
                            </a>
                        @else
                            <a class="menu-thumb" href="{{ route('change-theme') }}?theme=light">
                                <i class="fa-solid fa-sun"></i>
                            </a>
                        @endif

                        {{--                        @if (session()->get('locale') == 'en')--}}
                        {{--                            <a class="menu-thumb" href="{{ route('change-language') }}?lang=ar">--}}
                        {{--                                <b>العربية</b>--}}
                        {{--                            </a>--}}
                        {{--                        @else--}}
                        {{--                            <a class="menu-thumb" href="{{ route('change-language') }}?lang=en">--}}
                        {{--                                <b>English</b>--}}
                        {{--                            </a>--}}
                        {{--                        @endif--}}


                        <div class="header-button ms-4">
                            <a href="/contact-us" class="gt-btn">
                               <span>
                                  {{ trans('general.contact-us') }}
                                  <i class="fa-solid fa-arrow-{{ app()->currentLocale() == 'ar' ? 'left' : 'right' }}-long me-2"></i>
                               </span>
                            </a>
                        </div>
                        <div class="header__hamburger d-block d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
