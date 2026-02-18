@extends('layouts.app')

@section('title', 'Blog | Fortune Tech')

@section('content')

<main>

    <!-- page title area start  -->
    <section class="page-title-area">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim">Journals</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- blog area start  -->
    <section class="blog-area-2">
        <div class="container large">
            <div class="blog-area-2-inner">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle">Recent blog</span>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody">Learn our recent journal</h2>
                        </div>
                    </div>
                </div>
                <div class="blogs-wrapper-box">
                    <div class="blogs-wrapper">

                        <!-- Blog 1 -->
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
                                            <span class="name">By <span>Jerry</span></span>
                                            <span class="date has-left-line">2023</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>

                        <!-- Blog 2 -->
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
                                            <span class="name">By <span>Jerry</span></span>
                                            <span class="date has-left-line">2023</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>

                        <!-- Blog 3 -->
                        <a href="{{ route('blog.detail', ['slug' => 'the-death-of-good-enough-a-requiem-for-mediocrity']) }}">
                            <article class="blog fade-anim" data-delay="0.75">
                                <div class="thumb">
                                    <img src="{{ asset('assets/imgs/blog/blog-7.webp') }}" alt="blog image">
                                </div>
                                <div class="content">
                                    <h2 class="title">The Death Of "Good Enough":A Requiem For Mediocrity.
                                        <span class="arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.98834 0.661257C8.91884 0.781628 8.85302 0.903885 8.79094 1.02786C8.47298 1.49122 8.0835 1.90234 7.63629 2.2455C7.07879 2.67328 6.4425 2.98707 5.76373 3.16894C5.08497 3.35082 4.37702 3.39722 3.68033 3.3055C2.98363 3.21377 2.31182 2.98572 1.70325 2.63437L0.869521 4.07843C1.66772 4.53928 2.54888 4.83839 3.46268 4.95869C4.37648 5.079 5.30502 5.01814 6.1953 4.77959C6.36565 4.73394 6.53397 4.68196 6.6999 4.62381L2.03475 12.7041L3.47584 13.5361L8.16052 5.42201C8.19489 5.61171 8.23713 5.80022 8.28719 5.98704C8.52574 6.87732 8.9373 7.71189 9.49839 8.44311C10.0595 9.17433 10.7591 9.78788 11.5573 10.2487L12.391 8.80466C11.7825 8.4533 11.2491 7.98552 10.8213 7.42803C10.3935 6.87053 10.0797 6.23423 9.89783 5.55547C9.71595 4.8767 9.66955 4.16876 9.76128 3.47206C9.83484 2.91326 9.99611 2.37047 10.2384 1.86349C10.3146 1.74781 10.3875 1.62977 10.457 1.50948L10.4323 1.49521L10.4324 1.49499L8.98834 0.661257Z"
                                                    fill="#111111" />
                                            </svg>
                                        </span>
                                    </h2>
                                    <div class="meta">
                                        <span class="name">By <span>Jerry</span></span>
                                        <span class="date has-left-line">2023</span>
                                    </div>
                                </div>
                            </article>
                        </a>

                        <!-- Blog 4 -->
                        <a href="{{ route('blog.detail', ['slug' => 'kinetic-patience-the-art-of-standing-still-while-the-world-panics']) }}">
                            <article class="blog fade-anim" data-delay="0.45">
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
                                            <span class="name">By <span>Jerry</span></span>
                                            <span class="date has-left-line">2023</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>

                        <!-- Blog 5 -->
                        <a href="{{ route('blog.detail', ['slug' => 'forensic-honesty-the-numbers-dont-lie-but-they-often-hurt']) }}">
                            <article class="blog fade-anim" data-delay="0.60">
                                <div class="thumb">
                                    <img src="{{ asset('assets/imgs/blog/blog-9.webp') }}" alt="blog image">
                                </div>
                                <div class="content-wrapper">
                                    <div class="content">
                                        <h2 class="title">Forensic Honesty: The Numbers Don't Lie, But They Often Hurt.
                                            <span class="arrow">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.98834 0.661257C8.91884 0.781628 8.85302 0.903885 8.79094 1.02786C8.47298 1.49122 8.0835 1.90234 7.63629 2.2455C7.07879 2.67328 6.4425 2.98707 5.76373 3.16894C5.08497 3.35082 4.37702 3.39722 3.68033 3.3055C2.98363 3.21377 2.31182 2.98572 1.70325 2.63437L0.869521 4.07843C1.66772 4.53928 2.54888 4.83839 3.46268 4.95869C4.37648 5.079 5.30502 5.01814 6.1953 4.77959C6.36565 4.73394 6.53397 4.68196 6.6999 4.62381L2.03475 12.7041L3.47584 13.5361L8.16052 5.42201C8.19489 5.61171 8.23713 5.80022 8.28719 5.98704C8.52574 6.87732 8.9373 7.71189 9.49839 8.44311C10.0595 9.17433 10.7591 9.78788 11.5573 10.2487L12.391 8.80466C11.7825 8.4533 11.2491 7.98552 10.8213 7.42803C10.3935 6.87053 10.0797 6.23423 9.89783 5.55547C9.71595 4.8767 9.66955 4.16876 9.76128 3.47206C9.83484 2.91326 9.99611 2.37047 10.2384 1.86349C10.3146 1.74781 10.3875 1.62977 10.457 1.50948L10.4323 1.49521L10.4324 1.49499L8.98834 0.661257Z"
                                                        fill="#111111" />
                                                </svg>
                                            </span>
                                        </h2>
                                        <div class="meta">
                                            <span class="name">By <span>Jerry</span></span>
                                            <span class="date has-left-line">2023</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>

                        <!-- Blog 6 -->
                        <a href="{{ route('blog.detail', ['slug' => 'the-outliers-burden-why-excellence-is-the-loneliest-metric']) }}">
                            <article class="blog fade-anim" data-delay="0.75">
                                <div class="thumb">
                                    <img src="{{ asset('assets/imgs/blog/blog-10.webp') }}" alt="blog image">
                                </div>
                                <div class="content-wrapper">
                                    <div class="content">
                                        <h2 class="title">The Outlier’s Burden: Why Excellence Is The Loneliest Metric. 
                                            <span class="arrow">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.98834 0.661257C8.91884 0.781628 8.85302 0.903885 8.79094 1.02786C8.47298 1.49122 8.0835 1.90234 7.63629 2.2455C7.07879 2.67328 6.4425 2.98707 5.76373 3.16894C5.08497 3.35082 4.37702 3.39722 3.68033 3.3055C2.98363 3.21377 2.31182 2.98572 1.70325 2.63437L0.869521 4.07843C1.66772 4.53928 2.54888 4.83839 3.46268 4.95869C4.37648 5.079 5.30502 5.01814 6.1953 4.77959C6.36565 4.73394 6.53397 4.68196 6.6999 4.62381L2.03475 12.7041L3.47584 13.5361L8.16052 5.42201C8.19489 5.61171 8.23713 5.80022 8.28719 5.98704C8.52574 6.87732 8.9373 7.71189 9.49839 8.44311C10.0595 9.17433 10.7591 9.78788 11.5573 10.2487L12.391 8.80466C11.7825 8.4533 11.2491 7.98552 10.8213 7.42803C10.3935 6.87053 10.0797 6.23423 9.89783 5.55547C9.71595 4.8767 9.66955 4.16876 9.76128 3.47206C9.83484 2.91326 9.99611 2.37047 10.2384 1.86349C10.3146 1.74781 10.3875 1.62977 10.457 1.50948L10.4323 1.49521L10.4324 1.49499L8.98834 0.661257Z"
                                                        fill="#111111" />
                                                </svg>
                                            </span>
                                        </h2>
                                        <div class="meta">
                                            <span class="name">By <span>Jerry</span></span>
                                            <span class="date has-left-line">2023</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>

                        <!-- Blog 7 -->
                        <a href="{{ route('blog.detail', ['slug' => 'structuring-the-void-we-dont-predict-the-future-we-architect-it']) }}">
                            <article class="blog fade-anim" data-delay="0.45">
                                <div class="thumb">
                                    <img src="{{ asset('assets/imgs/blog/blog-11.webp') }}" alt="blog image">
                                </div>
                                <div class="content-wrapper">
                                    <div class="content">
                                        <h2 class="title">Structuring-The-Void:-We-Don't-Predict-The-Future,-We-Architect-It. 
                                            <span class="arrow">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.98834 0.661257C8.91884 0.781628 8.85302 0.903885 8.79094 1.02786C8.47298 1.49122 8.0835 1.90234 7.63629 2.2455C7.07879 2.67328 6.4425 2.98707 5.76373 3.16894C5.08497 3.35082 4.37702 3.39722 3.68033 3.3055C2.98363 3.21377 2.31182 2.98572 1.70325 2.63437L0.869521 4.07843C1.66772 4.53928 2.54888 4.83839 3.46268 4.95869C4.37648 5.079 5.30502 5.01814 6.1953 4.77959C6.36565 4.73394 6.53397 4.68196 6.6999 4.62381L2.03475 12.7041L3.47584 13.5361L8.16052 5.42201C8.19489 5.61171 8.23713 5.80022 8.28719 5.98704C8.52574 6.87732 8.9373 7.71189 9.49839 8.44311C10.0595 9.17433 10.7591 9.78788 11.5573 10.2487L12.391 8.80466C11.7825 8.4533 11.2491 7.98552 10.8213 7.42803C10.3935 6.87053 10.0797 6.23423 9.89783 5.55547C9.71595 4.8767 9.66955 4.16876 9.76128 3.47206C9.83484 2.91326 9.99611 2.37047 10.2384 1.86349C10.3146 1.74781 10.3875 1.62977 10.457 1.50948L10.4323 1.49521L10.4324 1.49499L8.98834 0.661257Z"
                                                        fill="#111111" />
                                                </svg>
                                            </span>
                                        </h2>
                                        <div class="meta">
                                            <span class="name">By <span>Jerry</span></span>
                                            <span class="date has-left-line">2023</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>

                        <!-- Blog 8 -->
                        <a href="{{ route('blog.detail', ['slug' => 'the-architecture-of-immortality-building-a-monument-in-a-world-of-sandcastles']) }}">
                            <article class="blog fade-anim" data-delay="0.60">
                                <div class="thumb">
                                    <img src="{{ asset('assets/imgs/blog/blog-12.webp') }}" alt="blog image">
                                </div>
                                <div class="content-wrapper">
                                    <div class="content">
                                        <h2 class="title">The Architecture Of Immortality: Building A Monument In A World Of Sandcastles.
                                            <span class="arrow">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.98834 0.661257C8.91884 0.781628 8.85302 0.903885 8.79094 1.02786C8.47298 1.49122 8.0835 1.90234 7.63629 2.2455C7.07879 2.67328 6.4425 2.98707 5.76373 3.16894C5.08497 3.35082 4.37702 3.39722 3.68033 3.3055C2.98363 3.21377 2.31182 2.98572 1.70325 2.63437L0.869521 4.07843C1.66772 4.53928 2.54888 4.83839 3.46268 4.95869C4.37648 5.079 5.30502 5.01814 6.1953 4.77959C6.36565 4.73394 6.53397 4.68196 6.6999 4.62381L2.03475 12.7041L3.47584 13.5361L8.16052 5.42201C8.19489 5.61171 8.23713 5.80022 8.28719 5.98704C8.52574 6.87732 8.9373 7.71189 9.49839 8.44311C10.0595 9.17433 10.7591 9.78788 11.5573 10.2487L12.391 8.80466C11.7825 8.4533 11.2491 7.98552 10.8213 7.42803C10.3935 6.87053 10.0797 6.23423 9.89783 5.55547C9.71595 4.8767 9.66955 4.16876 9.76128 3.47206C9.83484 2.91326 9.99611 2.37047 10.2384 1.86349C10.3146 1.74781 10.3875 1.62977 10.457 1.50948L10.4323 1.49521L10.4324 1.49499L8.98834 0.661257Z"
                                                        fill="#111111" />
                                                </svg>
                                            </span>
                                        </h2>
                                        <div class="meta">
                                            <span class="name">By <span>Jerry</span></span>
                                            <span class="date has-left-line">2023</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>

                        <!-- Blog 9, 10, 11, 12 follow the same pattern as above -->
                        <!-- Replace href, images, and titles accordingly -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end  -->

</main>

@endsection
