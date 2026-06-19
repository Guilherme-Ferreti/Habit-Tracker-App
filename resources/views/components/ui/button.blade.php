@props(['label', 'color' => 'primary', 'showLoading' => false])

<button
    {{
        $attributes
            ->class([
                'flex flex-1 items-center justify-center gap-2 shadow-sm rounded-xl p-3 font-semibold active:scale-95 transition-scale duration-200 disabled:opacity-50',
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
    @if ($showLoading)
        <span wire:loading.remove> {{ $label }} </span>
        <x-ui.loading-indicator
            wire:loading
            size="sm"
        />
    @else
        {{ $label }}
    @endif
</button>
