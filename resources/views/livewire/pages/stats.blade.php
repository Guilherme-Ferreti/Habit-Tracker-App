<div class="space-y-6">
    <section class="grid grid-cols-2 gap-4">
        <div class="rounded-2xl border border-gray-100 bg-white p-4 shadow-sm">
            <div class="mb-2 flex h-8 w-8 items-center justify-center rounded-full bg-blue-50 text-blue-600">
                <x-ui.icon
                    name="bolt"
                    size="xs"
                />
            </div>
            <p class="text-2xl font-bold text-gray-800">12</p>
            <p class="text-xs font-medium text-gray-500">Day Streak</p>
        </div>

        <x-ui.card class="flex-col">
            <div class="mb-2 flex h-8 w-8 items-center justify-center rounded-full bg-green-50 text-green-600">
                <x-ui.icon
                    name="check-circled"
                    size="xs"
                />
            </div>
            <p class="text-2xl font-bold text-gray-800">{{ $this->todayCompletionPercentage }}%</p>
            <p class="text-xs font-medium text-gray-500">Completion</p>
        </x-ui.card>
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

    <x-ui.section>
        <x-ui.section.title title="Recent Milestones" />

        <div class="space-y-3">
            <div class="flex items-center gap-4 rounded-xl border border-gray-100 bg-white p-3 shadow-sm">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-yellow-50 text-yellow-500">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        ></path>
                    </svg>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-gray-800">Perfect Week</h4>
                    <p class="text-xs text-gray-500">Completed all daily habits</p>
                </div>
            </div>
        </div>
    </x-ui.section>
</div>
