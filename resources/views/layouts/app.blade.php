<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('meta_description', 'Discover independent coffee shops around Ampayon and Caraga State University.')">
        <meta name="theme-color" content="#f6f3eb">
        <title>@yield('title', 'Kape Lokal | Ampayon Coffee Guide')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @stack('styles')
    </head>
    <body>
        <a class="skip-link" href="#main-content">Skip to content</a>

        <div class="announcement-bar">
            <p>A student-made guide to coffee around Ampayon, Butuan City</p>
        </div>

        <header class="site-header">
            <div class="site-container header-inner">
                <a class="brand" href="{{ route('home') }}" aria-label="Kape Lokal home">
                    <span class="brand-mark" aria-hidden="true">
                        <svg viewBox="0 0 36 36" fill="none">
                            <path d="M8 14h17v9a7 7 0 0 1-7 7h-3a7 7 0 0 1-7-7v-9Z" />
                            <path d="M25 17h2.5a3.5 3.5 0 0 1 0 7H25M12 9c0-1.6 1.8-1.8 1.8-3.5M19 9c0-1.6 1.8-1.8 1.8-3.5" />
                        </svg>
                    </span>
                    <span class="brand-name">Kape <span>Lokal</span></span>
                </a>

                <button class="menu-toggle" type="button" aria-label="Open navigation menu" aria-expanded="false" aria-controls="primary-navigation">
                    <span></span>
                    <span></span>
                </button>

                <nav class="primary-navigation" id="primary-navigation" aria-label="Main navigation">
                    <a class="navigation-link" href="{{ route('home') }}" @if (request()->routeIs('home')) aria-current="page" @endif>Home</a>
                    <a class="navigation-link" href="{{ url('/about') }}">About</a>
                    <a class="navigation-link" href="{{ route('contact') }}" @if (request()->routeIs('contact')) aria-current="page" @endif>Contact</a>
                    <a class="navigation-cta" href="{{ url('/contact') }}">For café owners <span aria-hidden="true">↗</span></a>
                </nav>
            </div>
        </header>

        @yield('content')

        <footer class="site-footer">
            <div class="site-container footer-main">
                <div class="footer-brand-block">
                    <a class="brand footer-brand" href="{{ route('home') }}">
                        <span class="brand-mark" aria-hidden="true">
                            <svg viewBox="0 0 36 36" fill="none">
                                <path d="M8 14h17v9a7 7 0 0 1-7 7h-3a7 7 0 0 1-7-7v-9Z" />
                                <path d="M25 17h2.5a3.5 3.5 0 0 1 0 7H25M12 9c0-1.6 1.8-1.8 1.8-3.5M19 9c0-1.6 1.8-1.8 1.8-3.5" />
                            </svg>
                        </span>
                        <span class="brand-name">Kape <span>Lokal</span></span>
                    </a>
                    <p>A little guide to the coffee places that make our neighborhood feel like home.</p>
                </div>

                <div class="footer-location">
                    <span class="footer-label">Made around</span>
                    <p>Ampayon, Butuan City<br>Caraga State University</p>
                </div>

                <div class="footer-team">
                    <span class="footer-label">A student project by</span>
                    <p>Kirstein Genzen Nojapa<br>Mark Salva<br>Dianah Pauline L. Sajulga</p>
                </div>
            </div>
            <div class="site-container footer-bottom">
                <span>© {{ date('Y') }} Kape Lokal</span>
                <span>Supporting local, one coffee break at a time.</span>
            </div>
        </footer>

        @stack('scripts')
    </body>
</html>
