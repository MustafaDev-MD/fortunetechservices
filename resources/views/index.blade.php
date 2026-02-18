@extends('layouts.app')

@section('title', 'Home | Fortune Tech')

@section('content')

<main>

    <!-- hero area start  -->
    <section class="hero-area">
        <div class="container large">
            <div class="hero-area-inner section-spacing-top">
                <div class="hero-content section-spacing-bottom">
                    <div class="award-wrapper fade-anim" data-delay="0.90" data-direction="left" data-ease="back.out(4)">
                        <div class="circle-text-wrapper">
                            <div class="circle-text">
                                <img src="{{ asset('assets/imgs/shape/shape-3.png') }}" alt=" image" class="text">
                                <img src="{{ asset('assets/imgs/shape/ROTATING-BADGE-FT (1).png') }}" alt=" image" class="icon">
                            </div>
                        </div>
                    </div>
                    <div class="section-header">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper">
                                <h2 class="section-title font-instrumentsans-medium char-anim" data-delay="0.45" style="background-image: url('assets/imgs/shape/icon-new-hero-01.webp');"> Stop juggling vendors.<br> Grow with
                                    <span>
                                        <!--                        <img class="title-shape-1 fade-anim" src="" alt="image"-->
                                        <!--data-direction="right" data-delay="1.80">-->
                                    </span><br>absolute power.
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="features-wrapper-box fade-anim" data-delay="0.75">
                            <div class="features-wrapper">
                                <div class="feature-box">
                                    <div class="content">
                                        <span class="number">12+ </span>
                                        <p class="text">Years Delivering integrated global solutions.</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="content">
                                        <span class="number">24/7</span>
                                        <p class="text">Readiness Active operations across global time zones</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-wrapper fade-anim" data-delay="0.75">
                            <p class="text">Tired of managing separate agencies? We fuse dynamic marketing, robust IT, mission-critical Digital Assurance, and reliable BPO into one assured, scalable engine.</p>
                        </div>
                    </div>
                </div>
                <div class="big-text-wrapper">
                    <h2 class="big-text">FortuneTech
                    </h2>
                </div>

            </div>
        </div>
    </section>
    <!-- hero area end  -->

    <!-- about area start  -->
    <section class="about-area ">
        <div class="container large">
            <div class="about-area-inner section-spacing">
                <div class="section-content">
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="shape-3"></div>
                    <div class="shape-4"></div>
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title font-instrumentsans-medium">Fortune Tech</h2>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text"> The reality is that complexity breeds vulnerability. Every additional vendor, software platform, and siloed team introduces friction and risk. Fortune Tech was engineered to eliminate this fragmentation, providing the total oversight required to scale globally. We don't just build, market, and support—we assure and fortify your entire digital truth.
                        </p>
                    </div>
                    <!-- <div class="btn-wrapper">
                        <a href="{{ route('contact') }}" class="rr-btn  btn-text-fli hover-bg-theme">
                            <span class="btn-wrap">
                                <span class="text-one">See Unified Growth</span>
                                <span class="text-two">See Unified Growth</span>
                            </span>
                        </a>
                    </div> -->
                    <div class="btn-wrapper" data-direction="right">
                        <a href="{{ route('contact') }}" class="rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">See Unified Growth</span>
                                <span class="text-two">See Unified Growth</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end  -->

    <!-- video-box  start -->

    <div class="text-slider-box fade-anim">
        <div class="text-slider">
            <div class="swiper text-slider-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="text-slider-item another">
                            <h2 class="title"><span class="dot"></span>AMPLIFY
                            </h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-slider-item">
                            <h2 class="title"><span class="dot"></span>ENGINEER
                            </h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-slider-item another">
                            <h2 class="title"><span class="dot"></span>FORTIFY
                            </h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-slider-item">
                            <h2 class="title"><span class="dot"></span>ENGAGE
                            </h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-slider-item another">
                            <h2 class="title"><span class="dot"></span>UNIFY
                            </h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-slider-item">
                            <h2 class="title"><span class="dot"></span>ASCEND
                            </h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-slider-item another">
                            <h2 class="title"><span class="dot"></span>ENGAGE
                            </h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-slider-item ">
                            <h2 class="title"><span class="dot"></span>FORTIFY
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- video-box  end -->


    <!-- service area start  -->
    <section class="service-area">
        <div class="container large">
            <div class="service-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper fade-anim">
                        <div class="title-wrapper">
                            <h2 class="section-title font-instrumentsans-medium word-anim">Integrated <br> Power
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="services-wrapper-box">
                    <div class="services-wrapper-1">
                        <div class="service-box fade-anim">
                            <div class="count"><span class="number">(01)</span></div>
                            <div class="content">
                                <h3 class="title"><a href="{{ route('services.digital-growth') }}">Digital Growth</a></h3>
                                <ul class="service-list">
                                    <li><a href="{{ route('services.digital-growth') }}">Social Media Management</a></li>
                                    <li><a href="{{ route('services.digital-growth') }}">PPC & Google Ads</a></li>
                                    <li><a href="{{ route('services.digital-growth') }}">SEO & Strategy</a></li>
                                    <li><a href="{{ route('services.digital-growth') }}">Email Marketing</a></li>
                                    <li><a href="{{ route('services.digital-growth') }}">Content Creation</a></li>
                                </ul>
                            </div>
                            <div class="thumb">
                                <img class="grow" src="{{ asset('assets/imgs/gallery/image-4.webp') }}" alt="image">
                            </div>
                        </div>

                        <div class="service-box fade-anim">
                            <div class="count"><span class="number">(02)</span></div>
                            <div class="content">
                                <h3 class="title"><a href="{{ route('services.creative-animation') }}">Creative & Animation</a></h3>
                                <ul class="service-list">
                                    <li><a href="{{ route('services.creative-animation') }}">Branding & Logos</a></li>
                                    <li><a href="{{ route('services.creative-animation') }}">2D Animation</a></li>
                                    <li><a href="{{ route('services.creative-animation') }}">Character & Mascot Design</a></li>
                                    <li><a href="{{ route('services.creative-animation') }}">Motion Graphics</a></li>
                                    <li><a href="{{ route('services.creative-animation') }}">Website Copywriting</a></li>
                                </ul>
                            </div>
                            <div class="thumb">
                                <img class="grow" src="{{ asset('assets/imgs/gallery/image-4.webp') }}" alt="image">
                            </div>
                        </div>

                        <div class="service-box fade-anim">
                            <div class="count"><span class="number">(03)</span></div>
                            <div class="content">
                                <h3 class="title"><a href="{{ route('services.it-development') }}">IT & Development</a></h3>
                                <ul class="service-list">
                                    <li><a href="{{ route('services.it-development') }}">Web Development</a></li>
                                    <li><a href="{{ route('services.it-development') }}">Mobile Apps (iOS/Android)</a></li>
                                    <li><a href="{{ route('services.it-development') }}">Custom Software (CRM/ERP)</a></li>
                                    <li><a href="{{ route('services.it-development') }}">Cybersecurity</a></li>
                                    <li><a href="{{ route('services.it-development') }}">Cloud & Server Mgmt</a></li>
                                </ul>
                            </div>
                            <div class="thumb">
                                <img class="grow" src="{{ asset('assets/imgs/gallery/image-5.webp') }}" alt="image">
                            </div>
                        </div>

                        <div class="service-box fade-anim">
                            <div class="count"><span class="number">(04)</span></div>
                            <div class="content">
                                <h3 class="title"><a href="{{ route('services.bpo-operations') }}">BPO & Operations</a></h3>
                                <ul class="service-list">
                                    <li><a href="{{ route('services.bpo-operations') }}">Inbound & Outbound Calls</a></li>
                                    <li><a href="{{ route('services.bpo-operations') }}">24/7 Customer Support</a></li>
                                    <li><a href="{{ route('services.bpo-operations') }}">Lead Generation</a></li>
                                    <li><a href="{{ route('services.bpo-operations') }}">Live Chat Support</a></li>
                                    <li><a href="{{ route('services.bpo-operations') }}">Virtual Assistance</a></li>
                                </ul>
                            </div>
                            <div class="thumb">
                                <img class="grow" src="{{ asset('assets/imgs/gallery/image-6.webp') }}" alt="image">
                            </div>
                        </div>

                        <div class="service-box fade-anim">
                            <div class="count"><span class="number">(05)</span></div>
                            <div class="content">
                                <h3 class="title"><a href="{{ route('services.digital-forensics-assurance') }}">Digital Forensics & Assurance</a></h3>
                                <ul class="service-list">
                                    <li><a href="{{ route('services.digital-forensics-assurance') }}">Computer & Mobile Forensics</a></li>
                                    <li><a href="{{ route('services.digital-forensics-assurance') }}">Network Investigations</a></li>
                                    <li><a href="{{ route('services.digital-forensics-assurance') }}">Litigation Support</a></li>
                                    <li><a href="{{ route('services.digital-forensics-assurance') }}">Forensic Training</a></li>
                                    <li><a href="{{ route('services.digital-forensics-assurance') }}">Lab Outfitting</a></li>
                                </ul>
                            </div>
                            <div class="thumb">
                                <img class="grow" src="{{ asset('assets/imgs/project/image-6.webp') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end  -->

    <!-- funfact area start  -->
    <section class="funfact-area fade-anim">
        <div class="container large">
            <div class="funfact-area-inner pin-area">
                <div class="section-header section-spacing-top pin-element">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title font-instrumentsans-medium word-anim">Operational <br> Mastery
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="funfact-wrapper-box section-spacing">
                    <span class="line-1"></span>
                    <span class="line-2"></span>
                    <span class="line-3"></span>
                    <span class="line-4"></span>
                    <div class="funfact-wrapper">
                        <div class="funfact-item go-visible">
                            <span class="number">$5M+</span>
                            <p class="text">Amplified revenue growth<br> delivered through unified digital <br>strategy and execution.</p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">99.99%</span>
                            <p class="text">Engineered Uptime on critical systems and support infrastructure.</p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">
                                < 30 Days</span>
                                    <p class="text"> Integration Velocity to full operational synergy across<br> all five pillars.</p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">12+ Years </span>
                            <p class="text">Architecting secure, integrated solutions for global scaling businesses.</p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">300+</span>
                            <p class="text">Unique brand identities & web experiences built to define<br> market leadership.</p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">100%</span>
                            <p class="text">Vendor-Chaos Elimination through our single, unified partnership.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact area end  -->

    <!-- work area start  -->
    <section class="work-area">

        <!-- text slider area start  -->
        <div class="text-slider-box fade-anim">
            <div class="text-slider">
                <div class="swiper text-slider-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="text-slider-item another">
                                <h2 class="title"><span class="dot"></span>AMPLIFY
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item">
                                <h2 class="title"><span class="dot"></span>ENGINEER
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item another">
                                <h2 class="title"><span class="dot"></span>FORTIFY
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item">
                                <h2 class="title"><span class="dot"></span>ENGAGE
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item another">
                                <h2 class="title"><span class="dot"></span>UNIFY
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item">
                                <h2 class="title"><span class="dot"></span>ASCEND
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item another">
                                <h2 class="title"><span class="dot"></span>ENGAGE
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item ">
                                <h2 class="title"><span class="dot"></span>FORTIFY
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-box">
            <video class="video-area" loop="" muted="" autoplay="" playsinline="">
                <source src="https://fortunetechservices.com/video.mp4" type="video/mp4">
                <!--<source src="https://rrdevs.net/project-video/group-meeting.mp4" type="video/mp4">-->
            </video>
        </div>

    </section>
    <!-- work area end  -->

    <!-- client area start  -->
    <section class="client-area">
        <div class="container large">
            <div class="client-area-inner section-spacing-top">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title font-instrumentsans-medium word-anim"><span>We Engineer</span> Your Operations. We Fortify Your Stack.</h2>
                        </div>
                    </div>
                    <div class="text-wrapper fade-anim">
                        <p class="text">The promise of integrated service demands mastery over every key platform. Our team is fluent in the latest development, collaboration, and marketing tools, alongside industry gold standards for Digital Forensics (OpenText EnCase, Magnet AXIOM, AccessData FTK). This fluency ensures all five operational pillars run on a single, clean track. We eliminate data silos and deliver seamless, transparent operations worldwide.</p>
                    </div>
                </div>
                <div class="client-capsule-wrapper-box" data-t-throwable-scene="true">
                    <div class="client-capsule-wrapper">
                        <p data-t-throwable-el="">
                            <span class="client-box bg-theme">
                                <img src="{{ asset('assets/imgs/client/TAB2-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box">
                                <img src="{{ asset('assets/imgs/client/TAB1-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box">
                                <img src="{{ asset('assets/imgs/client/TAB3-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box bg-theme">
                                <img src="{{ asset('assets/imgs/client/TAB4-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box">
                                <img src="{{ asset('assets/imgs/client/TAB5-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box">
                                <img src="{{ asset('assets/imgs/client/TAB7-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box bg-theme">
                                <img src="{{ asset('assets/imgs/client/TAB6-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box bg-theme">
                                <img src="{{ asset('assets/imgs/client/TAB15-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <!--                <p data-t-throwable-el="">-->
                        <!--                    <span class="client-box">-->
                        <!--  <img src="{{ asset('assets/imgs/client/TAB9-01.svg') }}" alt="image">-->
                        <!--</span>-->
                        <!--                </p>-->
                        <p data-t-throwable-el="">
                            <span class="client-box bg-theme">
                                <img src="{{ asset('assets/imgs/client/TAB10-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box">
                                <img src="{{ asset('assets/imgs/client/TAB11-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box bg-theme">
                                <img src="{{ asset('assets/imgs/client/TAB12-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box bg-theme">
                                <img src="{{ asset('assets/imgs/client/TAB17-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box">
                                <img src="{{ asset('assets/imgs/client/TAB13-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <!--                <p data-t-throwable-el="">-->
                        <!--                    <span class="client-box">-->
                        <!--  <img src="{{ asset('assets/imgs/client/TAB15-01.svg') }}" alt="image">-->
                        <!--</span>-->
                        <!--                </p>-->
                        <p data-t-throwable-el="">
                            <span class="client-box">
                                <img src="{{ asset('assets/imgs/client/TAB14-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <p data-t-throwable-el="">
                            <span class="client-box">
                                <img src="{{ asset('assets/imgs/client/TAB16-01.svg') }}" alt="image">
                            </span>
                        </p>
                        <!--                <p data-t-throwable-el="">-->
                        <!--                    <span class="client-box">-->
                        <!--  <img src="{{ asset('assets/imgs/client/TAB17-01.svg') }}" alt="image">-->
                        <!--</span>-->
                        <!--                </p>-->
                        <!--                <p data-t-throwable-el="">-->
                        <!--                    <span class="client-box">-->
                        <!--  <img src="{{ asset('assets/imgs/client/client-22.webp') }} alt="image">-->
                        <!--</span>-->
                        <!--                </p>-->
                    </div>
                </div>
                <div class="lines-wrapper">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- client area end  -->

    <!-- cta area start  -->
    <div class="p-relative overflow-hidden">
        <section class="cta-area">
            <div class="cta-area-inner section-spacing">
                <div class="area-bg"></div>
                <div class="container large">
                    <div class="section-content">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper">
                                <h2 class="section-title font-instrumentsans-medium char-anim " style="font-size:33px;"><a href="{{ route('contact') }}">TOTAL CONTROL<br>GET ASSURED</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- cta area end  -->

    <!-- productivity area start  -->
    <section class="productivity-area">
        <div class="container large">
            <div class="productivity-area-inner section-spacing">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title font-instrumentsans-medium word-anim">It starts with a <br> <span class="shape-1">unified</span> strategy built <br>on
                                <span class="shape-2"> cutting-edge tech</span> for assured <span class="shape-3">scale </span> in one partner.

                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- productivity area end  -->

    <div class="image-wrapper parallax-view">
        <img class="w-100" src="{{ asset('assets/imgs/gallery/image-7.webp') }}" alt=" image" data-speed="0.1">
    </div>

</main>

@endsection