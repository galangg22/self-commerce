<x-app-layout>
    <x-slot name="header">
        <h1 class="font-bold text-headline-md" style="color: var(--sc-on-surface);">
            {{ __('Profile') }}
        </h1>
    </x-slot>

    <div class="py-8">
        <div class="sc-container space-y-8">
            <div class="sc-card animate-fade-in">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="sc-card animate-fade-in" style="animation-delay: 100ms;">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="sc-card animate-fade-in" style="animation-delay: 200ms; border-color: rgba(147, 0, 10, 0.3);">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
