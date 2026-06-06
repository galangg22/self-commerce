<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Self-Commerce — Sign in to your account">

        <title>{{ config('app.name', 'Self-Commerce') }}</title>

        <!-- Fonts: Nunito Sans -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased sc-hero-gradient">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            {{-- Brand Logo --}}
            <div class="mb-8 animate-fade-in">
                <a href="/" class="flex items-center gap-3 group">
                    {{-- Leaf icon --}}
                    <svg class="w-10 h-10 transition-transform duration-300 group-hover:scale-110" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="20" fill="#2d5a27" fill-opacity="0.3"/>
                        <path d="M12 28C12 28 14 18 20 14C26 10 30 12 30 12C30 12 28 22 22 26C16 30 12 28 12 28Z" fill="#a1d494" fill-opacity="0.8"/>
                        <path d="M14 26C14 26 18 20 24 16" stroke="#bcf0ae" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    <span class="text-headline-md sc-text-gradient">Self-Commerce</span>
                </a>
            </div>

            {{-- Auth Card --}}
            <div class="w-full sm:max-w-md px-8 py-8 sc-glass animate-slide-up" style="box-shadow: var(--sc-shadow-bloom);">
                {{ $slot }}
            </div>

            {{-- Footer accent --}}
            <p class="mt-8 text-label-sm" style="color: var(--sc-outline);">
                &copy; {{ date('Y') }} Self-Commerce. Personalized & Empowering.
            </p>
        </div>
    </body>
</html>
