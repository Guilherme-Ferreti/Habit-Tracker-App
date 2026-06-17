<?php

declare(strict_types=1);

namespace App\Livewire\Habits;

use App\Livewire\Forms\HabitForm;
use App\Models\Category;
use App\Models\Habit;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

final class EditBottomSheet extends Component
{
    public HabitForm $form;

    /**
     * @return array<mixed>
     */
    #[Computed(cache: true, key: 'edit-habit-categories')]
    public function categories(): array
    {
        return Category::all()
            ->map(fn (Category $category) => [
                'label' => $category->name,
                'value' => $category->id,
            ])
            ->toArray();
    }

    #[On('open-bottom-sheet:edit-habit')]
    public function onOpen(string $id): void
    {
        $this->form->setHabit(Habit::query()->find($id));
    }

    #[On('close-bottom-sheet:edit-habit')]
    public function onClose(): void
    {
        $this->form->reset('habit');
    }

    public function updateHabit(): void
    {
        $this->form->update();

        $this->dispatch('close-bottom-sheet:edit-habit');
        $this->redirectRoute('habits.index', navigate: true);
    }
}
