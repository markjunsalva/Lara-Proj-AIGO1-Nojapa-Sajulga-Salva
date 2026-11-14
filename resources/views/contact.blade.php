@extends('layouts.app')

@section('title', 'Contact | Kape Lokal')
@section('meta_description', 'Share a café recommendation, update, or question with the Kape Lokal team.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <main id="main-content">
        <section class="contact-hero" aria-labelledby="contact-title">
            <div class="site-container contact-hero-inner">
                <p class="contact-eyebrow"><span class="eyebrow-dot"></span> A NOTE TO KAPE LOKAL</p>
                <h1 id="contact-title">Let’s keep <span>local coffee</span> close.</h1>
                <p>Know a café students should try, or have a note about the guide? We’d love to hear from you.</p>
            </div>
        </section>

        <section class="contact-content" aria-label="Contact details and message form">
            <div class="site-container contact-content-grid">
                <div class="contact-details">
                    <p class="contact-section-label">GET IN TOUCH</p>
                    <h2>Good local guides grow with the neighborhood.</h2>
                    <p class="contact-details-intro">Your recommendations and feedback help us make this guide more useful for students and local cafés.</p>

                    <div class="contact-info-list">
                        <article class="contact-info-item">
                            <span class="contact-info-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" /><circle cx="12" cy="10" r="2.5" /></svg>
                            </span>
                            <div>
                                <h3>Our neighborhood</h3>
                                <p>Ampayon, Butuan City<br>Near Caraga State University</p>
                            </div>
                        </article>

                        <article class="contact-info-item">
                            <span class="contact-info-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M3 5h18v14H3z" /><path d="m3.5 6 8.5 7 8.5-7" /></svg>
                            </span>
                            <div>
                                <h3>What to send</h3>
                                <p>Suggest a café, share an update, or tell us how to improve the guide.</p>
                            </div>
                        </article>
                    </div>

                    <div class="contact-project-note">
                        <span class="contact-project-mark" aria-hidden="true">KL</span>
                        <p><strong>A student-made guide.</strong><br>Rooted in our neighborhood and made for the CSU community.</p>
                    </div>
                </div>

                <section class="contact-form-card" aria-labelledby="contact-form-title">
                    <header class="contact-form-heading">
                        <p class="contact-section-label">SEND US A NOTE</p>
                        <h2 id="contact-form-title">What’s on your mind?</h2>
                        <p>Fields marked <span aria-hidden="true">*</span> are required.</p>
                    </header>

                    <form class="contact-form" data-contact-form novalidate>
                        <div class="form-field">
                            <label for="contact-name">Your name <span aria-hidden="true">*</span></label>
                            <input id="contact-name" name="name" type="text" autocomplete="name" placeholder="e.g. Alex Santos" minlength="2" maxlength="80" required aria-describedby="contact-name-error" data-validate>
                            <span class="field-error" id="contact-name-error" data-error-for="contact-name"></span>
                        </div>

                        <div class="form-field">
                            <label for="contact-email">Email address <span aria-hidden="true">*</span></label>
                            <input id="contact-email" name="email" type="email" autocomplete="email" placeholder="you@example.com" maxlength="254" required aria-describedby="contact-email-error" data-validate>
                            <span class="field-error" id="contact-email-error" data-error-for="contact-email"></span>
                        </div>

                        <div class="form-field">
                            <label for="contact-topic">What would you like to share? <span aria-hidden="true">*</span></label>
                            <select id="contact-topic" name="topic" required aria-describedby="contact-topic-error" data-validate>
                                <option value="" selected disabled>Choose a topic</option>
                                <option value="cafe-recommendation">Recommend a café</option>
                                <option value="cafe-update">Share a café update</option>
                                <option value="feedback">Give feedback</option>
                                <option value="other">Something else</option>
                            </select>
                            <span class="field-error" id="contact-topic-error" data-error-for="contact-topic"></span>
                        </div>

                        <div class="form-field">
                            <label for="contact-message">Your message <span aria-hidden="true">*</span></label>
                            <textarea id="contact-message" name="message" rows="5" placeholder="Tell us a little more..." minlength="10" maxlength="1200" required aria-describedby="contact-message-error" data-validate></textarea>
                            <span class="field-error" id="contact-message-error" data-error-for="contact-message"></span>
                        </div>

                        <button class="contact-submit" type="submit">
                            Check message
                            <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10h12m-5-5 5 5-5 5" /></svg>
                        </button>
                        <p class="contact-form-note">This is a class-project demo. The form checks your entries in the browser, but does not send or store your message.</p>
                        <p class="contact-form-status" role="status" aria-live="polite" data-form-status hidden></p>
                    </form>
                </section>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush
