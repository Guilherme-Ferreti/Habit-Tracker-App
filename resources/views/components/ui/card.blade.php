@props(['as' => 'dev'])

<{{ $as }}
    {{
        $attributes->class([
            'flex rounded-2xl border border-gray-100 bg-white p-4 shadow-sm transition-all w-full',
        ])
    }}
>
    {{ $slot }}
</{{ $as }}>
