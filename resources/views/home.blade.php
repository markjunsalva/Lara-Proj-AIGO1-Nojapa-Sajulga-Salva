@extends('layouts.app')

@section('title', 'Kape Lokal | Find coffee in Ampayon')
@section('meta_description', 'A student-made guide to coffee shops around Ampayon and Caraga State University. Find a place for your next coffee break.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <main id="main-content">
        <section class="hero-section" aria-labelledby="hero-title">
            <div class="site-container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow"><span class="eyebrow-dot"></span> Ampayon, Butuan City <span class="eyebrow-divider">/</span> Near CSU</p>
                    <h1 id="hero-title">Find your next <span>coffee</span> moment.</h1>
                    <p class="hero-description">
                        A student-made guide to the coffee shops around us. Find your kind of cup, discover a new local spot, and make your next coffee break count.
                    </p>
                    <div class="hero-actions">
                        <a class="button button-dark" href="#spots">
                            Explore the guide
                            <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10h12m-5-5 5 5-5 5" /></svg>
                        </a>
                        <a class="text-link" href="#why-local">Why Kape Lokal?</a>
                    </div>
                    <p class="hero-note"><span aria-hidden="true">✳</span> For students. Rooted in our neighborhood.</p>
                </div>

                <div class="hero-visual">
                    <div class="hero-image-frame">
                        <img
                            class="hero-image"
                            data-hero-image
                            data-first-photo="{{ asset('images/hero_carousel1_homepage.png') }}"
                            data-second-photo="{{ asset('images/hero_carousel2_homepage.png') }}"
                            data-third-photo="{{ asset('images/hero_carousel3_homepage.png') }}"
                            src="{{ asset('images/hero_carousel1_homepage.png') }}"
                            alt="Friends sharing coffee around a table"
                            fetchpriority="high"
                        >
                        <div class="hero-image-shade"></div>
                        <div class="hero-photo-caption">
                            <span class="hero-photo-label" data-hero-label>Good coffee, shared with good company.</span>
                            <span class="hero-photo-count" data-hero-count>01 / 03</span>
                        </div>
                    </div>
                    <div class="carousel-toolbar" aria-label="Coffee photo carousel">
                        <p>Little moments, local places.</p>
                        <div class="carousel-controls">
                            <button class="carousel-arrow" type="button" data-carousel-previous aria-label="Previous photo">
                                <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M16 10H4m5 5-5-5 5-5" /></svg>
                            </button>
                            <div class="carousel-dots" aria-label="Choose a photo">
                                <button class="carousel-dot is-active" type="button" data-carousel-slide="0" aria-label="Show photo 1" aria-pressed="true"></button>
                                <button class="carousel-dot" type="button" data-carousel-slide="1" aria-label="Show photo 2" aria-pressed="false"></button>
                                <button class="carousel-dot" type="button" data-carousel-slide="2" aria-label="Show photo 3" aria-pressed="false"></button>
                            </div>
                            <button class="carousel-arrow" type="button" data-carousel-next aria-label="Next photo">
                                <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10h12m-5-5 5 5-5 5" /></svg>
                            </button>
                        </div>
                    </div>
                    <span class="hero-sticker" aria-hidden="true"><span>LOCAL</span><span>GOOD</span><span>☕</span></span>
                </div>
            </div>
        </section>

        <section class="guide-section" id="spots" aria-labelledby="guide-title">
            <div class="site-container">
                <div class="section-heading">
                    <p class="eyebrow">YOUR DAY, YOUR KIND OF COFFEE</p>
                    <h2 id="guide-title">Where does today take you?</h2>
                    <p>Picking a place is part of the coffee break. Start with the mood you’re in.</p>
                </div>

                <div class="mood-grid">
                    <article class="mood-card mood-card-sage">
                        <span class="mood-number">01 <span>— STUDY MODE</span></span>
                        <div class="mood-icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none"><path d="M10 10.5c5.4-2 10.1-.9 14 2.1v27c-3.9-3-8.6-4.1-14-2.1v-27ZM38 10.5c-5.4-2-10.1-.9-14 2.1v27c3.9-3 8.6-4.1 14-2.1v-27Z" /><path d="M15 17c2.4-.5 4.7.1 6.5 1.3M33 17c-2.4-.5-4.7.1-6.5 1.3" /></svg>
                        </div>
                        <h3>A cozy corner<br>to focus.</h3>
                        <p>Find a calm place to settle in, open your notes, and make progress between classes.</p>
                        <span class="mood-arrow" aria-hidden="true">↗</span>
                    </article>

                    <article class="mood-card mood-card-clay">
                        <span class="mood-number">02 <span>— QUICK PICK-ME-UP</span></span>
                        <div class="mood-icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none"><path d="M14 18h19v10a8 8 0 0 1-8 8h-3a8 8 0 0 1-8-8V18Z" /><path d="M33 21h2a4 4 0 1 1 0 8h-2M19 13c0-1.8 2-2 2-4M26 13c0-1.8 2-2 2-4" /></svg>
                        </div>
                        <h3>Something good<br>on a student budget.</h3>
                        <p>Get to know local menus and find a coffee treat that fits your day and your budget.</p>
                        <span class="mood-arrow" aria-hidden="true">↗</span>
                    </article>

                    <article class="mood-card mood-card-butter">
                        <span class="mood-number">03 <span>— CATCH-UP TIME</span></span>
                        <div class="mood-icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" fill="none"><path d="M8.5 11.5h31v22h-18l-9 6v-6h-4v-22Z" /><path d="M16 22.5h.1M24 22.5h.1M32 22.5h.1" /></svg>
                        </div>
                        <h3>Good coffee.<br>Better company.</h3>
                        <p>Discover a welcoming spot for a long chat, a friend’s birthday, or a well-earned break.</p>
                        <span class="mood-arrow" aria-hidden="true">↗</span>
                    </article>
                </div>
            </div>
        </section>

        <section class="why-section" id="why-local" aria-labelledby="why-title">
            <div class="site-container why-grid">
                <div class="why-label">
                    <span class="why-label-mark" aria-hidden="true">KL</span>
                    <span>WHY WE STARTED</span>
                </div>
                <div class="why-copy">
                    <h2 id="why-title">Ampayon has plenty of coffee spots. Finding your favorite should be easy.</h2>
                    <p>
                        We’re CSU students who love a good coffee break and the local places behind it. Kape Lokal brings students and café owners closer together—with helpful details, neighborhood stories, and new spots to try.
                    </p>
                    <a class="text-link text-link-dark" href="{{ url('/about') }}">Get to know us <span aria-hidden="true">↗</span></a>
                </div>
                <div class="why-aside">
                    <span class="aside-quote-mark" aria-hidden="true">“</span>
                    <p>Every local café has a story. Every coffee break can help it travel.</p>
                    <span class="aside-credit">KAPE LOKAL, AMPAYON</span>
                </div>
            </div>
        </section>

        <section class="owner-section" id="owner-note" aria-labelledby="owner-title">
            <div class="site-container owner-card">
                <div>
                    <p class="eyebrow">FOR OUR LOCAL CAFÉS</p>
                    <h2 id="owner-title">Have a favorite spot?<br>Help us put it on the map.</h2>
                    <p>Know a café around Ampayon students should try? We’d love to hear about it.</p>
                </div>
                <a class="button button-light" href="{{ url('/contact') }}">
                    Share a café
                    <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10h12m-5-5 5 5-5 5" /></svg>
                </a>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush
