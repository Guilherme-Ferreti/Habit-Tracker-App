<div class="space-y-6">
    <x-ui.page.title
        title="Manage Habits"
        :back-link="route('home')"
    />

    <div class="space-y-3">
        <div class="flex items-center justify-between rounded-2xl border border-gray-100 bg-white p-4 shadow-sm">
            <div>
                <h3 class="text-base font-bold text-gray-800">Morning Walk</h3>
                <p class="text-xs text-gray-500">Daily • 30 minutes</p>
            </div>

            <div class="flex items-center gap-1">
                <button
                    title="Edit"
                    class="rounded-xl p-2 text-slate-600 transition-colors hover:bg-blue-50 hover:text-blue-600"
                >
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                </button>
                <button
                    title="Delete"
                    class="rounded-xl p-2 text-slate-600 transition-colors hover:bg-red-50 hover:text-red-600"
                >
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
            </div>
        </div>

        <div class="flex items-center justify-between rounded-2xl border border-gray-100 bg-white p-4 shadow-sm">
            <div>
                <h3 class="text-base font-bold text-gray-800">Read 20 Pages</h3>
                <p class="text-xs text-gray-500">Daily • Self-improvement</p>
            </div>

            <div class="flex items-center gap-1">
                <button
                    title="Edit"
                    class="rounded-xl p-2 text-slate-600 transition-colors hover:bg-blue-50 hover:text-blue-600"
                >
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                </button>
                <button
                    title="Delete"
                    class="rounded-xl p-2 text-slate-600 transition-colors hover:bg-red-50 hover:text-red-600"
                >
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
            </div>
        </div>
    </div>
</div>
