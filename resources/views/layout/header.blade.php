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
<!--<< Mouse Cursor Start >>-->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-lg-block">
                    Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat
                    leo
                    urna eget eros. Duis Aenean a imperdiet risus.
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                            </div>
                        </li>

                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:info@azent.com"><span
                                        class="mailto:info@example.com">info@example.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+11002345909">+11002345909</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="contact.html" class="theme-btn text-center">
                            <span>get A Quote<i class="fa-solid fa-arrow-right-long me-2"></i></span>
                        </a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                <img src="{{ asset('assets/img/logo.png') }}" alt="logo-img">
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
                                            <a href="{{ route('services') }}">{{ trans('general.services') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('products') }}">{{ trans('general.products') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('customer.service') }}">{{ trans('general.customer-service') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog.all') }}">{{ trans('general.blog') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about-us') }}">{{ trans('general.about-us') }}</a>
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

                        @if (session()->get('locale') == 'en')
                            <a class="menu-thumb" href="{{ route('change-language') }}?lang=ar">
                                <b>العربية</b>
                            </a>
                        @else
                            <a class="menu-thumb" href="{{ route('change-language') }}?lang=en">
                                <b>English</b>
                            </a>
                        @endif


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
