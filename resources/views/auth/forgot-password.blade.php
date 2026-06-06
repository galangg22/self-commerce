<x-guest-layout>
    <h2 class="text-headline-md mb-2" style="color: var(--sc-on-surface);">Forgot password?</h2>
    <p class="text-body-md mb-6" style="color: var(--sc-outline);">
        {{ __('No problem. Just let us know your email address and we will email you a password reset link.') }}
    </p>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-2 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-8">
            <x-primary-button class="w-full justify-center">
                {{ __('Send Reset Link') }}
            </x-primary-button>
        </div>

        <div class="mt-6 text-center">
            <a class="sc-link text-label-md" href="{{ route('login') }}">
                ← Back to sign in
            </a>
        </div>
    </form>
</x-guest-layout>
