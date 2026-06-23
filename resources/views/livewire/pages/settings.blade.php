<div class="space-y-6">
    <x-ui.page.title title="Settings" />

    <x-ui.section>
        <x-ui.section.title title="Data" />

        <div class="divide-y divide-gray-50 overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm">
            <button
                class="flex w-full items-center justify-between p-4 text-left transition-colors active:bg-red-50"
                @click="$dispatch('open-confirm-modal:delete-all-data')"
            >
                <div class="flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-red-50 text-red-600">
                        <x-ui.icon
                            name="trash"
                            size="sm"
                        />
                    </div>
                    <p class="font-medium text-red-600">Delete All Data</p>
                </div>
            </button>
        </div>
    </x-ui.section>
</div>

@push('modals')
    <x-ui.confirm-modal
        name="delete-all-data"
        title="Delete All Data"
        message="Are you sure you want to delete all data? This action cannot be undone."
        confirm-label="Delete"
        confirm-variant="danger"
        icon="hand-stop"
    />
@endpush
