@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-500 border-green-600',
        'warning' => 'bg-orange-500 border-orange-600',
        'error' => 'bg-red-500 border-red-600'
    ]
])

<section {{ $attributes->merge(['class' => "{$colors[$type]} text-white border-b p-4 mb-4"]) }}>
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>
        <button class="font-bold">&times;</button>
    </div>
</section>
