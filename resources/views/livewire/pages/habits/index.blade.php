<div class="space-y-6">
    <x-ui.page.title
        title="Manage Habits"
        :back-link="route('home')"
    />
    <x-ui.section>
        @foreach ($habits as $habit)
            <x-ui.card>
                <div>
                    <h3 class="text-base font-bold text-gray-800">{{ $habit->name }}</h3>
                    <p class="text-xs text-gray-500">Daily • {{ $habit->category->name }}</p>
                </div>
                <div class="flex items-center gap-1">
                    <button
                        title="Edit"
                        class="rounded-xl p-2 text-slate-600 transition-colors active:bg-blue-50 active:text-blue-600"
                        @click="$dispatch('open-bottom-sheet:edit-habit', { id: '{{ $habit->id }}' })"
                    >
                        <x-ui.icon
                            name="pencil"
                            size="sm"
                        />
                    </button>
                    <button
                        title="Delete"
                        class="rounded-xl p-2 text-slate-600 transition-colors active:bg-red-50 active:text-red-600"
                    >
                        <x-ui.icon
                            name="trash"
                            size="sm"
                        />
                    </button>
                </div>
            </x-ui.card>
        @endforeach
    </x-ui.section>
</div>

@push('bottom-sheets')
    <livewire:habits.edit-bottom-sheet />
@endpush
