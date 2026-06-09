<header class="bg-slate-900 text-white p-5 pt-8 sticky top-0 z-20">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold tracking-tight">Today</h1>
            <p class="text-sm text-slate-400">{{ now()->format('l, F j') }}</p>
        </div>
        <button
            class="bg-blue-600 hover:bg-blue-500 text-white rounded-full w-10 h-10 flex items-center justify-center transition-colors shadow-md">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
        </button>
    </div>
</header>