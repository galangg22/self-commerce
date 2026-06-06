@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-semibold text-label-md', 'style' => 'color: var(--sc-primary);']) }}>
        {{ $status }}
    </div>
@endif
