@props(['name', 'title'])

<div
    x-data="{ isOpen: false, name: @js($name) }"
    x-show="isOpen"
    x-cloak
    @open-bottom-sheet.window="if ($event.detail === name) isOpen = true;"
    @close-bottom-sheet.window="if ($event.detail === name || $event.detail[0] === name) isOpen = false;"
>
    <div
        class="backdrop"
        x-show="isOpen"
        x-transition:enter="transition-opacity duration-300 ease-out"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity duration-200 ease-in"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="isOpen = false"
    ></div>

    <div
        class="absolute bottom-0 z-30 mx-auto flex max-h-[90vh] w-full max-w-md flex-col rounded-t-3xl bg-white shadow-2xl"
        x-show="isOpen"
        x-transition:enter="transition-all duration-300 ease-out"
        x-transition:enter-start="translate-y-full"
        x-transition:enter-end="translate-y-0"
        x-transition:leave="transition-all duration-200 ease-in"
        x-transition:leave-start="translate-y-0"
        x-transition:leave-end="translate-y-full"
    >
        <div class="flex w-full justify-center pt-3 pb-2">
            <div class="h-1.5 w-12 rounded-full bg-gray-200"></div>
        </div>

        <div class="pb-safe overflow-x-auto p-6">
            <h2 class="mb-5 text-xl font-bold text-gray-800">{{ $title }}</h2>

            {{ $slot }}
        </div>
    </div>
</div>
