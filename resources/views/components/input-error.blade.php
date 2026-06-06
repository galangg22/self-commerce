@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-label-sm space-y-1', 'style' => 'color: var(--sc-error);']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
