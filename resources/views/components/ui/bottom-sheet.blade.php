@props(['name', 'title'])

<div
    x-data="{ isOpen: false }"
    x-show="isOpen"
    x-cloak
    @open-bottom-sheet:{{ $name }}.window="isOpen = true;"
    @close-bottom-sheet:{{ $name }}.window="isOpen = false;"
>
    <x-ui.backdrop
        x-show="isOpen"
        @click="$dispatch('close-bottom-sheet:{{ $name }}')"
    />
    <div
        class="absolute bottom-0 z-30 flex max-h-[90vh] w-full flex-col rounded-t-3xl bg-white shadow-2xl"
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
