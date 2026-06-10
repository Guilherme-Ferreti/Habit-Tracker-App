@php
    $categories = [
        ['label' => 'Category 1', 'value' => 'category-1'],
        ['label' => 'Category 2', 'value' => 'category-2'],
        ['label' => 'Category 3', 'value' => 'category-3'],
    ];
@endphp

<x-ui.bottom-sheet name="create-habit" title="Create New Habit">
    <x-ui.form>
        <x-ui.form.control>
            <x-ui.form.label for="habit-name" text="Habit Name" />
            <x-ui.form.input type="text" id="habit-name" name="name" placeholder="e.g., Read a book" />
        </x-ui.form.control>

        <x-ui.form.control>
            <x-ui.form.label for="category" text="Category" />
            <x-ui.form.selector id="category" name="category" :options="$categories" />
        </x-ui.form.control>

        <x-slot:footer>
            <x-ui.button class="w-1/3" color="outline" @click="$dispatch('close-bottom-sheet', 'create-habit')">
                Cancel
            </x-ui.button>
            <x-ui.button type="submit" class="w-2/3" color="secondary">Save Habit</x-ui.button>
        </x-slot:footer>
    </x-ui.form>
</x-ui.bottom-sheet>
