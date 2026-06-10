@props(['name', 'title'])

<div
    x-data="{ open: false, name: @js($name) }"
    x-show="open"
    x-cloak
    class="backdrop"
    @open-bottom-sheet.window="if ($event.detail === name) open = true;"
>
    <div
        @click.away="open = false"
        class="mx-auto flex max-h-[90vh] w-full max-w-md flex-col rounded-t-3xl bg-white shadow-2xl"
    >
        <div class="flex w-full justify-center pt-3 pb-2">
            <div class="h-1.5 w-12 rounded-full bg-gray-200"></div>
        </div>

        <div class="pb-safe overflow-y-auto p-6">
            <h2 class="mb-5 text-xl font-bold text-gray-800">{{ $title }}</h2>

            {{ $slot }}
        </div>
    </div>
</div>
