@props(['label', 'color' => 'primary'])

<button
    {{
        $attributes
            ->class([
                'group flex flex-1 items-center justify-center gap-2 shadow-sm rounded-xl p-3 font-semibold active:scale-95 transition-scale duration-200 disabled:opacity-50',
                'bg-blue-600 text-white' => $color === 'primary',
                'bg-slate-900 text-white' => $color === 'secondary',
                'bg-red-600 text-white' => $color === 'danger',
                'border-2 border-gray-200 bg-white text-gray-700' => $color === 'outline',
            ])
            ->merge([
                'type' => 'button',
            ])
    }}
>
    <span class="group-data-loading:hidden">{{ $label }}</span>
    <x-ui.loading-indicator
        class="group-not-data-loading:hidden"
        size="sm"
    />
</button>
