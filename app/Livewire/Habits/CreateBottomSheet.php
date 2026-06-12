<?php

declare(strict_types=1);

namespace App\Livewire\Habits;

use App\Livewire\Forms\HabitForm;
use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Component;

final class CreateBottomSheet extends Component
{
    public HabitForm $form;

    /**
     * @return array<mixed>
     */
    #[Computed(cache: true, key: 'create-habit-categories')]
    public function categories(): array
    {
        return Category::all()
            ->map(fn (Category $category) => [
                'label' => $category->name,
                'value' => $category->id,
            ])
            ->toArray();
    }

    public function createHabit(): void
    {
        $this->form->store();

        $this->dispatch('close-bottom-sheet', 'create-habit');

        $this->redirectRoute('home', navigate: true);
    }
}
