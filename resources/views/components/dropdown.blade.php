@props([
    'alignment' => 'left',
    'color' => 'white'
])

@php
    $alignmentClasses = [
        'left' => 'left-0',
        'right' => 'right-0'
    ];

    $textColorClasses = [
        'white' => 'text-white',
        'black' => 'text-black'
    ];
@endphp

<div class="relative" x-data="{open: false}">

    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div
        class="absolute {{ $alignmentClasses[$alignment] .' '. $textColorClasses[$color] }} z-20 bg-white rounded shadow-md py-2 mt-1 w-40"
        x-show="open"
        @click.away="open = false"
        x-transition:enter="transition transform duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition transform duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
    >
        {{ $slot }}
    </div>
</div>
