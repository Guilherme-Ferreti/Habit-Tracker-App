<div class="space-y-6">
    <x-ui.page.title title="Settings" />

    <x-ui.section>
        <x-ui.section.title title="Preferences" />

        <div class="divide-y divide-gray-50 overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm">
            <div class="flex items-center justify-between p-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-slate-100 text-slate-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                            ></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-medium text-gray-800">Dark Mode</p>
                        <p class="text-xs text-gray-500">Match system appearance</p>
                    </div>
                </div>
                <button
                    type="button"
                    class="flex h-6 w-12 rounded-full bg-blue-600 transition-colors duration-200 ease-in-out focus:outline-none"
                >
                    <div
                        class="mt-1 ml-1 h-4 w-4 translate-x-7 transform rounded-full bg-white shadow transition-transform duration-200 ease-in-out"
                    ></div>
                </button>
            </div>

            <div class="flex items-center justify-between p-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                            ></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-medium text-gray-800">Daily Reminder</p>
                        <p class="text-xs text-gray-500">Push notification at 08:00 AM</p>
                    </div>
                </div>
                <button
                    type="button"
                    class="flex h-6 w-12 rounded-full bg-gray-200 transition-colors duration-200 ease-in-out focus:outline-none"
                >
                    <div
                        class="mt-1 ml-1 h-4 w-4 translate-x-1 transform rounded-full bg-white shadow transition-transform duration-200 ease-in-out"
                    ></div>
                </button>
            </div>
        </div>
    </x-ui.section>

    <x-ui.section>
        <x-ui.section.title title="Data" />

        <div class="divide-y divide-gray-50 overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm">
            <button class="flex w-full items-center justify-between p-4 text-left transition-colors hover:bg-gray-50">
                <div class="flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                            ></path>
                        </svg>
                    </div>
                    <p class="font-medium text-gray-800">Export Backup</p>
                </div>
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <button class="flex w-full items-center justify-between p-4 text-left transition-colors hover:bg-gray-50">
                <div class="flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-orange-50 text-orange-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"
                            ></path>
                        </svg>
                    </div>
                    <p class="font-medium text-gray-800">Import Data</p>
                </div>
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <button class="flex w-full items-center justify-between p-4 text-left transition-colors hover:bg-red-50">
                <div class="flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-red-50 text-red-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                            ></path>
                        </svg>
                    </div>
                    <p class="font-medium text-red-600">Reset All Data</p>
                </div>
            </button>
        </div>
    </x-ui.section>

    <x-ui.section>
        <div class="flex flex-col items-center justify-center py-6 text-gray-400">
            <svg class="mb-2 h-10 w-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                ></path>
            </svg>
            <p class="text-sm font-medium">Habit Tracker v1.0.0</p>
            <p class="mt-1 text-xs">Built with NativePHP & Laravel 13</p>
        </div>
    </x-ui.section>
</div>
