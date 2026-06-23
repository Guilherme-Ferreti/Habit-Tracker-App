<div class="space-y-6">
    <x-ui.section>
        <x-ui.section.title title="Pending Habits" />

        @forelse ($pendingHabits as $habit)
            <x-ui.card
                wire:key="{{ $habit->id }}"
                class="items-center justify-between"
            >
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                        <x-ui.icon name="cloud" />
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800">{{ $habit->name }}</h3>
                        <p class="text-sm text-gray-500">{{ $habit->category?->name ?? 'Daily' }}</p>
                    </div>
                </div>
                <button
                    wire:click="toggleComplete('{{ $habit->id }}')"
                    wire:target="toggleComplete('{{ $habit->id }}')"
                    wire:loading.remove
                    class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 active:border-blue-600"
                >
                    <span class="sr-only">Mark as complete</span>
                </button>
                <x-ui.loading-indicator
                    wire:loading
                    wire:target="toggleComplete('{{ $habit->id }}')"
                    size="lg"
                />
            </x-ui.card>
        @empty
            <x-ui.empty-state message="No pending habits today!" />
        @endforelse
    </x-ui.section>

    <x-ui.section>
        <x-ui.section.title title="Completed" />

        @forelse ($completedHabits as $habit)
            <x-ui.card
                wire:key="{{ $habit->id }}"
                class="items-center justify-between"
            >
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-green-600">
                        <x-ui.icon name="cube" />
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-500 line-through">{{ $habit->name }}</h3>
                        <p class="text-sm text-gray-400">{{ $habit->category?->name ?? 'Daily' }}</p>
                    </div>
                </div>
                <button
                    wire:click="toggleComplete('{{ $habit->id }}')"
                    wire:target="toggleComplete('{{ $habit->id }}')"
                    wire:loading.remove
                    class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-blue-600 bg-blue-600 transition-colors active:bg-white active:text-blue-600"
                >
                    <x-ui.icon
                        name="check"
                        size="sm"
                        class="text-white"
                    />
                    <span class="sr-only">Mark as incomplete</span>
                </button>
                <x-ui.loading-indicator
                    wire:loading
                    wire:target="toggleComplete('{{ $habit->id }}')"
                    size="lg"
                />
            </x-ui.card>
        @empty
            <x-ui.empty-state message="No habits completed yet today." />
        @endforelse
    </x-ui.section>

    <x-ui.section>
        <x-ui.section.title title="Options" />

        <x-ui.card
            as="a"
            href="{{ route('habits.index') }}"
            wire:navigate
            class="group items-center justify-between text-left transition-colors active:bg-gray-100"
        >
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-slate-900 text-white">
                    <x-ui.icon
                        name="adjustments"
                        size="sm"
                    />
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-800">Manage Habits</p>
                    <p class="text-xs text-gray-500">Edit parameters or delete habits</p>
                </div>
            </div>
            <x-ui.icon
                name="chevron-right"
                size="sm"
                class="text-gray-400 group-active:text-gray-500"
            />
        </x-ui.card>
    </x-ui.section>
</div>
