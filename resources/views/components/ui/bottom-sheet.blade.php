@props(['name', 'title'])

@php
    $openAnimationDuration = 300;
    $closeAnimationDuration = 200;
@endphp

<div
    x-data="{ isOpen: false }"
    x-show="isOpen"
    x-cloak
    @open-bottom-sheet:{{ $name }}.window="() => {
        isOpen = true;
        setTimeout(() => $dispatch('after-open-bottom-sheet:{{ $name }}', $event.detail), {{ $openAnimationDuration }});
    }"
    @close-bottom-sheet:{{ $name }}.window="() => {
        isOpen = false;
        setTimeout(() => $dispatch('after-close-bottom-sheet:{{ $name }}', $event.detail), {{ $closeAnimationDuration }});
    }"
>
    <x-ui.backdrop
        x-show="isOpen"
        @click="$dispatch('close-bottom-sheet:{{ $name }}')"
    />
    <div
        class="absolute bottom-0 z-30 flex max-h-[90vh] w-full flex-col rounded-t-3xl bg-white shadow-2xl"
        x-show="isOpen"
        x-transition:enter="transition-all duration-{{ $openAnimationDuration }} ease-out"
        x-transition:enter-start="translate-y-full"
        x-transition:enter-end="translate-y-0"
        x-transition:leave="transition-all duration-{{ $closeAnimationDuration }} ease-in"
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
