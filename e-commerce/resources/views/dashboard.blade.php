<x-app-layout>
    <x-slot name="header">
        <h1 class="font-bold text-headline-md" style="color: var(--sc-on-surface);">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <div class="py-8">
        <div class="sc-container">
            {{-- Welcome Card --}}
            <div class="sc-card mb-8 animate-fade-in">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 rounded-sc-lg flex items-center justify-center" style="background-color: rgba(45, 90, 39, 0.2);">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" style="stroke: var(--sc-primary);">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-headline-md mb-1" style="color: var(--sc-on-surface);">
                            Welcome, {{ Auth::user()->name }}!
                        </h2>
                        <p class="text-body-md" style="color: var(--sc-on-surface-variant);">
                            {{ __("You're logged in and ready to explore your personalized commerce experience.") }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Quick Stats Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                {{-- Stat Card 1 --}}
                <div class="sc-card animate-slide-up" style="animation-delay: 100ms;">
                    <div class="flex items-center justify-between mb-4">
                        <span class="sc-chip">Orders</span>
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" style="stroke: var(--sc-outline);">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                    <p class="text-display-lg mb-1" style="color: var(--sc-on-surface);">0</p>
                    <p class="text-label-sm" style="color: var(--sc-outline);">Total orders</p>
                </div>

                {{-- Stat Card 2 --}}
                <div class="sc-card animate-slide-up" style="animation-delay: 200ms;">
                    <div class="flex items-center justify-between mb-4">
                        <span class="sc-chip">Wishlist</span>
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" style="stroke: var(--sc-outline);">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </div>
                    <p class="text-display-lg mb-1" style="color: var(--sc-on-surface);">0</p>
                    <p class="text-label-sm" style="color: var(--sc-outline);">Saved items</p>
                </div>

                {{-- Stat Card 3 --}}
                <div class="sc-card animate-slide-up" style="animation-delay: 300ms;">
                    <div class="flex items-center justify-between mb-4">
                        <span class="sc-chip">For You</span>
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" style="stroke: var(--sc-outline);">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                        </svg>
                    </div>
                    <p class="text-display-lg mb-1" style="color: var(--sc-on-surface);">—</p>
                    <p class="text-label-sm" style="color: var(--sc-outline);">Recommendations</p>
                </div>
            </div>

            {{-- Recent Activity --}}
            <div class="sc-card animate-slide-up" style="animation-delay: 400ms;">
                <h3 class="text-headline-md mb-4" style="color: var(--sc-on-surface);">Recent Activity</h3>
                <div class="sc-divider mb-6"></div>
                <div class="flex flex-col items-center justify-center py-12">
                    <svg class="w-16 h-16 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" style="stroke: var(--sc-outline-variant);">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>
                    <p class="text-body-lg mb-2" style="color: var(--sc-on-surface-variant);">No recent activity</p>
                    <p class="text-body-md" style="color: var(--sc-outline);">Start exploring products to see your activity here.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
