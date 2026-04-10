@extends('layouts.app')

@section('title', 'Careers | Fortune Tech')

@section('content')

<main>

    <!-- hero area start  -->
    <section class="hero-area-3 career">
        <div class="container large">
            <div class="hero-area-3-inner">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <!--              <div class="subtitle-wrapper">-->
                        <!--                  <span class="section-subtitle">Award winning marketing-->
                        <!--agency — 1994®</span>-->
                        <!--              </div>-->
                        <div class="title-wrapper">
                            <h1 class="section-title font-sequelsans-romanbody fade-anim" data-delay="0.45">Standard agencies hire staff.
                                <img class="title-shape-1" src="{{ asset('assets/imgs/shape/shape-7.png') }}" alt="image">we recruit the
                                <span class="text-underline hover-image-wrpper" data-label="activewear">industry's outliers. <img
                                        class="image-hover" src="{{ asset('assets/imgs/gallery/image-10.webp') }}" alt="activewear"
                                        data-image="activewear"> </span><img class="title-shape-2" src="{{ asset('assets/imgs/shape/shape-11.webp') }}" alt="image">
                            </h1>
                        </div>

                    </div>
                </div>
                <div class="section-content">
                    <ul class="social-links fade-anim" data-delay="0.60">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Dribbble</a></li>
                        <li><a href="#">Behance</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="https://www.linkedin.com/company/fortune-tech-services">Linkedin</a></li>
                    </ul>
                    <div class="content-middle fade-anim" data-delay="0.75">
                        <p class="text info-text">Operational Status: HYPER-GROWTH Location: GLOBAL GRID
                        </p>
                    </div>
                    <div class="content-last fade-anim" data-delay="0.90">
                        <div class="text-wrapper">
                            <p class="text about-text rr_title_anim">Most agencies want you to fit in. We want you to break the mold. Fortune Tech is built for those who value structure over chaos and impact over hours. We aren't looking for staff to fill seats; we are looking for architects to build the future.
                            </p>
                        </div>
                        <div class="btn-wrapper">
                            <a href="{{ route('contact') }}" class="rr-btn-group">
                                <span class="b">View Deployments</span>
                                <span class="c"><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end  -->

    <div class="image-wrapper fade-anim parallax-view">
        <img class="w-100" src="{{ asset('assets/imgs/gallery/image-12.webp') }}" alt="image" data-speed="0.8">
    </div>

    <!-- service area start  -->
    <section class="service-area-3 career">
        <div class="container large">
            <div class="service-area-3-inner section-spacing-top">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody rr_title_anim">ENGINEERED FOR EXCELLENCE. <span class="mb-14"> <a href="{{ route('services') }}" class="rr-btn-group">
                                        <span class="b">Join the Reserve</span>
                                        <span class="c"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </span>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="services-wrapper-box">
                    <div class="services-wrapper-3">
                        <div class="service-box fade-anim" data-delay="0.45">
                            <div class="thumb">
                                <a href="{{ route('services.digital-growth') }}"><img src="{{ asset('assets/imgs/gallery/image-13.webp') }}" alt="image"></a>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="{{ route('services.digital-growth') }}">Growth Engineering</a></h3>
                                <p class="text">We don't just "market"—we build automated growth loops. We are looking for performance specialists who prioritize data over guesswork.
                                </p>
                                <a href="{{ route('services.digital-growth') }}" class="rr-btn-underline">Explore</a>
                            </div>
                        </div>
                        <div class="service-box fade-anim" data-delay="0.60">
                            <div class="thumb">
                                <a href="{{ route('services.creative-animation') }}"><img src="{{ asset('assets/imgs/gallery/image-14.webp') }}" alt="image"></a>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="{{ route('services.creative-animation') }}">Creative Systems</a></h3>
                                <p class="text">High-fidelity design with a purpose. Join the unit responsible for building the visual identity of industry leaders.
                                </p>
                                <a href="{{ route('services.creative-animation') }}" class="rr-btn-underline">Explore</a>
                            </div>
                        </div>
                        <div class="service-box fade-anim" data-delay="0.75">
                            <div class="thumb">
                                <a href="{{ route('services.it-development') }}"> <img src="{{ asset('assets/imgs/gallery/image-15.webp') }}" alt="image"></a>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="{{ route('services.it-development') }}">Operational Intelligence</a></h3>
                                <p class="text">The backbone of the engine. We need strategists who can optimize workflows and manage complex global deployments.
                                </p>
                                <a href="{{ route('services.it-development') }}" class="rr-btn-underline">Explore</a>
                            </div>
                        </div>
                        <div class="service-box fade-anim" data-delay="0.90">
                            <div class="thumb">
                                <a href="{{ route('services.digital-forensics-assurance') }}"><img src="{{ asset('assets/imgs/gallery/image-16.webp') }}" alt="image"></a>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="{{ route('services.digital-forensics-assurance') }}">Dev & Tech Forensics</a></h3>
                                <p class="text">For the architects who build on solid ground. We recruit developers who code for scalability, security, and absolute precision.
                                </p>
                                <a href="{{ route('services.digital-forensics-assurance') }}" class="rr-btn-underline">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end  -->

    <!-- work area start  -->
    <!--<section class="work-area-3">-->
    <!--    <div class="container large">-->
    <!--        <div class="work-area-3-inner section-spacing-top">-->
    <!--            <div class="section-header fade-anim">-->
    <!--                <div class="section-title-wrapper">-->
    <!--                    <div class="title-wrapper">-->
    <!--                        <h2 class="section-title font-sequelsans-romanbody rr_title_anim">WE DON'T FIND SOLUTIONS. WE ENGINEER THEM.-->
    <!--                            <span class="mb-14"><a href="portfolio.html" class="rr-btn-group">-->
    <!--          <span class="b">Meet the Team</span>-->
    <!--                            <span class="c"><i class="fa-solid fa-arrow-right"></i></span>-->
    <!--                            </a>-->
    <!--                            </span>-->
    <!--                        </h2>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="works-wrapper-box">-->
    <!--                <div class="works-wrapper-3">-->
    <!--                    <div class="work-box fade-anim">-->
    <!--                        <div class="thumb">-->
    <!--                            <div class="image scale" data-cursor-text="View Project">-->
    <!--                                <a href="portfolio-details.html"><img src="{{ asset('assets/imgs/project/image-19.webp') }}" alt="image"></a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="content">-->
    <!--                            <h3 class="title"><a href="portfolio-details.html">Harash Denmark</a></h3>-->
    <!--                            <div class="meta">-->
    <!--                                <span class="date">2010</span>-->
    <!--                                <span class="tag">Branding</span>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="work-box fade-anim">-->
    <!--                        <div class="thumb">-->
    <!--                            <div class="image scale" data-cursor-text="View Project">-->
    <!--                                <a href="portfolio-details.html"><img src="{{ asset('assets/imgs/project/image-20.webp') }}" alt="image"></a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="content">-->
    <!--                            <h3 class="title"><a href="portfolio-details.html">Saudi Lime Green</a></h3>-->
    <!--                            <div class="meta">-->
    <!--                                <span class="date">2010</span>-->
    <!--                                <span class="tag">Marketing</span>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="work-box fade-anim">-->
    <!--                        <div class="thumb">-->
    <!--                            <div class="image scale" data-cursor-text="View Project">-->
    <!--                                <a href="portfolio-details.html"><img src="{{ asset('assets/imgs/project/image-21.webp') }}" alt="image"></a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="content">-->
    <!--                            <h3 class="title"><a href="portfolio-details.html">Saudi Venture Capital</a></h3>-->
    <!--                            <div class="meta">-->
    <!--                                <span class="date">2010</span>-->
    <!--                                <span class="tag">Marketing</span>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="work-box fade-anim">-->
    <!--                        <div class="thumb">-->
    <!--                            <div class="image scale" data-cursor-text="View Project">-->
    <!--                                <a href="portfolio-details.html"><img src="{{ asset('assets/imgs/project/image-22.webp') }}" alt="image"></a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="content">-->
    <!--                            <h3 class="title"><a href="portfolio-details.html">Nilachal Network</a></h3>-->
    <!--                            <div class="meta">-->
    <!--                                <span class="date">2010</span>-->
    <!--                                <span class="tag">Marketing</span>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="work-box fade-anim">-->
    <!--                        <div class="thumb">-->
    <!--                            <div class="image scale" data-cursor-text="View Project">-->
    <!--                                <a href="portfolio-details.html"><img src="{{ asset('assets/imgs/project/image-23.webp') }}" alt="image"></a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="content">-->
    <!--                            <h3 class="title"><a href="portfolio-details.html">Royal Cash App </a></h3>-->
    <!--                            <div class="meta">-->
    <!--                                <span class="date">2010</span>-->
    <!--                                <span class="tag">Design</span>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="work-box fade-anim">-->
    <!--                        <div class="thumb">-->
    <!--                            <div class="image scale" data-cursor-text="View Project">-->
    <!--                                <a href="portfolio-details.html"><img src="{{ asset('assets/imgs/project/image-24.webp') }}" alt="image"></a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="content">-->
    <!--                            <h3 class="title"><a href="portfolio-details.html">Mashup Gradient</a></h3>-->
    <!--                            <div class="meta">-->
    <!--                                <span class="date">2010</span>-->
    <!--                                <span class="tag">Design</span>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- work area end  -->

    <!-- approach area start  -->
    <section class="approach-area-service-details-page">
        <div class="container large">
            <div class="approach-area-service-details-page-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper fade-anim" data-direction="left" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                            <span class="section-subtitle">Our Selection Protocol</span>
                        </div>
                        <div class="title-wrapper fade-anim" data-direction="right" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                            <h2 class="section-title font-sequelsans-romanbody">Excellence is never accidental. It is verified through a forensic vetting process.
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="approach-wrapper-box">
                    <span class="steps fade-anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">04</span>
                    <div class="approach-wrapper fade-anim" data-direction="right" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <div class="approach-box" style="translate: none; rotate: none; scale: none; transform: translate(0%, 0px);">
                            <span class="number color">01</span>
                            <h3 class="title">Strategic Reconnaissance</h3>
                            <p class="text"> We review your background not just for skills, but for a history of structural thinking and high-impact output.</p>
                        </div>
                        <div class="approach-box" style="translate: none; rotate: none; scale: none; transform: translate(0%, 0px);">
                            <span class="number color">02</span>
                            <h3 class="title">Tactical Briefing</h3>
                            <p class="text">A deep-dive interview focusing on your problem-solving logic. We want to see how you engineer solutions under pressure.</p>
                        </div>
                        <div class="approach-box" style="translate: none; rotate: none; scale: none; transform: translate(0%, 0px);">
                            <span class="number color">03</span>
                            <h3 class="title">Technical Stress-Test</h3>
                            <p class="text">A real-world simulation of the tasks you will handle. We prioritize your ability to deliver "Industrial-Grade" precision.</p>
                        </div>
                        <div class="approach-box" style="translate: none; rotate: none; scale: none; transform: translate(0%, 0px);">
                            <span class="number color">04</span>
                            <h3 class="title">Induction & Deployment</h3>
                            <p class="text">Final alignment on goals. Once you pass the protocol, you are fully integrated into the Fortune Tech engine.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- approach area end  -->

    <!-- funfact area start  -->
    <section class="funfact-area-2">
        <div class="funfact-area-2-inner section-spacing-top">
            <div class="container large">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody rr_title_anim">PRECISION ISN'T JUST FOR PROJECTS. IT’S OUR RECRUITING STANDARD.
                                <span class="mb-14">
                                    <a href="{{ route('contact') }}" class="rr-btn-group btn-whte">
                                        <span class="b">Join the Reserve </span>
                                        <span class="c"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="text-wrapper fade-anim">
                        <p class="text">We don't just fill positions; we build a high-performance ecosystem. If you are an outlier who values structural integrity and exponential growth, you belong in our network—regardless of our current headcount.
                        </p>
                    </div>
                    <div class="info-text fade-anim" data-direction="right">
                        <span class="year">1%</span>
                        <div class="about-info">
                            <img src="{{ asset('assets/imgs/shape/shape-12.webp') }}" alt="image">
                            <p class="text">The Acceptance Standard. Join the Elite Reserve.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thumb fade-anim">
                <img src="{{ asset('assets/imgs/gallery/image-17.webp') }}" alt="image">
            </div>
        </div>
    </section>
    <!-- funfact area end  -->

    <!-- client area start  -->
    <div class="client-area-3">
        <div class="client-area-3-inner section-spacing">
            <div class="container large">
                <div class="section-header fade-anim">
                    <div class="text-wrapper">
                        <p class="text rr_title_anim">Help to brands growing up and show their success stories to the world</p>
                    </div>
                </div>
            </div>
            <div class="clients-wrapper-box fade-anim">
                <div class="clients-wrapper">
                    <div class="swiper client-slider-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB1-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB2-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB3-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB4-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB5-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB6-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB7-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB8-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB9-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB10-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB11-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB12-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB13-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB14-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB15-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB16-01.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-box">
                                    <img src="{{ asset('assets/imgs/client/TAB17-01.svg') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- client area end  -->

    <!-- blog area start  -->
    <section class="blog-area">
        <div class="container large">
            <div class="blog-area-inner section-spacing-top">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody rr_title_anim">Learn our recent journal
                                <span class="mb-14">
                                    <a href="{{ route('blog') }}" class="rr-btn-group">
                                        <span class="b">Learn all news</span>
                                        <span class="c"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="blogs-wrapper-box">
                    <div class="blogs-wrapper">
                        <a href="{{ route('blog.detail', ['slug' => 'your-marketing-is-successful-thats-exactly-why-your-company-is-failing']) }}">
                            <article class="blog fade-anim" data-delay="0.45">
                                <div class="thumb">
                                    <img src="{{ asset('assets/imgs/blog/blog-5.webp') }}" alt="blog image">
                                </div>
                                <div class="content-wrapper">
                                    <div class="content">
                                        <h2 class="title">Your Marketing Is Successful—That's Exactly Why Your Company Is Failing.
                                            <span class="arrow">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.98834 0.661257C8.91884 0.781628 8.85302 0.903885 8.79094 1.02786C8.47298 1.49122 8.0835 1.90234 7.63629 2.2455C7.07879 2.67328 6.4425 2.98707 5.76373 3.16894C5.08497 3.35082 4.37702 3.39722 3.68033 3.3055C2.98363 3.21377 2.31182 2.98572 1.70325 2.63437L0.869521 4.07843C1.66772 4.53928 2.54888 4.83839 3.46268 4.95869C4.37648 5.079 5.30502 5.01814 6.1953 4.77959C6.36565 4.73394 6.53397 4.68196 6.6999 4.62381L2.03475 12.7041L3.47584 13.5361L8.16052 5.42201C8.19489 5.61171 8.23713 5.80022 8.28719 5.98704C8.52574 6.87732 8.9373 7.71189 9.49839 8.44311C10.0595 9.17433 10.7591 9.78788 11.5573 10.2487L12.391 8.80466C11.7825 8.4533 11.2491 7.98552 10.8213 7.42803C10.3935 6.87053 10.0797 6.23423 9.89783 5.55547C9.71595 4.8767 9.66955 4.16876 9.76128 3.47206C9.83484 2.91326 9.99611 2.37047 10.2384 1.86349C10.3146 1.74781 10.3875 1.62977 10.457 1.50948L10.4323 1.49521L10.4324 1.49499L8.98834 0.661257Z"
                                                        fill="#111111" />
                                                </svg>
                                            </span>
                                        </h2>
                                        <div class="meta">
                                            <span class="name">By <span>Admin</span></span>
                                            <span class="date has-left-line">October 14, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                        <a href="{{ route('blog.detail', ['slug' => 'the-human-algorithm-why-the-most-powerful-engine-is-still-a-heartbeat']) }}">
                            <article class="blog fade-anim" data-delay="0.60">
                                <div class="thumb">
                                    <img src="{{ asset('assets/imgs/blog/blog-6.webp') }}" alt="blog image">
                                </div>
                                <div class="content-wrapper">
                                    <div class="content">
                                        <h2 class="title">The Human Algorithm: Why The Most Powerful Engine Is Still A Heartbeat.
                                            <span class="arrow">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.98834 0.661257C8.91884 0.781628 8.85302 0.903885 8.79094 1.02786C8.47298 1.49122 8.0835 1.90234 7.63629 2.2455C7.07879 2.67328 6.4425 2.98707 5.76373 3.16894C5.08497 3.35082 4.37702 3.39722 3.68033 3.3055C2.98363 3.21377 2.31182 2.98572 1.70325 2.63437L0.869521 4.07843C1.66772 4.53928 2.54888 4.83839 3.46268 4.95869C4.37648 5.079 5.30502 5.01814 6.1953 4.77959C6.36565 4.73394 6.53397 4.68196 6.6999 4.62381L2.03475 12.7041L3.47584 13.5361L8.16052 5.42201C8.19489 5.61171 8.23713 5.80022 8.28719 5.98704C8.52574 6.87732 8.9373 7.71189 9.49839 8.44311C10.0595 9.17433 10.7591 9.78788 11.5573 10.2487L12.391 8.80466C11.7825 8.4533 11.2491 7.98552 10.8213 7.42803C10.3935 6.87053 10.0797 6.23423 9.89783 5.55547C9.71595 4.8767 9.66955 4.16876 9.76128 3.47206C9.83484 2.91326 9.99611 2.37047 10.2384 1.86349C10.3146 1.74781 10.3875 1.62977 10.457 1.50948L10.4323 1.49521L10.4324 1.49499L8.98834 0.661257Z"
                                                        fill="#111111" />
                                                </svg>
                                            </span>
                                        </h2>
                                        <div class="meta">
                                            <span class="name">By <span>Admin</span></span>
                                            <span class="date has-left-line">November 3, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                        <a href="{{ route('blog.detail', ['slug' => 'the-death-of-good-enough-a-requiem-for-mediocrity']) }}">
                            <article class="blog fade-anim" data-delay="0.75">
                                <div class="thumb">
                                    <img src="{{ asset('assets/imgs/blog/blog-7.webp') }}" alt="blog image">
                                </div>
                                <div class="content">
                                    <h2 class="title">Various ideas and creative concepts based on market research
                                        <span class="arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.98834 0.661257C8.91884 0.781628 8.85302 0.903885 8.79094 1.02786C8.47298 1.49122 8.0835 1.90234 7.63629 2.2455C7.07879 2.67328 6.4425 2.98707 5.76373 3.16894C5.08497 3.35082 4.37702 3.39722 3.68033 3.3055C2.98363 3.21377 2.31182 2.98572 1.70325 2.63437L0.869521 4.07843C1.66772 4.53928 2.54888 4.83839 3.46268 4.95869C4.37648 5.079 5.30502 5.01814 6.1953 4.77959C6.36565 4.73394 6.53397 4.68196 6.6999 4.62381L2.03475 12.7041L3.47584 13.5361L8.16052 5.42201C8.19489 5.61171 8.23713 5.80022 8.28719 5.98704C8.52574 6.87732 8.9373 7.71189 9.49839 8.44311C10.0595 9.17433 10.7591 9.78788 11.5573 10.2487L12.391 8.80466C11.7825 8.4533 11.2491 7.98552 10.8213 7.42803C10.3935 6.87053 10.0797 6.23423 9.89783 5.55547C9.71595 4.8767 9.66955 4.16876 9.76128 3.47206C9.83484 2.91326 9.99611 2.37047 10.2384 1.86349C10.3146 1.74781 10.3875 1.62977 10.457 1.50948L10.4323 1.49521L10.4324 1.49499L8.98834 0.661257Z"
                                                    fill="#111111" />
                                            </svg>
                                        </span>
                                    </h2>
                                    <div class="meta">
                                        <span class="name">By <span>Admin</span></span>
                                        <span class="date has-left-line">November 27, 2025</span>
                                    </div>
                                </div>
                            </article>
                        </a>
                        <a href="{{ route('blog.detail', ['slug' => 'kinetic-patience-the-art-of-standing-still-while-the-world-panics']) }}">
                            <article class="blog fade-anim" data-delay="0.90">
                                <div class="thumb">
                                    <img src="{{ asset('assets/imgs/blog/blog-8.webp') }}" alt="blog image">
                                </div>
                                <div class="content-wrapper">
                                    <div class="content">
                                        <h2 class="title">Kinetic Patience: The Art Of Standing Still While The World Panics
                                            <span class="arrow">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.98834 0.661257C8.91884 0.781628 8.85302 0.903885 8.79094 1.02786C8.47298 1.49122 8.0835 1.90234 7.63629 2.2455C7.07879 2.67328 6.4425 2.98707 5.76373 3.16894C5.08497 3.35082 4.37702 3.39722 3.68033 3.3055C2.98363 3.21377 2.31182 2.98572 1.70325 2.63437L0.869521 4.07843C1.66772 4.53928 2.54888 4.83839 3.46268 4.95869C4.37648 5.079 5.30502 5.01814 6.1953 4.77959C6.36565 4.73394 6.53397 4.68196 6.6999 4.62381L2.03475 12.7041L3.47584 13.5361L8.16052 5.42201C8.19489 5.61171 8.23713 5.80022 8.28719 5.98704C8.52574 6.87732 8.9373 7.71189 9.49839 8.44311C10.0595 9.17433 10.7591 9.78788 11.5573 10.2487L12.391 8.80466C11.7825 8.4533 11.2491 7.98552 10.8213 7.42803C10.3935 6.87053 10.0797 6.23423 9.89783 5.55547C9.71595 4.8767 9.66955 4.16876 9.76128 3.47206C9.83484 2.91326 9.99611 2.37047 10.2384 1.86349C10.3146 1.74781 10.3875 1.62977 10.457 1.50948L10.4323 1.49521L10.4324 1.49499L8.98834 0.661257Z"
                                                        fill="#111111" />
                                                </svg>
                                            </span>
                                        </h2>
                                        <div class="meta">
                                            <span class="name">By <span>Admin</span></span>
                                            <span class="date has-left-line">December 9, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- blog area end  -->

    <!-- cta area start  -->
    <section class="cta-area-3">
        <div class="container large">
            <div class="cta-area-3-inner section-spacing-top">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody rr_title_anim">Let’s start a great work right now
                                <span class="mb-14">
                                    <a href="{{ route('contact') }}" class="rr-btn-group">
                                        <span class="b">Get in touch</span>
                                        <span class="c"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end  -->

</main>

@endsection