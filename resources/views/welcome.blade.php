<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Self-Commerce — Personalized & Empowering Commerce. Curated products, just for you.">

        <title>Self-Commerce — Personalized & Empowering Commerce</title>

        <!-- Fonts: Nunito Sans -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="font-sans antialiased" style="background-color: var(--sc-background); color: var(--sc-on-background);">

        {{-- ============================================
             NAVIGATION
             ============================================ --}}
        <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="main-nav"
             style="background-color: rgba(26, 28, 25, 0.85); backdrop-filter: blur(16px); border-bottom: 1px solid var(--sc-outline-variant);">
            <div class="sc-container">
                <div class="flex items-center justify-between h-16">
                    {{-- Logo --}}
                    <a href="/" class="flex items-center gap-2 group">
                        <svg class="w-8 h-8 transition-transform duration-300 group-hover:scale-110" viewBox="0 0 40 40" fill="none">
                            <circle cx="20" cy="20" r="20" fill="#2d5a27" fill-opacity="0.3"/>
                            <path d="M12 28C12 28 14 18 20 14C26 10 30 12 30 12C30 12 28 22 22 26C16 30 12 28 12 28Z" fill="#a1d494" fill-opacity="0.8"/>
                            <path d="M14 26C14 26 18 20 24 16" stroke="#bcf0ae" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                        <span class="text-label-md font-bold" style="color: var(--sc-primary);">Self-Commerce</span>
                    </a>

                    {{-- Nav Actions --}}
                    @if (Route::has('login'))
                        <div class="flex items-center gap-3">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="sc-btn-secondary text-sm px-4 py-2">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-label-md transition-colors duration-200 px-4 py-2" style="color: var(--sc-on-surface-variant);"
                                    onmouseover="this.style.color='var(--sc-primary)'"
                                    onmouseout="this.style.color='var(--sc-on-surface-variant)'">
                                    Log in
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="sc-btn-primary text-sm px-4 py-2">
                                        Get Started
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>

        {{-- ============================================
             HERO SECTION
             ============================================ --}}
        <section class="sc-hero-gradient relative overflow-hidden min-h-screen flex items-center" style="padding-top: 80px;">
            {{-- Ambient glow orbs --}}
            <div class="absolute top-20 left-10 w-96 h-96 rounded-full opacity-20 blur-3xl pointer-events-none" style="background: radial-gradient(circle, #2d5a27 0%, transparent 70%);"></div>
            <div class="absolute bottom-20 right-10 w-80 h-80 rounded-full opacity-15 blur-3xl pointer-events-none" style="background: radial-gradient(circle, #7d3117 0%, transparent 70%);"></div>

            <div class="sc-container relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                    {{-- Left: Copy --}}
                    <div class="animate-fade-in">
                        <div class="mb-6">
                            <span class="sc-chip mb-4 inline-block">✨ Personalized for you</span>
                        </div>
                        <h1 class="text-display-lg mb-6" style="color: var(--sc-on-surface);">
                            Commerce that <br>
                            <span class="sc-text-gradient">knows you.</span>
                        </h1>
                        <p class="text-body-lg mb-8 max-w-lg" style="color: var(--sc-on-surface-variant);">
                            Every product curated, every recommendation intentional. Self-Commerce bridges organic authenticity with precision shopping — making you feel seen, not sold to.
                        </p>
                        <div class="flex flex-wrap items-center gap-4">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="sc-btn-primary px-8 py-4 text-body-md">
                                    Start Shopping
                                    <svg class="w-5 h-5 ml-2 inline-block" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                            @endif
                            <a href="#features" class="sc-btn-secondary px-8 py-4 text-body-md">
                                Learn More
                            </a>
                        </div>

                        {{-- Trust indicators --}}
                        <div class="mt-12 flex items-center gap-8">
                            <div>
                                <p class="text-headline-md font-bold" style="color: var(--sc-primary);">10K+</p>
                                <p class="text-label-sm" style="color: var(--sc-outline);">Happy customers</p>
                            </div>
                            <div class="w-px h-10" style="background-color: var(--sc-outline-variant);"></div>
                            <div>
                                <p class="text-headline-md font-bold" style="color: var(--sc-primary);">4.9★</p>
                                <p class="text-label-sm" style="color: var(--sc-outline);">Average rating</p>
                            </div>
                            <div class="w-px h-10" style="background-color: var(--sc-outline-variant);"></div>
                            <div>
                                <p class="text-headline-md font-bold" style="color: var(--sc-primary);">500+</p>
                                <p class="text-label-sm" style="color: var(--sc-outline);">Curated brands</p>
                            </div>
                        </div>
                    </div>

                    {{-- Right: Hero Visual --}}
                    <div class="relative animate-slide-up" style="animation-delay: 200ms;">
                        <div class="relative">
                            {{-- Main product card mockup --}}
                            <div class="sc-card p-0 overflow-hidden animate-glow-pulse">
                                <div class="aspect-[4/5] relative" style="background: linear-gradient(135deg, var(--sc-surface-container-high), var(--sc-surface-container-lowest));">
                                    {{-- Organic pattern SVG --}}
                                    <svg class="absolute inset-0 w-full h-full opacity-10" viewBox="0 0 400 500" fill="none">
                                        <circle cx="100" cy="100" r="80" stroke="#a1d494" stroke-width="0.5"/>
                                        <circle cx="300" cy="200" r="120" stroke="#a1d494" stroke-width="0.5"/>
                                        <circle cx="200" cy="400" r="100" stroke="#ffb59e" stroke-width="0.5"/>
                                        <path d="M0 250 Q100 200 200 250 T400 250" stroke="#a1d494" stroke-width="0.5" fill="none"/>
                                        <path d="M0 300 Q100 250 200 300 T400 300" stroke="#ffb59e" stroke-width="0.3" fill="none"/>
                                    </svg>
                                    {{-- Central brand mark --}}
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <svg class="w-32 h-32 opacity-30" viewBox="0 0 40 40" fill="none">
                                            <path d="M12 28C12 28 14 18 20 14C26 10 30 12 30 12C30 12 28 22 22 26C16 30 12 28 12 28Z" fill="#a1d494"/>
                                            <path d="M14 26C14 26 18 20 24 16" stroke="#bcf0ae" stroke-width="1" stroke-linecap="round"/>
                                        </svg>
                                    </div>
                                    {{-- Product info overlay --}}
                                    <div class="absolute bottom-0 left-0 right-0 p-6" style="background: linear-gradient(transparent, rgba(13, 15, 12, 0.9));">
                                        <span class="sc-chip mb-2 inline-block text-xs">Eco-Friendly</span>
                                        <h3 class="text-headline-md mb-1" style="color: var(--sc-on-surface);">Artisan Collection</h3>
                                        <p class="text-body-md" style="color: var(--sc-on-surface-variant);">Handcrafted with care</p>
                                        <div class="flex items-center justify-between mt-4">
                                            <span class="text-headline-md font-bold" style="color: var(--sc-primary);">$89.00</span>
                                            <button class="sc-btn-primary px-4 py-2 text-label-sm">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Floating mini cards --}}
                            <div class="absolute -top-4 -right-4 sc-glass p-3 animate-slide-up" style="animation-delay: 600ms;">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background-color: rgba(45, 90, 39, 0.3);">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" style="stroke: var(--sc-primary);">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-label-sm" style="color: var(--sc-on-surface);">Order confirmed</p>
                                        <p class="text-xs" style="color: var(--sc-outline);">Just now</p>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute -bottom-4 -left-4 sc-glass p-3 animate-slide-up" style="animation-delay: 800ms;">
                                <div class="flex items-center gap-2">
                                    <div class="flex -space-x-1">
                                        <div class="w-6 h-6 rounded-full" style="background-color: var(--sc-primary-container); border: 2px solid var(--sc-surface-container);"></div>
                                        <div class="w-6 h-6 rounded-full" style="background-color: var(--sc-secondary-container); border: 2px solid var(--sc-surface-container);"></div>
                                        <div class="w-6 h-6 rounded-full" style="background-color: var(--sc-tertiary-container); border: 2px solid var(--sc-surface-container);"></div>
                                    </div>
                                    <p class="text-label-sm" style="color: var(--sc-on-surface-variant);">+2.4K shopping</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ============================================
             FEATURES SECTION
             ============================================ --}}
        <section id="features" class="py-20 lg:py-32 relative">
            <div class="sc-container">
                <div class="text-center mb-16 animate-fade-in">
                    <span class="sc-chip mb-4 inline-block">Why Self-Commerce?</span>
                    <h2 class="text-headline-lg lg:text-display-lg mb-4" style="color: var(--sc-on-surface);">
                        Built for <span class="sc-text-gradient">individuals</span>
                    </h2>
                    <p class="text-body-lg max-w-2xl mx-auto" style="color: var(--sc-on-surface-variant);">
                        We believe commerce should be personal, sustainable, and empowering. Every feature is designed to make you feel like an individual, not a transaction.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {{-- Feature 1 --}}
                    <div class="sc-card group">
                        <div class="w-12 h-12 rounded-sc-lg flex items-center justify-center mb-6 transition-colors duration-300" style="background-color: rgba(45, 90, 39, 0.2);">
                            <svg class="w-6 h-6 transition-transform duration-300 group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke-width="1.5" style="stroke: var(--sc-primary);">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" />
                            </svg>
                        </div>
                        <h3 class="text-headline-md mb-3" style="color: var(--sc-on-surface);">AI-Powered Curation</h3>
                        <p class="text-body-md" style="color: var(--sc-on-surface-variant);">
                            Smart recommendations that learn your style, not just your browsing history. Discover products that feel handpicked.
                        </p>
                    </div>

                    {{-- Feature 2 --}}
                    <div class="sc-card group">
                        <div class="w-12 h-12 rounded-sc-lg flex items-center justify-center mb-6 transition-colors duration-300" style="background-color: rgba(125, 49, 23, 0.2);">
                            <svg class="w-6 h-6 transition-transform duration-300 group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke-width="1.5" style="stroke: var(--sc-secondary);">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </div>
                        <h3 class="text-headline-md mb-3" style="color: var(--sc-on-surface);">Sustainable Focus</h3>
                        <p class="text-body-md" style="color: var(--sc-on-surface-variant);">
                            Every brand we partner with shares our commitment to sustainability. Shop guilt-free with eco-conscious products.
                        </p>
                    </div>

                    {{-- Feature 3 --}}
                    <div class="sc-card group">
                        <div class="w-12 h-12 rounded-sc-lg flex items-center justify-center mb-6 transition-colors duration-300" style="background-color: rgba(82, 80, 73, 0.3);">
                            <svg class="w-6 h-6 transition-transform duration-300 group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke-width="1.5" style="stroke: var(--sc-tertiary);">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                        </div>
                        <h3 class="text-headline-md mb-3" style="color: var(--sc-on-surface);">Privacy First</h3>
                        <p class="text-body-md" style="color: var(--sc-on-surface-variant);">
                            Your data stays yours. We personalize your experience without compromising your privacy or selling your information.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ============================================
             CTA SECTION
             ============================================ --}}
        <section class="py-20 lg:py-32 relative overflow-hidden">
            {{-- Background glow --}}
            <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, rgba(45, 90, 39, 0.08) 0%, transparent 70%);"></div>

            <div class="sc-container relative z-10">
                <div class="sc-glass p-12 lg:p-20 text-center">
                    <h2 class="text-headline-lg lg:text-display-lg mb-6" style="color: var(--sc-on-surface);">
                        Ready to shop <span class="sc-text-gradient">differently</span>?
                    </h2>
                    <p class="text-body-lg max-w-xl mx-auto mb-10" style="color: var(--sc-on-surface-variant);">
                        Join thousands who've discovered a better way to shop. Personalized, sustainable, and empowering.
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-4">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="sc-btn-primary px-10 py-4 text-body-md">
                                Create Free Account
                            </a>
                        @endif
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="sc-btn-secondary px-10 py-4 text-body-md">
                                Sign In
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        {{-- ============================================
             FOOTER
             ============================================ --}}
        <footer style="background-color: var(--sc-surface-container-lowest); border-top: 1px solid var(--sc-outline-variant);">
            <div class="sc-container py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                    {{-- Brand --}}
                    <div class="md:col-span-2">
                        <a href="/" class="flex items-center gap-2 mb-4 group">
                            <svg class="w-8 h-8" viewBox="0 0 40 40" fill="none">
                                <circle cx="20" cy="20" r="20" fill="#2d5a27" fill-opacity="0.3"/>
                                <path d="M12 28C12 28 14 18 20 14C26 10 30 12 30 12C30 12 28 22 22 26C16 30 12 28 12 28Z" fill="#a1d494" fill-opacity="0.8"/>
                                <path d="M14 26C14 26 18 20 24 16" stroke="#bcf0ae" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                            <span class="text-label-md font-bold" style="color: var(--sc-primary);">Self-Commerce</span>
                        </a>
                        <p class="text-body-md max-w-sm" style="color: var(--sc-outline);">
                            Personalized & Empowering Commerce. Bridging organic authenticity with modern e-commerce precision.
                        </p>
                    </div>

                    {{-- Links --}}
                    <div>
                        <h4 class="text-label-md mb-4" style="color: var(--sc-on-surface);">Platform</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-body-md transition-colors duration-200" style="color: var(--sc-outline);" onmouseover="this.style.color='var(--sc-primary)'" onmouseout="this.style.color='var(--sc-outline)'">Features</a></li>
                            <li><a href="#" class="text-body-md transition-colors duration-200" style="color: var(--sc-outline);" onmouseover="this.style.color='var(--sc-primary)'" onmouseout="this.style.color='var(--sc-outline)'">Pricing</a></li>
                            <li><a href="#" class="text-body-md transition-colors duration-200" style="color: var(--sc-outline);" onmouseover="this.style.color='var(--sc-primary)'" onmouseout="this.style.color='var(--sc-outline)'">About</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-label-md mb-4" style="color: var(--sc-on-surface);">Support</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-body-md transition-colors duration-200" style="color: var(--sc-outline);" onmouseover="this.style.color='var(--sc-primary)'" onmouseout="this.style.color='var(--sc-outline)'">Help Center</a></li>
                            <li><a href="#" class="text-body-md transition-colors duration-200" style="color: var(--sc-outline);" onmouseover="this.style.color='var(--sc-primary)'" onmouseout="this.style.color='var(--sc-outline)'">Contact</a></li>
                            <li><a href="#" class="text-body-md transition-colors duration-200" style="color: var(--sc-outline);" onmouseover="this.style.color='var(--sc-primary)'" onmouseout="this.style.color='var(--sc-outline)'">Privacy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="sc-divider mb-8"></div>

                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <p class="text-label-sm" style="color: var(--sc-outline);">
                        &copy; {{ date('Y') }} Self-Commerce. All rights reserved.
                    </p>
                    <p class="text-label-sm" style="color: var(--sc-outline);">
                        Built with Laravel v{{ app()->version() }}
                    </p>
                </div>
            </div>
        </footer>

        {{-- Scroll animations --}}
        <script>
            // Intersection Observer for scroll-triggered animations
            document.addEventListener('DOMContentLoaded', () => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                }, { threshold: 0.1 });

                document.querySelectorAll('#features .sc-card').forEach((card, i) => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    card.style.transition = `opacity 0.6s ease ${i * 0.15}s, transform 0.6s ease ${i * 0.15}s`;
                    observer.observe(card);
                });
            });
        </script>
    </body>
</html>
