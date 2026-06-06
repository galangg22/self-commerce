@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-label-md', 'style' => 'color: var(--sc-on-surface-variant);']) }}>
    {{ $value ?? $slot }}
</label>
