@extends('layouts.app')

@section('title', "FAQ's | Fortune Tech")

@section('content')

<main>

    <!-- page title area start  -->
    <section class="page-title-area">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim">FAQ's</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- faq area start  -->
    <section class="faq-area-faq-page">
        <div class="container large">
            <div class="faq-area-faq-page-inner">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle">FAQ</span>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody another-hed">Learn some common answers about newly projects
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="accordion-wrapper fade-anim">
                    <div class="title-wrapper">
                        <h3 class="title">The Engine (Services)
                        </h3>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What defines the Fortune Tech "Industrial-Grade" methodology?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We move beyond standard agency "deliverables" to build robust digital engines. Our focus is on structural integrity and performance architecture, ensuring that every asset we build is capable of sustaining exponential growth without failure.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Why do you prioritize structural integrity over creative fluff?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aesthetics are secondary to function. While we provide high-fidelity design, our primary objective is the logic behind the layout. A beautiful interface that doesn't convert is a structural failure; we engineer for impact first.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Does the Engine support existing internal teams?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes. We often act as a high-performance extension for internal marketing or dev units. We provide the "Forensic" audit and strategic mapping that allows your team to execute with higher precision and less waste.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="accordion-wrapper fade-anim">
                    <div class="title-wrapper">
                        <h3 class="title">The Protocol (Process)
                        </h3>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What is the timeline from Reconnaissance to Deployment?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Precision takes time, but our protocol is built for velocity. Following our 04-step process, we typically move from initial Market Reconnaissance to Kinetic Deployment within a 4-to-6 week window, depending on the complexity of the stack.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    How is the "Growth Protocol" integrated into our current operations?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We don't guess; we map. Our protocol replaces standard trial-and-error with a forensic approach to ROI. We strip down your current data to find leaks before we ever spend a dollar on deployment.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How does Fortune Tech handle real-time optimization and scale?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Once a campaign is "Kinetic," we analyze real-time data to cut what fails and double down on what wins. This "Optimization & Scale" phase is where we transform steady growth into exponential results.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="accordion-wrapper fade-anim">
                    <div class="title-wrapper">
                        <h3 class="title">The Talent (Careers)
                        </h3>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What is the 04-Step Selection Protocol for candidates?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Entry into our team is rigorous. It begins with Reconnaissance (Application Review) and moves through Tactical Briefing, a Technical Stress-Test, and finally, Induction. We only hire those who can prove their ability to deliver under pressure.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Why do you recruit "Outliers" instead of traditional employees?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Standard employees follow instructions; Outliers build systems. We are looking for architects and engineers who value performance over participation.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is the "Elite Reserve" and how do I join the radar?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The Elite Reserve is our talent ecosystem. We maintain a 1% acceptance standard. If you are a high-performer but don't see an open deployment, submitting your credentials puts you on our "Talent Radar" for priority contact when we scale.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="accordion-wrapper fade-anim">
                    <div class="title-wrapper">
                        <h3 class="title">Logistics (Operations)
                        </h3>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How is ROI measured and verified within the engine?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We utilize forensic tracking. Every deployment is mapped to specific KPIs—whether that is lead quality, conversion velocity, or cost-per-acquisition. If it can't be measured, we don't build it.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    How does Fortune Tech manage global deployments across timezones?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our operations are global by design. We utilize "Zero Silo" communication systems to ensure project managers and engineers are aligned regardless of geography. Our "Industrial-Grade" project management ensures 24/7 momentum on all critical tasks.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is the capacity for exponential scale once a project is live?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our architectures are built to be "future-proof." We don't build for today's traffic; we build for the traffic you will have in 2026. This allows us to scale your operations instantly as soon as the data confirms a winning strategy.
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