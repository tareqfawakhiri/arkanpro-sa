<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
      data-bs-theme="{{ session()->get('theme') ?? 'light' }}">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content-ie="edge"/>



    <meta name="keywords" content="@yield('meta_keywords',setting('site.keywords'))">
    <meta name="description" content="@yield('meta_description',setting('site.description'))">
    @yield('meta_tags')
    <!-- ======== Page title ============ -->
    <title>Arkan Pro &#8211; أركان الاحتراف | @yield('title', setting('site.title'))</title>

    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <!--<< Bootstrap min.css >>-->

    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">


    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/rtl-bootstrap.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    @endif

    <link rel="stylesheet"
          href="https://old.formvalidation.io/vendor/intl-tel-input/build/css/intlTelInput.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!--<< Main.css >>-->
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/rtl-main.css') }}?1">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @endif
</head>

<body>

@include('layout.header')
@yield('content')
@include('layout.footer')

<!--<< All JS Plugins >>-->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<!--<< Viewport Js >>-->
<script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
<!--<< Bootstrap Js >>-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--<< Nice Select Js >>-->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!--<< Waypoints Js >>-->
<script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
<!--<< Counterup Js >>-->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!--<< Swiper Slider Js >>-->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<!--<< MeanMenu Js >>-->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<!--<< Magnific Popup Js >>-->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!--<< Wow Animation Js >>-->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css"/>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js"></script>

<!-- cdnjs -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script>
    $(document).ready(function () {
        $("img").lazy({
            effect: "fadeIn",
            effectTime: 1000,
            threshold: 200
        });
    });
</script>

<!--<< Main.js >>-->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>

    const phoneInput = document.querySelector("#phone");
    const iti = window.intlTelInput(phoneInput, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
        autoPlaceholder: true,
        preferredCountries: ['sa'],
        nationalMode: false,
    });

    // Validation on blur or form submitting
    phoneInput.addEventListener('blur', function () {
        if (phoneInput.value.trim()) {
            if (iti.isValidNumber()) {
                phoneInput.setCustomValidity('');
                phoneInput.style.borderColor = 'green';
            } else {
                phoneInput.setCustomValidity('Invalid phone number.');
                phoneInput.reportValidity();
                phoneInput.style.borderColor = 'red';
            }
        }
    });

</script>
</body>

</html>
