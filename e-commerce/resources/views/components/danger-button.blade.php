<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-6 py-3 rounded-sc font-semibold text-label-md tracking-wide border border-transparent transition-all duration-200 focus-visible:outline-2 focus-visible:outline-offset-2']) }}
    style="background-color: var(--sc-error-container); color: var(--sc-on-error-container); --focus-color: var(--sc-error);"
>
    {{ $slot }}
</button>
