@props([
    'level' => 'NOMINAL',
    'icon' => null,
])

@php
    $key = strtolower(trim(explode('/', $level)[0] ?? 'nominal'));
    $map = [
        'critical' => ['class' => 'badge-critical', 'icon' => 'alert-triangle'],
        'biohazard' => ['class' => 'badge-critical', 'icon' => 'biohazard'],
        'restricted' => ['class' => 'badge-restricted', 'icon' => 'lock'],
        'nominal' => ['class' => 'badge-nominal', 'icon' => 'circle-check'],
        'standby' => ['class' => 'badge-standby', 'icon' => 'activity'],
        'classified' => ['class' => 'badge-classified', 'icon' => 'eye'],
        'clear' => ['class' => 'badge-clear', 'icon' => 'circle-check'],
    ];
    $config = $map[$key] ?? $map['nominal'];
    $iconName = $icon ?? $config['icon'];
@endphp

<span {{ $attributes->merge(['class' => 'badge ' . $config['class']]) }}>
    <x-dynamic-component :component="'tabler-' . $iconName" class="size-3.5" aria-hidden="true" />
    <span>{{ $level }}</span>
</span>
