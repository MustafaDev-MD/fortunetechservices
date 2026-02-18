@extends('layouts.app')

@section('title', '404 | Page Not Found')

@section('content')
<main>

    <!-- error area start  -->
    <section class="error-area">
        <div class="container large">
            <div class="error-area-inner section-spacing">
                <div class="section-content text-center">

                    {{-- Optional Animation / Image --}}
                    <div class="section-title-wrapper mb-4">
                        <img src="{{ asset('assets/imgs/gallery/404animation.png') }}" alt="404 Animation" class="mx-auto d-block">
                    </div>

                    <div class="section-title-wrapper mb-4">
                        <!-- <div class="subtitle-wrapper">
                            <span class="section-subtitle">404</span>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title font-sequelsans-romanbody">Oops! Page not found</h2>
                        </div> -->
                        <p class="text mt-3">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                    </div>

                    <div class="btn-wrapper">
                        <a href="{{ route('home') }}" class="rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">Back - To - Home</span>
                                <span class="text-two">Back - To - Home</span>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- error area end  -->

</main>
@endsection