<x-ui.bottom-sheet
    name="create-habit"
    title="Create New Habit"
>
    <x-ui.form wire:submit="createHabit">
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
                @click="$dispatch('close-bottom-sheet:create-habit')"
            />
            <x-ui.button
                type="submit"
                class="w-2/3"
                color="secondary"
                label="Save Habit"
                show-loading
                x-bind:disabled="!($wire.form.name && $wire.form.category_id)"
            />
        </x-slot:footer>
    </x-ui.form>
</x-ui.bottom-sheet>
