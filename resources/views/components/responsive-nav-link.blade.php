@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 text-start text-body-md font-semibold focus:outline-none transition duration-200 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-body-md font-medium focus:outline-none transition duration-200 ease-in-out';

$style = ($active ?? false)
            ? 'border-color: var(--sc-primary); color: var(--sc-primary); background-color: rgba(45, 90, 39, 0.15);'
            : 'color: var(--sc-outline);';
@endphp

<a {{ $attributes->merge(['class' => $classes, 'style' => $style]) }}
    @if(!($active ?? false))
        onmouseover="this.style.color='var(--sc-on-surface-variant)'; this.style.backgroundColor='var(--sc-surface-container-high)'; this.style.borderColor='var(--sc-outline-variant)';"
        onmouseout="this.style.color='var(--sc-outline)'; this.style.backgroundColor='transparent'; this.style.borderColor='transparent';"
    @endif
>
    {{ $slot }}
</a>
