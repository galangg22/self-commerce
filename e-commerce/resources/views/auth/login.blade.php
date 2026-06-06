<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h2 class="text-headline-md mb-2" style="color: var(--sc-on-surface);">Welcome back</h2>
    <p class="text-body-md mb-6" style="color: var(--sc-outline);">Sign in to your account</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-2 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-5">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-2 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-5">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox"
                    class="rounded-sc-sm border-2 transition duration-200"
                    style="background-color: var(--sc-surface-container-high); border-color: var(--sc-outline-variant); color: var(--sc-primary);"
                    name="remember">
                <span class="ms-2 text-label-md" style="color: var(--sc-on-surface-variant);">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="sc-link text-label-md" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <div class="mt-8">
            <x-primary-button class="w-full justify-center">
                {{ __('Sign in') }}
            </x-primary-button>
        </div>

        <div class="mt-6 text-center">
            <span class="text-label-md" style="color: var(--sc-outline);">Don't have an account?</span>
            @if (Route::has('register'))
                <a class="sc-link text-label-md ms-1" href="{{ route('register') }}">
                    {{ __('Sign up') }}
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>
