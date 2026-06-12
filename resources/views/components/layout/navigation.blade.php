<nav
    class="pb-safe absolute bottom-0 z-10 w-full border-t border-gray-100 bg-white shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.05)]"
>
    <div class="flex items-center justify-around p-3">
        @foreach ($links as $link)
            <a
                wire:navigate
                href="{{ $link['route'] }}"
                @class([
                    'flex flex-col items-center' => true,
                    'text-blue-600' => $link['isActive']
                ])
            >
                <x-dynamic-component
                    :component="'ui.icons.' . $link['icon']"
                    class="mb-1"
                />

                <span class="text-xs font-medium">{{ $link['name'] }}</span>
            </a>
        @endforeach
    </div>
</nav>
