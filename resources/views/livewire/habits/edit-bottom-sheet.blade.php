<x-ui.bottom-sheet
    name="edit-habit"
    title="Edit Habit"
>
    @if (!$this->habit)
        <span>loading habit</span>
    @else
        <span>edit habit {{ $this->habit->id }}</span>
    @endif
</x-ui.bottom-sheet>
