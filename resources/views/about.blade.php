
@extends('layouts.app')

@section('title', 'About Us | Kape Lokal')
@section('meta_description', 'Learn about Kape Lokal, our story, mission, vision, and the student team behind the guide.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <main id="main-content">

        <!-- ABOUT HERO -->
        <section class="about-hero">
            <div class="site-container about-hero-inner">
                <p class="about-eyebrow">OUR STORY / KAPE LOKAL</p>
                <h1>More than coffee<br><span>A local connection</span></h1>
                <p>
                    We bring locals, csuans and people that currently visiting our city closer to the coffee shops around
                    Ampayon, one local discovery at a time
                </p>
            </div>
        </section>

        <!-- OUR STORY -->
        <section class="about-story">
            <div class="site-container about-story-grid">
                <div class="about-story-image">
                    <img
                        src="{{ asset('images/hero_carousel2_homepage.png') }}"
                        alt="Coffee shop atmosphere"
                    >
                </div>

                <div class="about-story-content">
                    <p class="about-label">HOW IT STARTED</p>
                    <h2>Every corner has a story worth sharing</h2>

                    <p>
                        Kape Lokal started with a simple idea and that is to
                        make finding a good coffee shop around Ampayon easier for everyone
                    </p>

                    <p>
                        As students of Caraga State University,
                        we understand the value of having a nearby
                        place to study, relax, and spend time with friends
                    </p>

                    <div class="story-more" data-story-more hidden>
                        <p>
                            Through this guide, we aim to introduce
                            students to local coffee shops and help
                            these businesses become more discoverable
                            within their community
                        </p>
                    </div>

                    <button
                        class="read-more-button"
                        type="button"
                        data-read-more
                        aria-expanded="false"
                    >
                        Read More
                    </button>
                </div>
            </div>
        </section>

        <!-- MISSION AND VISION -->
        <section class="about-purpose">
            <div class="site-container">
                <div class="about-section-heading">
                    <p class="about-label">WHAT GUIDES US</p>
                    <h2>Our purpose, our direction</h2>
                </div>

                <div class="purpose-grid">
                    <article class="purpose-card">
                        <span>01 / OUR MISSION</span>
                        <h3>Making local coffee easier to discover</h3>
                        <p>
                            Our mission is to provide students with
                            a simple and accessible guide to coffee
                            shops around Ampayon while supporting
                            local cafés through greater visibility
                        </p>
                    </article>

                    <article class="purpose-card">
                        <span>02 / OUR VISION</span>
                        <h3>A community connected through local coffee</h3>
                        <p>
                            Our vision is to become a helpful local
                            guide that connects students, coffee
                            lovers, and neighborhood businesses
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <!-- OUR TEAM -->
        <section class="about-team">
            <div class="site-container">
                <div class="about-section-heading">
                    <p class="about-label">THE PEOPLE BEHIND THE GUIDE</p>
                    <h2>Meet our team.</h2>
                    <p>
                        A student team bringing local coffee discoveries
                        closer to the CSU community
                    </p>
                </div>

                <div class="team-grid">
                    <article class="team-card">
                        <div class="team-initial">KN</div>
                        <p class="team-role">TEAM MEMBER</p>
                        <h3>Kirstein Genzen Nojapa</h3>
                    </article>

                    <article class="team-card">
                        <div class="team-initial">MS</div>
                        <p class="team-role">TEAM MEMBER</p>
                        <h3>Mark Jun Salva</h3>
                    </article>

                    <article class="team-card">
                        <div class="team-initial">DS</div>
                        <p class="team-role">TEAM MEMBER</p>
                        <h3>Dianah Pauline L. Sajulga</h3>
                    </article>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}" defer></script>
@endpush
