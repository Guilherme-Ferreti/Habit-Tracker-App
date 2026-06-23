<div class="space-y-6">
    <section class="grid grid-cols-2 gap-4">
        <x-ui.stats-card
            :stat="$this->completedHabitsCount"
            description="Completed habits"
            icon="bolt"
            color="blue"
        />
        <x-ui.stats-card
            :stat="$this->todayCompletionPercentage . '%'"
            description="Completion"
            icon="check-circled"
            color="green"
        />
    </section>
    <section class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm">
        <h2 class="mb-4 text-sm font-semibold text-gray-800">This Week</h2>

        <div class="flex h-32 items-end justify-between gap-2">
            @foreach ($this->weekCompletion as $week)
                <div
                    wire:key="{{ $week['day'] }}"
                    class="flex h-full w-full flex-col items-center"
                >
                    <div class="relative h-full w-full overflow-hidden rounded-t-md bg-blue-100">
                        <div
                            class="absolute bottom-0 w-full rounded-t-md bg-blue-600 transition-all duration-500"
                            style="height: {{ $week['completedPercentage'] }}%"
                        ></div>
                    </div>
                    <span class="mt-2 text-xs font-medium text-gray-400">{{ $week['label'] }}</span>
                </div>
            @endforeach
        </div>
    </section>
</div>
