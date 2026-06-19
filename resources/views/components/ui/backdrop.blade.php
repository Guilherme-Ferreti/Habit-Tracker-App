<div
    {{
        $attributes->class([
            'absolute inset-0 z-20 bg-slate-900/40 backdrop-blur-sm',
        ])
    }}
    x-transition:enter="transition-opacity duration-300 ease-out"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity duration-200 ease-in"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
></div>
