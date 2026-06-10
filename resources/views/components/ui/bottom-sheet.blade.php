@props(['name', 'title'])

<div
    x-data="{ open: false, name: @js($name) }"
    x-show="open"
    x-cloak
    class="backdrop"
    @open-bottom-sheet.window="if($event.detail === name) open = true"
>
    <div
        @click.away="open = false"
        class="bg-white w-full max-w-md mx-auto rounded-t-3xl shadow-2xl flex flex-col max-h-[90vh]"
    >
        <div class="w-full flex justify-center pt-3 pb-2">
            <div class="w-12 h-1.5 bg-gray-200 rounded-full"></div>
        </div>

        <div class="p-6 overflow-y-auto pb-safe">
            <h2 class="text-xl font-bold text-gray-800 mb-5">{{ $title }}</h2>

            {{ $slot }}
        </div>
    </div>
</div>