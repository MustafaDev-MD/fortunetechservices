@extends('layouts.app')

@section('title', 'About | Fortune Tech')

@section('content')
<main>

    <!-- page title area start  -->
    <section class="page-title-area">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim">EST. 2013</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- about area start  -->
    <section class="about-area-details">
        <div class="container large">
            <div class="about-area-details-inner">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle">About studio</span>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody">Architecting the operational core of global brands through precision strategy, technology, and support.</h2>
                        </div>
                    </div>
                </div>
                <div class="section-content-wrapper fade-anim">
                    <div class="info-list">
                        <ul>
                            <li>Uncompromising Precision</li>
                            <li>Seamless Integration</li>
                            <li>Global Resilience</li>
                        </ul>
                    </div>
                    <div class="section-content">
                        <div class="text-wrapper" data-direction="right">
                            <p class="text">Fortune Tech was born from a single observation: fragmentation is the enemy of sustained growth. We replaced the complexity of fractured vendors with a single, unified partner for your Marketing, IT, and BPO operations.</p>
                            <p class="text">As your global strategic ally, we provide the industrial-grade foundation required for scale. We don't just fulfill service contracts; we engineer the momentum that carries your vision to market with assured confidence.</p>
                        </div>
                        <div class="btn-wrapper" data-direction="right">
                            <a href="{{ route('contact') }}" class="rr-btn">
                                <span class="btn-wrap">
                                    <span class="text-one">Meet the Architects</span>
                                    <span class="text-two">Meet the Architects</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moving-gallery fade-anim">
            <ul class="wrapper-gallery">
                <li><img src="{{ asset('assets/imgs/gallery/image-19.webp') }}" alt="image"></li>
                <li><img src="{{ asset('assets/imgs/gallery/image-20.webp') }}" alt="image"></li>
                <li><img src="{{ asset('assets/imgs/gallery/image-21.webp') }}" alt="image"></li>
                <li><img src="{{ asset('assets/imgs/gallery/image-22.webp') }}" alt="image"></li>
                <li><img src="{{ asset('assets/imgs/gallery/image-19.webp') }}" alt="image"></li>
            </ul>
        </div>
    </section>
    <!-- about area end  -->

    <!-- approach area start  -->
    <section class="approach-area-about-page">
        <div class="container large">
            <div class="approach-area-about-page-inner section-spacing">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle">Approach</span>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody">The Only Metrics That Matter: Assurance and Scale.</h2>
                            <p class="text test-new">We measure what others guess. Our engineered metrics define the predictability and<br> control we guarantee across every domain</p>
                        </div>
                    </div>
                </div>
                <div class="approach-wrapper-box">
                    <div class="approach-wrapper fade-anim">
                        <div class="approach-box">
                            <h2 class="title">Risk Audit<img src="{{ asset('assets/imgs/shape/shape-13.webp') }}" alt="image" class="about-arrow-image-1"></h2>
                            <div class="approach-list">
                                <ul>
                                    <li>Risk Profile Audit</li>
                                    <li>System Mapping</li>
                                    <li>KPI Alignment</li>
                                    <li>Resource Consolidation</li>
                                    <li>Strategy Finalization</li>
                                </ul>
                            </div>
                        </div>
                        <div class="approach-box">
                            <h2 class="title">System Fusion<img src="{{ asset('assets/imgs/shape/shape-13.webp') }}" alt="image" class="about-arrow-image-2"></h2>
                            <div class="approach-list">
                                <ul>
                                    <li>Platform Deployment</li>
                                    <li>Workflow Fusion</li>
                                    <li>Asset Fortification</li>
                                    <li>Training Protocol</li>
                                    <li>Quality Assurance</li>
                                </ul>
                            </div>
                        </div>
                        <div class="approach-box">
                            <h2 class="title">Scaled Output</h2>
                            <div class="approach-list">
                                <ul>
                                    <li>Total Activation</li>
                                    <li>24/7 Monitoring</li>
                                    <li>Data Command</li>
                                    <li>Managed Scale</li>
                                    <li>Predictable Growth</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- approach area end  -->

    <!-- info area start  -->
    <section class="info-area-page-about">
        <div class="container large">
            <div class="info-area-page-about-inner section-spacing-top">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle">Who are we?</span>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody">We deliver assured scale to a fragmented world.</h2>
                        </div>
                    </div>
                </div>
                <div class="counter-wrapper-box fade-anim">
                    <div class="counter-wrapper">
                        <div class="funfact-item">
                            <p class="text">Digital Marketing & Brand</p>
                            <h3 class="number t-counter">3.4x+</h3>
                            <p class="text"><b>Guaranteed ROI</b> on Integrated<br> Marketing Spends.</p>
                        </div>
                        <div class="funfact-item">
                            <p class="text">Web Development & CRM</p>
                            <h3 class="number t-counter">&lt; 2.0s</h3>
                            <p class="text">Global Load Speed for all core <br>client infrastructure.</p>
                        </div>
                        <div class="funfact-item">
                            <p class="text">IT Infrastructure & BPO</p>
                            <h3 class="number t-counter">99.99%</h3>
                            <p class="text">Engineered Uptime on critical <br>systems and support.</p>
                        </div>
                        <div class="funfact-item">
                            <p class="text">Strategy & Assurance</p>
                            <h3 class="number t-counter">100%</h3>
                            <p class="text">Vendor-Chaos Elimination through <br>our single, unified partnership.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- info area end  -->

    <!-- client area start  -->
    <div class="client-area-page-about">
        <div class="client-area-page-about-inner section-spacing">
            <div class="container large">
                <div class="section-header fade-anim">
                    <div class="text-wrapper">
                        <p class="text">We help global enterprises exchange complexity for control, defining their success stories through engineered precision.</p>
                    </div>
                </div>
            </div>
            <div class="clients-wrapper-box fade-anim">
                <div class="clients-wrapper">
                    <div class="swiper client-slider-active">
                        <div class="swiper-wrapper">
                            @for ($i = 1; $i <= 16; $i++)
                                {{-- @if ($i != 9 && $i != 15) --}}
                                    <div class="swiper-slide">
                                        <div class="client-box">
                                            <img src="{{ asset("assets/imgs/client/TAB{$i}-01.svg") }}" alt="Client {{ $i }}">
                                        </div>
                                    </div>
                                {{-- @endif --}}
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client area end  -->

    <!-- media area start  -->
    <section class="media-area-page-about">
        <div class="container large">
            <div class="media-area-page-about-inner">
                <div class="section-content-wrapper fade-anim">
                    <div class="area-thumb parallax-view">
                        <img src="{{ asset('assets/imgs/gallery/image-23.webp') }}" alt="image" data-speed="0.8">
                    </div>
                    <div class="section-content">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper">
                                <h2 class="section-title font-sequelsans-romanbody">Forge a Partnership Built on Absolute Certainty.</h2>
                            </div>
                        </div>
                        <div class="text-wrapper">
                            <p class="text">Beyond the Deliverable. We build enduring alliances that extend into the very core of your operations. Our goal is to serve as the silent, engineered engine behind your global scale, providing the clarity and protection needed to dominate your market with zero friction.</p>
                        </div>
                        <div class="btn-wrapper">
                            <a href="{{ route('contact') }}" class="rr-btn">
                                <span class="btn-wrap">
                                    <span class="text-one">Learn More About the FT Method</span>
                                    <span class="text-two">Learn More About the FT Method</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- media area end  -->

</main>
@endsection
