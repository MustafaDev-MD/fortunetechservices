<!-- footer area start -->
<footer class="footer-area">
    <div class="container large">

        {{-- TOP --}}
        <div class="footer-top-inner">
            <div class="footer-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/imgs/logo/logo-new.png') }}" alt="site-logo">
                </a>
            </div>

            <div class="info-text">
                <div class="text-wrapper">
                    <p class="text">
                        Fortune Tech Services is your unified global partner, fusing Digital Growth,
                        IT, specialized Digital Forensics, and 24/7 BPO Operations into one seamless
                        engine. We provide the strategic clarity and technical power you need to scale
                        with absolute confidence.
                    </p>
                </div>

                <div class="info-link">
                    <a href="mailto:connect@fortunetechservices.com">
                        connect@fortunetechservices.com
                    </a>
                </div>
            </div>
        </div>

        {{-- WIDGETS --}}
        <div class="footer-widget-wrapper-box">
            <div class="footer-widget-wrapper">

                {{-- NEWSLETTER --}}
                <div class="footer-widget-box newsletter">
                    <form action="{{ route('subscribe') }}" method="POST" class="subscribe-form">
                        @csrf
                        <div class="input-field">
                            <input type="email" name="email" placeholder="Enter your email" required>
                            <button type="submit" class="subscribe-btn">
                                <img src="{{ asset('assets/imgs/icon/icon-1.webp') }}" alt="send">
                            </button>
                        </div>
                    </form>

                    <div class="subscription-text">
                        <p class="text">
                            By subscribing you agree with our
                            <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
                        </p>
                    </div>
                </div>

                {{-- QUICK LINKS --}}
                <div class="footer-widget-box">
                    <h2 class="title">Quick Links</h2>
                    <ul class="footer-nav-list">
                        <li><a href="{{ route('home') }}">Overview</a></li>
                        <li><a href="{{ route('services') }}">Solutions</a></li>
                        <li><a href="{{ route('faqs') }}">Help</a></li>
                        <li><a href="{{ route('contact') }}">Connect</a></li>
                    </ul>
                </div>

                {{-- SOCIAL --}}
                <div class="footer-widget-box">
                    <h2 class="title">Social</h2>
                    <ul class="footer-nav-list">
                        <li>
                            <a href="https://www.facebook.com/FortuneTechServices"
                                target="_blank">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/fortunetechservices"
                                target="_blank">
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/fortune-tech-services"
                                target="_blank">
                                Linkedin
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- OFFICE --}}
                <div class="footer-widget-box">
                    <h2 class="title">Office</h2>
                    <ul class="footer-nav-list">
                        <li><a href="javascript:void(0)">UAE</a></li>
                        <li><a href="javascript:void(0)">Pakistan</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    {{-- COPYRIGHT --}}
    <div class="copyright-area">
        <div class="copyright-area-inner">
            <div class="copyright-text">
                <p class="text">
                    © {{ date('Y') }}
                    <a href="{{ route('home') }}">Fortune Tech</a>
                    All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->