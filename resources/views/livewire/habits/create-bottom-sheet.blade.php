<x-ui.bottom-sheet name="create-habit" title="Create New Habit">
    <form class="space-y-5">
        <div>
            <label for="habit-name" class="block text-sm font-medium text-gray-700 mb-1">Habit Name</label>
            <input type="text" id="habit-name" placeholder="e.g., Read a book"
                class="w-full bg-gray-50 border border-gray-200 text-gray-900 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Frequency</label>
            <div class="flex gap-2">
                <button type="button"
                    class="flex-1 bg-blue-600 text-white rounded-lg py-2 text-sm font-medium transition-colors">Daily</button>
                <button type="button"
                    class="flex-1 bg-gray-100 text-gray-600 hover:bg-gray-200 rounded-lg py-2 text-sm font-medium transition-colors">Weekly</button>
                <button type="button"
                    class="flex-1 bg-gray-100 text-gray-600 hover:bg-gray-200 rounded-lg py-2 text-sm font-medium transition-colors">Specific</button>
            </div>
        </div>

        <div>
            <label for="habit-target" class="block text-sm font-medium text-gray-700 mb-1">Daily Target
                (Optional)</label>
            <div class="flex gap-3">
                <input type="number" id="habit-target" placeholder="1"
                    class="w-24 bg-gray-50 border border-gray-200 text-gray-900 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all">
                <input type="text" placeholder="times, mins, pages..."
                    class="flex-1 bg-gray-50 border border-gray-200 text-gray-900 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all">
            </div>
        </div>

        <div class="pt-4 flex gap-3">
            <button type="button"
                class="w-1/3 bg-white border-2 border-gray-200 text-gray-700 rounded-xl py-3 font-semibold hover:bg-gray-50 transition-colors">Cancel</button>
            <button type="submit"
                class="w-2/3 bg-slate-900 text-white rounded-xl py-3 font-semibold hover:bg-slate-800 transition-colors shadow-md">Save
                Habit</button>
        </div>
    </form>
</x-ui.bottom-sheet>