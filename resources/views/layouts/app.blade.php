<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Redox HTML Template">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Fortune Tech Services')</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/imgs/logo/favicon.png') }}">

    <!-- {{-- Vendor CSS --}} -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css">
    <link rel="stylesheet" href="https://unpkg.com/air-datepicker@3.2.1/air-datepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- {{-- Main CSS --}} -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="body-wrapper dark body-digital-agency font-heading-instrumentsans-medium">

    <!-- Preloader -->
    <div id="preloader">
        <div id="container" class="container-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>

            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>

    <!-- Sroll to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

    <!-- cursorAnimation start -->
    <div class="cursor-wrapper relative">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
    <!-- cursorAnimation end -->

    <!-- side toggle start -->
    <aside class="fix">
        <div class="side-info">
            <div class="side-info-content">
                <div class="offset-widget offset-header">
                    <div class="offset-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/imgs/logo/logo-new.png') }}" alt="site logo">
                        </a>
                    </div>
                    <button id="side-info-close" class="side-info-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="mobile-menu d-xl-none fix"></div>
                <div class="offset-button">
                    <a href="/Contact.html" class="rr-btn hover-bg-theme">
                        <span class="btn-wrap">
                            <span class="text-one"> Book Consult</span>
                            <span class="text-two"> Book Consult</span>
                        </span>
                    </a>
                </div>
                <div class="offset-widget-box">
                    <h2 class="title">Contact US</h2>
                    <div class="contact-meta">
                        <div class="contact-item">
                            <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                            <span class="text">UAE</span>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="fa-solid fa-phone"></i></span>
                            <span class="text"><a href="tel:+971524069690">(+971) 52 406 9690</a></span>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                            <span class="text">Pakistan</span>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="fa-solid fa-phone"></i></span>
                            <span class="text"><a href="tel:+923219880011">(+92) 321 988 0011</a></span>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                            <span class="text"><a href="mailto:connect@fortunetechservices.com">connect@fortunetechservices.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="offcanvas-overlay"></div>
    <!-- side toggle end -->

    <!-- Header area end -->

    @include('partials.header')

    <div class="has-smooth" id="has_smooth"></div>
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <main>
                @yield('content')
            </main>

            @include('partials.footer')

        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/TextPlugin.js') }}"></script>
    <script src="{{ asset('assets/vendor/customEase.js') }}"></script>
    <script src="{{ asset('assets/vendor/Flip.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/backToTop.js') }}"></script>
    <script src="{{ asset('assets/vendor/matter.js') }}"></script>
    <script src="{{ asset('assets/vendor/throwable.js') }}"></script>
    <script src="{{ asset('assets/js/magiccursor.js') }}"></script>
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://unpkg.com/air-datepicker@3.2.1/air-datepicker.css">
    <script src="https://unpkg.com/air-datepicker@3.2.1/air-datepicker.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>