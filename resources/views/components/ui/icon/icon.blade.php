@props(['name', 'size' => 'md'])

<x-dynamic-component
    :component="'ui.icon.' . $name"
    {{
        $attributes->class([
            'size-5' => $size === 'sm',
            'size-6' => $size === 'md',
        ])
    }}
/>
