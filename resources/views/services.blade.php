@extends('layouts.app')

@section('title', "Privacy Policy | Fortune Tech")

@section('content')

<main>

    <!-- page title area start  -->
    <section class="page-title-area">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim">SOLUTIONS</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- service area start  -->
    <section class="service-area-service-page">
        <div class="container large">
            <div class="service-area-service-page-inner">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle">The Narrative</span>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody">We engineer absolute certainty across every operational frontier.</h2>
                        </div>
                    </div>
                </div>
                <div class="services-wrapper-box fade-anim">
                    <div class="services-wrapper-1">
                        <div class="service-box fade-anim">
                            <div class="count">
                                <span class="number">(01)</span>
                            </div>

                            <div class="content">
                                <h3 class="title"><a href="{{ route('services.digital-growth') }}">Digital Growthg</a></h3>
                                <ul class="service-list">
                                    <li><a href="{{ route('services.digital-growth') }}">Social Media Management</a></li>
                                    <li><a href="{{ route('services.digital-growth') }}">PPC & Google Ads</a></li>
                                    <li><a href="{{ route('services.digital-growth') }}">SEO & Strategy</a></li>
                                    <li><a href="{{ route('services.digital-growth') }}">Email Marketing</a></li>
                                    <li><a href="{{ route('services.digital-growth') }}">Content Creation</a></li>
                                </ul>
                            </div>
                            <div class="thumb">
                                <img class="grow" src="{{ asset('assets/imgs/gallery/image-3.webp') }}" alt="image">
                            </div>
                        </div>
                        <div class="service-box fade-anim">
                            <div class="count">
                                <span class="number">(02)</span>
                            </div>

                            <div class="content">
                                <h3 class="title"><a href="{{ route('services.creative-animation') }}">Creative & Animation</a></h3>
                                <ul class="service-list">
                                    <li><a href="{{ route('services.creative-animation') }}">UI UX Consulting</a></li>
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
                            <div class="count">
                                <span class="number">(03)</span>
                            </div>

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
                            <div class="count">
                                <span class="number">(04)</span>
                            </div>

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
                            <div class="count">
                                <span class="number">(05)</span>
                            </div>

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
                <div class="service-content-wrapper section-spacing-top">
                    <div class="service-content">
                        <div class="section-info-wrapper fade-anim" data-direction="left">
                            <div class="thumb parallax-view">
                                <img src="{{ asset('assets/imgs/gallery/image-10.webp') }}" alt="image" data-speed="0.9">
                            </div>
                            <div class="text-wrapper">
                                <p><b>The era of fractured vendors is over.</b> We fuse Growth,Creative,IT,BPO,and mission-critical Forensics into a single,kinetic system.This is total operationalcoherence—engineered to eliminate every point of friction and deliver unstoppable global velocity.</p>
                                <p>We trade guesswork for absolute control.You gain the market momentum to dominate and the <b>Digital Assurance</b>to operate without a single vulnerability.Our promise is simple:<strond> Fortified Success.</strond>
                                </p>
                            </div>
                        </div>
                        <div class="section-thumb-wrapper fade-anim" data-delay="0.45" data-direction="right">
                            <div class="thumb parallax-view">
                                <img src="{{ asset('assets/imgs/gallery/image-11.webp') }}" alt="image" data-speed="0.8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end  -->

    <!-- client area start  -->
    <!--<section class="client-area-service-page">-->
    <!--    <div class="container large">-->
    <!--        <div class="client-area-inner section-spacing-top">-->
    <!--            <div class="section-content fade-anim">-->
    <!--                <div class="section-title-wrapper">-->
    <!--                    <div class="title-wrapper">-->
    <!--                        <h2 class="section-title font-sequelsans-romanbody"><span>Client:</span> Helping brands to grow and say their success stories to the world.</h2>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="text-wrapper">-->
    <!--                    <p class="text">We’re a great team of creatives with a strongest capabilities to helping progressive fields achieve their goals. With the best talent on every project done successfully</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="client-capsule-wrapper-box fade-anim" data-t-throwable-scene="true">-->
    <!--                <div class="client-capsule-wrapper">-->
    <!--                    <p data-t-throwable-el="">-->
    <!--                        <span class="client-box">-->
    <!--      <img src="{{ asset('assets/imgs/client/TAB1-01.svg') }}" alt="image">-->
    <!--    </span>-->
    <!--                    </p>-->
    <!--                    <p data-t-throwable-el="">-->
    <!--                        <span class="client-box">-->
    <!--      <img src="{{ asset('assets/imgs/client/TAB3-01.svg') }}" alt="image">-->
    <!--    </span>-->
    <!--                    </p>-->
    <!--                    <p data-t-throwable-el="">-->
    <!--                        <span class="client-box">-->
    <!--      <img src="{{ asset('assets/imgs/client/TAB5-01.svg') }}" alt="image">-->
    <!--    </span>-->
    <!--                    </p>-->
    <!--                    <p data-t-throwable-el="">-->
    <!--                        <span class="client-box">-->
    <!--      <img src="{{ asset('assets/imgs/client/TAB7-01.svg') }}" alt="image">-->
    <!--    </span>-->
    <!--                    </p>-->
    <!--                    <p data-t-throwable-el="">-->
    <!--                        <span class="client-box">-->
    <!--      <img src="{{ asset('assets/imgs/client/TAB9-01.svg') }}" alt="image">-->
    <!--    </span>-->
    <!--                    </p>-->
    <!--                    <p data-t-throwable-el="">-->
    <!--                        <span class="client-box">-->
    <!--      <img src="{{ asset('assets/imgs/client/TAB11-01.svg') }}" alt="image">-->
    <!--    </span>-->
    <!--                    </p>-->
    <!--                    <p data-t-throwable-el="">-->
    <!--                        <span class="client-box">-->
    <!--      <img src="{{ asset('assets/imgs/client/TAB13-01.svg') }}" alt="image">-->
    <!--    </span>-->
    <!--                    </p>-->
    <!--                    <p data-t-throwable-el="">-->
    <!--                        <span class="client-box">-->
    <!--      <img src="{{ asset('assets/imgs/client/TAB14-01.svg') }}" alt="image">-->
    <!--    </span>-->
    <!--                    </p>-->
    <!--                    <p data-t-throwable-el="">-->
    <!--                        <span class="client-box">-->
    <!--      <img src="{{ asset('assets/imgs/client/TAB16-01.svg') }}" alt="image">-->
    <!--    </span>-->
    <!--                    </p>-->
    <!--                <p data-t-throwable-el="">-->
    <!--                    <span class="client-box">-->
    <!--  <img src="{{ asset('assets/imgs/client/client-18.webp') }}" alt="image">-->
    <!--</span>-->
    <!--                </p>-->
    <!--                <p data-t-throwable-el="">-->
    <!--                    <span class="client-box">-->
    <!--  <img src="{{ asset('assets/imgs/client/client-19.webp') }}" alt="image">-->
    <!--</span>-->
    <!--                </p>-->
    <!--                <p data-t-throwable-el="">-->
    <!--                    <span class="client-box">-->
    <!--  <img src="{{ asset('assets/imgs/client/client-20.webp') }}" alt="image">-->
    <!--</span>-->
    <!--                </p>-->
    <!--                <p data-t-throwable-el="">-->
    <!--                    <span class="client-box">-->
    <!--  <img src="{{ asset('assets/imgs/client/client-21.webp') }}" alt="image">-->
    <!--</span>-->
    <!--                </p>-->
    <!--                <p data-t-throwable-el="">-->
    <!--                    <span class="client-box">-->
    <!--  <img src="{{ asset('assets/imgs/client/client-22.webp') }}" alt="image">-->
    <!--</span>-->
    <!--                </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="lines-wrapper">-->
    <!--                <div class="line"></div>-->
    <!--                <div class="line"></div>-->
    <!--                <div class="line"></div>-->
    <!--                <div class="line"></div>-->
    <!--                <div class="line"></div>-->
    <!--                <div class="line"></div>-->
    <!--                <div class="line"></div>-->
    <!--                <div class="line"></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
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
                        <p class="text ">The promise of integrated service demands mastery over every key platform. Our team is fluent in the latest development, collaboration, and marketing tools, alongside industry gold standards for Digital Forensics (OpenText EnCase, Magnet AXIOM, AccessData FTK). This fluency ensures all five operational pillars run on a single, clean track. We eliminate data silos and deliver seamless, transparent operations worldwide.</p>
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
                        <!--  <img src="{{ asset('assets/imgs/client/client-22.webp') }}" alt="image">-->
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

</main>

@endsection