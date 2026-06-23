@props(['stat', 'description', 'icon', 'color'])

<div class="rounded-2xl border border-gray-100 bg-white p-4 shadow-sm">
    <div
        @class([
            'mb-2 flex h-8 w-8 items-center justify-center rounded-full',
            'bg-blue-50 text-blue-600' => $color === 'blue',
            'bg-green-50 text-green-600' => $color === 'green',
            'bg-purple-50 text-purple-600' => $color === 'purple',
            'bg-cyan-50 text-cyan-600' => $color === 'cyan'
        ])
    >
        <x-ui.icon
            :name="$icon"
            size="xs"
        />
    </div>
    <p class="text-2xl font-bold text-gray-800">{{ $stat }}</p>
    <p class="text-xs font-medium text-gray-500">{{ $description }}</p>
</div>
