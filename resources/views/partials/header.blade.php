<header class="header-area-2">
    <div class="header-main">
        <div class="container large">
            <div class="header-area-2__inner">

                {{-- LOGO --}}
                <div class="header__logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/imgs/logo/logo-new.png') }}"
                             class="normal-logo"
                             alt="Site Logo">
                    </a>
                </div>

                {{-- NAV --}}
                <div class="header__nav pos-center">
                    <nav class="main-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Overview</a></li>
                            <li><a href="{{ route('about') }}">Agency</a></li>
                            
                            <li>
                                <a href="{{ route('services') }}">Solutions +</a>
                                <ul class="dp-menu">
                                    <li><a href="{{ route('services.digital-growth') }}">Digital Growth</a></li>
                                    <li><a href="{{ route('services.creative-animation') }}">Creative & Animation</a></li>
                                    <li><a href="{{ route('services.it-development') }}">IT & Development</a></li>
                                    <li><a href="{{ route('services.bpo-operations') }}">BPO & Operations</a></li>
                                    <li><a href="{{ route('services.digital-forensics-assurance') }}">
                                        Digital Forensics & Assurance
                                    </a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="#">Insights +</a>
                                <ul class="dp-menu">
                                    <li><a href="{{ route('blog') }}">Insights</a></li>
                                    <li><a href="{{ route('careers') }}">Talent</a></li>
                                    <li><a href="{{ route('faqs') }}">Help</a></li>
                                </ul>
                            </li>
                            
                            <!-- <li><a href="{{ route('form') }}">Free Audit</a></li> -->
                            <li><a href="{{ route('contact') }}">Connect</a></li>
                        </ul>
                    </nav>
                </div>

                {{-- CTA BUTTON --}}
                <div class="header__button">
                    <a href="{{ route('contact') }}" class="rr-btn">
                        <span class="btn-wrap">
                            <span class="text-one">Book a Free Consultation</span>
                            <span class="text-two">Book a Free Consultation</span>
                        </span>
                    </a>
                </div>

                {{-- MOBILE MENU ICON --}}
                <div class="header__navicon">
                    <button class="side-toggle">
                        <img src="{{ asset('assets/imgs/icon/icon-2.webp') }}" alt="menu">
                    </button>
                </div>

            </div>
        </div>
    </div>
</header>
