@props(['title', 'backLink' => null])

<div class="flex items-center gap-3">
    @if ($backLink)
        <a
            href="{{ $backLink }}"
            class="rounded-lg p-1 text-gray-600 transition-colors active:bg-gray-100 active:text-gray-900"
            wire:navigate
        >
            <x-ui.icons.arrow-left />
        </a>
    @endif
    <h1 class="text-2xl font-bold tracking-tight text-gray-900">{{ $title }}</h1>
</div>
