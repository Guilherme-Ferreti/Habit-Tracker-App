@props(['title'])

<h2
    {{
        $attributes->class([
            'text-sm font-semibold tracking-wider text-gray-500 uppercase',
        ])
    }}
    >{{ $title }}
</h2>
