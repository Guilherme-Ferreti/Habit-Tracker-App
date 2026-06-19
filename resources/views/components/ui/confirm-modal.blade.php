@props([
    'name',
    'title',
    'message' => null,
    'confirmLabel' => 'Confirm',
    'cancelLabel' => 'Cancel',
    'confirmVariant' => 'primary',
    'icon' => null
])

@php
    $iconBg = $confirmVariant === 'danger' ? 'bg-red-50' : 'bg-blue-50';
    $iconColor = $confirmVariant === 'danger' ? 'text-red-600' : 'text-blue-600';
@endphp

<div
    x-data="{
        isOpen: false,
        loading: false,
        payload: {},
    }"
    x-cloak
    @open-confirm-modal:{{ $name }}.window="isOpen = true; loading = false; payload = $event.detail ?? {}"
    @close-confirm-modal:{{ $name }}.window="isOpen = false; loading = false;"
>
    <x-ui.backdrop
        x-show="isOpen"
        class="flex items-center justify-center"
        @click="if (!loading) isOpen = false;"
    />
    <div
        x-show="isOpen"
        class="absolute top-1/2 left-1/2 z-30 w-full max-w-sm -translate-x-1/2 -translate-y-1/2 transform rounded-2xl bg-white p-6 shadow-2xl"
        x-transition:enter="transition-all duration-300 ease-out"
        x-transition:enter-start="scale-95 opacity-0"
        x-transition:enter-end="scale-100 opacity-100"
        x-transition:leave="transition-all duration-200 ease-in"
        x-transition:leave-start="scale-100 opacity-100"
        x-transition:leave-end="scale-95 opacity-0"
        @click.stop
    >
        @if ($icon)
            <div class="mb-4 flex justify-center">
                <div class="{{ $iconBg }} rounded-full p-3">
                    <x-ui.icon
                        :name="$icon"
                        :class="$iconColor"
                        size="md"
                    />
                </div>
            </div>
        @endif

        <h3 class="text-center text-lg font-bold text-gray-800">{{ $title }}</h3>

        @if ($message)
            <p class="mt-2 text-center text-sm text-gray-500">{{ $message }}</p>
        @else
            {{ $slot }}
        @endif

        <div class="mt-6 flex gap-3">
            <x-ui.button
                :label="$cancelLabel"
                color="outline"
                x-bind:disabled="loading"
                @click="isOpen = false"
            />
            <x-ui.button
                :label="$confirmLabel"
                :color="$confirmVariant"
                x-bind:data-loading="loading"
                x-bind:disabled="loading"
                @click="loading = true; $dispatch('confirm-modal:{{ $name }}', payload)"
            />
        </div>
    </div>
</div>
