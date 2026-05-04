@props([
    'size' => 48,
    'invert' => false,
    'red' => '#ED1C24',
    'white' => '#FFFFFF',
])

@php
    $primary = $invert ? $white : $red;
    $secondary = $invert ? $red : $white;
@endphp

<span
    {{ $attributes->merge(['class' => 'umbrella-mark']) }}
    style="width: {{ $size }}px; height: {{ $size }}px;"
    aria-hidden="true"
>
    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
        <g transform="translate(32 32)">
            <circle r="30" fill="{{ $primary }}" />
            <g>
                <path d="M0 -30 L21.21 -21.21 L0 0 Z" fill="{{ $secondary }}" />
                <path d="M21.21 -21.21 L30 0 L0 0 Z" fill="{{ $primary }}" />
                <path d="M30 0 L21.21 21.21 L0 0 Z" fill="{{ $secondary }}" />
                <path d="M21.21 21.21 L0 30 L0 0 Z" fill="{{ $primary }}" />
                <path d="M0 30 L-21.21 21.21 L0 0 Z" fill="{{ $secondary }}" />
                <path d="M-21.21 21.21 L-30 0 L0 0 Z" fill="{{ $primary }}" />
                <path d="M-30 0 L-21.21 -21.21 L0 0 Z" fill="{{ $secondary }}" />
                <path d="M-21.21 -21.21 L0 -30 L0 0 Z" fill="{{ $primary }}" />
            </g>
            <circle r="5" fill="{{ $primary }}" stroke="{{ $secondary }}" stroke-width="1.5" />
        </g>
    </svg>
</span>
