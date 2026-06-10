<x-ui.bottom-sheet name="create-habit" title="Create New Habit">
    <form class="space-y-5">
        <div>
            <label for="habit-name" class="mb-1 block text-sm font-medium text-gray-700">Habit Name</label>
            <input
                type="text"
                id="habit-name"
                placeholder="e.g., Read a book"
                class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 transition-all focus:border-transparent focus:ring-2 focus:ring-blue-600 focus:outline-none"
            />
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium text-gray-700">Frequency</label>
            <div class="flex gap-2">
                <button
                    type="button"
                    class="flex-1 rounded-lg bg-blue-600 py-2 text-sm font-medium text-white transition-colors"
                >
                    Daily
                </button>
                <button
                    type="button"
                    class="flex-1 rounded-lg bg-gray-100 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-200"
                >
                    Weekly
                </button>
                <button
                    type="button"
                    class="flex-1 rounded-lg bg-gray-100 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-200"
                >
                    Specific
                </button>
            </div>
        </div>

        <div>
            <label for="habit-target" class="mb-1 block text-sm font-medium text-gray-700"
                >Daily Target (Optional)</label
            >
            <div class="flex gap-3">
                <input
                    type="number"
                    id="habit-target"
                    placeholder="1"
                    class="w-24 rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 transition-all focus:border-transparent focus:ring-2 focus:ring-blue-600 focus:outline-none"
                />
                <input
                    type="text"
                    placeholder="times, mins, pages..."
                    class="flex-1 rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 transition-all focus:border-transparent focus:ring-2 focus:ring-blue-600 focus:outline-none"
                />
            </div>
        </div>

        <div class="flex gap-3 pt-4">
            <x-ui.button class="w-1/3" color="outline" @click="$dispatch('close-bottom-sheet', 'create-habit')">
                Cancel</x-ui.button
            >
            <x-ui.button type="submit" class="w-2/3" color="secondary">Save Habit</x-ui.button>
        </div>
    </form>
</x-ui.bottom-sheet>
