<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-start text-label-md leading-5 transition duration-200 ease-in-out', 'style' => 'color: var(--sc-on-surface-variant);']) }}
    onmouseover="this.style.backgroundColor='var(--sc-surface-container-highest)'; this.style.color='var(--sc-on-surface)';"
    onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--sc-on-surface-variant)';"
>{{ $slot }}</a>
