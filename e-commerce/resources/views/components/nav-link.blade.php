@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 text-label-md font-semibold leading-5 focus:outline-none transition duration-200 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-label-md font-medium leading-5 focus:outline-none transition duration-200 ease-in-out';

$style = ($active ?? false)
            ? 'border-color: var(--sc-primary); color: var(--sc-on-surface);'
            : 'color: var(--sc-outline);';
@endphp

<a {{ $attributes->merge(['class' => $classes, 'style' => $style]) }}
    @if(!($active ?? false))
        onmouseover="this.style.color='var(--sc-on-surface-variant)'; this.style.borderColor='var(--sc-outline-variant)';"
        onmouseout="this.style.color='var(--sc-outline)'; this.style.borderColor='transparent';"
    @endif
>
    {{ $slot }}
</a>
