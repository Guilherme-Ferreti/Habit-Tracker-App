@props(['text'])

<label
    {{
        $attributes->class([
            'block text-sm font-medium text-gray-700',
        ])
    }}
>
    {{ $text }}
</label>
