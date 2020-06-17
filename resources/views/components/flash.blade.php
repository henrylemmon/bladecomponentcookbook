@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-300 border-green-600',
        'warning' => 'bg-orange-300 border-orange-600',
        'error' => 'bg-red-300 border-red-600'
    ]
])

<section {{ $attributes->merge(['class' => "{$colors[$type]} border-b p-4 mb-4"]) }}>
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>
        <button class="font-bold">&times;</button>
    </div>
</section>
