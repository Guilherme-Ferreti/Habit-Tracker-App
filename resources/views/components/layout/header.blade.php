<header class="sticky top-0 z-10 bg-slate-900 p-5 pt-8 text-white">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold tracking-tight">Today</h1>
            <p class="text-sm text-slate-400">{{ now()->format('l, F j') }}</p>
        </div>
        <button
            x-data
            @click="$dispatch('open-bottom-sheet', 'create-habit')"
            class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-600 text-white shadow-md transition-colors hover:bg-blue-500"
        >
            <x-ui.icons.plus />
        </button>
    </div>
</header>

@push('bottom-sheets')
    <livewire:habits.create-bottom-sheet />
@endpush
