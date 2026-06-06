<x-guest-layout>
    <h2 class="text-headline-md mb-2" style="color: var(--sc-on-surface);">Verify your email</h2>
    <p class="text-body-md mb-6" style="color: var(--sc-outline);">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?') }}
    </p>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 p-3 rounded-sc" style="background-color: rgba(45, 90, 39, 0.15); color: var(--sc-primary);">
            <p class="text-label-md">
                {{ __('A new verification link has been sent to your email address.') }}
            </p>
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-primary-button>
                {{ __('Resend Email') }}
            </x-primary-button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="sc-link text-label-md">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
