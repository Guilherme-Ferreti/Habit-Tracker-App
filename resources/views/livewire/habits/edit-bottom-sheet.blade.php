<x-ui.bottom-sheet
    name="edit-habit"
    title="Edit Habit"
>
    <x-ui.loading-indicator
        wire:replace.self
        size="lg"
        label="Loading habit..."
        class="mx-auto h-77"
        x-data="{ show: false }"
        x-show="show"
        @open-bottom-sheet:edit-habit.window="show = true"
    />

    @if ($this->form->habit)
        <x-ui.form wire:submit="updateHabit">
            <x-ui.form.input
                wire:model="form.name"
                type="text"
                label="Habit Name"
                id="name"
                name="name"
                placeholder="e.g., Read a book"
                error-key="form.name"
            />
            <x-ui.form.selector
                wire:model="form.category_id"
                label="Category"
                id="category"
                name="category"
                :options="$this->categories"
                error-key="form.category_id"
            />
            <x-slot:footer>
                <x-ui.button
                    type="reset"
                    class="w-1/3"
                    label="Cancel"
                    color="outline"
                    wire:loading.attr="disabled"
                    @click="$dispatch('close-bottom-sheet:edit-habit')"
                />
                <x-ui.button
                    type="submit"
                    class="w-2/3"
                    label="Save Habit"
                    color="secondary"
                    wire:loading.attr="disabled"
                    x-bind:disabled="!($wire.form.name && $wire.form.category_id)"
                />
            </x-slot:footer>
        </x-ui.form>
    @endif
</x-ui.bottom-sheet>
