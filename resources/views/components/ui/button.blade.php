@props([
    'color' => 'primary'
])

<button
    {{
        $attributes
            ->class([
                'shadow-sm rounded-xl p-3 font-semibold active:scale-95 transition-scale duration-200 disabled:opacity-50',
                'bg-blue-600 text-white' => $color === 'primary',
                'bg-slate-900 text-white' => $color === 'secondary',
                'border-2 border-gray-200 bg-white text-gray-700' => $color === 'outline',
            ])
            ->merge([
                'type' => 'button',
            ])
    }}
>
    {{ $slot }}
</button>
