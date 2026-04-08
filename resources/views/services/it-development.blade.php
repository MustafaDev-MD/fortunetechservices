@extends('layouts.app')

@section('title', 'IT & DEVELOPMENT | Fortune Tech')

@section('content')

<main>

    <!-- hero area start  -->
    <section class="hero-area-service-details">
        <div class="container large">
            <div class="hero-area-service-details-inner section-spacing-top">
                <!-- <div class="service-meta fade-anim">
                                <span class="serial">[SL: 005]</span>
                                <span class="tag">[Brand Guideline]</span>
                                <span class="next-item"><a href="service-details.html">[Next]</a></span>
                            </div> -->
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title font-sequelsans-romanbody">IT & DEVELOPMENT
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="section-content-wrapper fade-anim">
                    <div class="section-content">
                        <div class="text-wrapper">
                            <p class="text">In the modern economy, your code is your foundation. We don't just "build apps"; we engineer scalable, high-availability systems that solve complex business problems. From legacy migrations to cutting-edge cloud architecture, we ensure your technology is a competitive advantage, not a bottleneck.</p>
                        </div>
                        <div class="feature-list">
                            <ul>
                                <li>Custom Enterprise Software</li>
                                <li>Scalable Web & Mobile Platforms</li>
                                <li>Cloud Infrastructure & DevOps</li>
                                <li>Cybersecurity & Data Assurance</li>
                                <li>API Architecture & Integrations</li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-thumb parallax-view">
                        <img src="{{ asset('assets/imgs/gallery/image-28.webp') }}" alt="image" data-speed="0.8">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end  -->

    <!-- approach area start  -->
    <section class="approach-area-service-details-page">
        <div class="container large">
            <div class="approach-area-service-details-page-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper fade-anim" data-direction="left">
                            <span class="section-subtitle">The structured lifecycle of <br>technical execution.</span>
                        </div>
                        <div class="title-wrapper fade-anim" data-direction="right">
                            <h2 class="section-title font-sequelsans-romanbody">The Engineering Protocol. Replacing technical debt with sustainable, high-performance systems.
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="approach-wrapper-box">
                    <span class="steps fade-anim">04</span>
                    <div class="approach-wrapper fade-anim" data-direction="right">
                        <div class="approach-box">
                            <span class="number color">01</span>
                            <h3 class="title">Architectural Reconnaissance</h3>
                            <p class="text"> We begin with a deep dive into your current technical landscape. We map dependencies, identify security risks, and blueprint a system designed for long-term scalability and performance.</p>
                        </div>
                        <div class="approach-box">
                            <span class="number color">02</span>
                            <h3 class="title">Iterative Development</h3>
                            <p class="text">Our engineering team works in agile sprints, producing clean, documented code. You have full visibility into the build as we transform complex requirements into functional, high-speed modules.</p>
                        </div>
                        <div class="approach-box">
                            <span class="number color">03</span>
                            <h3 class="title">Rigorous Quality</h3>
                            <p class="text">Assurance Development is nothing without reliability. We deploy a comprehensive testing suite—covering everything from load testing to security audits—to ensure your platform is rock-solid before launch.</p>
                        </div>
                        <div class="approach-box">
                            <span class="number color">04</span>
                            <h3 class="title">Deployment & Evolution</h3>
                            <p class="text">We handle the high-stakes transition to production. Post-launch, we monitor performance and iterate, ensuring your infrastructure stays modern, secure, and ready for whatever comes next.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- approach area end  -->

    <!-- feature area start  -->
    <section class="feature-area">
        <div class="container large">
            <div class="feature-area-inner section-spacing-top">
                <div class="features-wrapper-box fade-anim">
                    <div class="features-wrapper">
                        <div class="feature-box">
                            <div class="thumb">
                                <img src="{{ asset('assets/imgs/shape/shape-15.webp') }}" alt="image">
                            </div>
                            <div class="content">
                                <h3 class="title">Security-First</h3>
                                <p class="text"> Culture Security isn't an afterthought; it’s baked into our DNA. Every line of code we write and every server we configure follows the highest industry standards for data protection and encryption.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="thumb">
                                <img src="{{ asset('assets/imgs/shape/shape-16.webp') }}" alt="image">
                            </div>
                            <div class="content">
                                <h3 class="title">Scalable Architecture
                                </h3>
                                <p class="text"> We build for tomorrow. Our systems are designed to handle traffic spikes and data growth without compromising speed, ensuring your platform grows seamlessly alongside your business.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="thumb">
                                <img src="{{ asset('assets/imgs/shape/shape-17.webp') }}" alt="image">
                            </div>
                            <div class="content">
                                <h3 class="title">Clean Code
                                </h3>
                                <p class="text">Clean Code Standards Maintainability is key. We write modular, well-documented code that is easy for your internal teams to manage and scale, reducing long-term technical debt and operational costs.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="thumb">
                                <img src="{{ asset('assets/imgs/shape/shape-18.webp') }}" alt="image">
                            </div>
                            <div class="content">
                                <h3 class="title">Cloud-Native <br>Solutions
                                </h3>
                                <p class="text"> We leverage the full power of the cloud to provide maximum uptime and flexibility. Our DevOps expertise ensures your deployment pipelines are automated, efficient, and highly resilient.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area end  -->

    <!-- value area start  -->
    <section class="value-area">
        <div class="container large">
            <div class="value-area-inner section-spacing">
                <div class="section-content-wrapper fade-anim">
                    <div class="section-thumb parallax-view">
                        <img src="{{ asset('assets/imgs/gallery/image-29.webp') }}" alt="image" data-speed="0.8">
                    </div>
                    <div class="section-content">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper">
                                <h2 class="section-title font-sequelsans-romanbody"> We define success by system uptime and operational speed.
                                </h2>
                            </div>
                        </div>
                        <div class="values-wrapper">
                            <div class="value-box">
                                <h3 class="number">99.9%</h3>
                                <p class="text"><b>Average Uptime</b> Achieved across our managed cloud infrastructures and mission-critical applications.</p>
                            </div>
                            <div class="value-box">
                                <h3 class="number">10M+</h3>
                                <p class="text"><b>API Requests</b> Processed daily through our high-concurrency systems with sub-millisecond latency.</p>
                            </div>
                            <div class="value-box">
                                <h3 class="number">85%</h3>
                                <p class="text"><b>Critical Vulnerabilities</b> Our record of maintaining zero high-priority security breaches across all production deployments.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- value area end  -->

    <!-- faq area start  -->
    <section class="faq-area">
        <div class="container large">
            <div class="faq-area-inner section-spacing-top">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle">FAQ</span>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody">Common answers about our IT & Dev Engine.
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="accordion-wrapper fade-anim">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Which tech stacks do you specialize in?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We are platform-agnostic but performance-focused. While we have deep expertise in industry standards like React, Node.js, and Python, we select the stack based on your specific requirements for speed, scalability, and security. We build with the tool that is right for the job, not just what's trending.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    How do you handle the migration of our legacy data?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Legacy migration is a delicate surgical procedure. We use a staged approach to ensure data integrity is maintained and downtime is minimized. Our team builds bridges between your old systems and the new architecture to ensure a seamless transition without loss of business continuity.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do we own the source code after the project is finished?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Completely. We believe you should never be "locked in" to a vendor. All source code, documentation, and architectural diagrams are your intellectual property. We provide everything your team needs to take full ownership once our deployment phase is complete.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How do you ensure our software remains secure against new threats?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Security is a continuous process, not a one-time setup. We offer ongoing maintenance and security monitoring to patch vulnerabilities as they emerge. Our "Security-First" protocol includes regular audits and updates to keep your systems ahead of the curve.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can you integrate with our existing third-party tools?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Integration is one of our core strengths. Whether it's connecting to your CRM, ERP, or payment gateways, we build custom API layers that allow your different software tools to communicate flawlessly. We aim to create a unified technical ecosystem for your brand.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What is your approach to mobile-first development?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We view mobile as the primary touchpoint for most users. Our development process prioritizes responsive design and native-level performance from day one. We ensure that your platform provides a consistent, high-speed experience whether accessed from a desktop or a smartphone.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    What happens if we need to scale our system rapidly?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We build for "elasticity." By utilizing cloud-native architectures (like AWS or Azure), we ensure your system can automatically scale its resources to handle sudden traffic surges. You only pay for what you use, and your users never
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq area end  -->

</main>

@endsection