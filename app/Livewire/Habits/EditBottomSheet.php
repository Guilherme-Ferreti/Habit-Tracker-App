<?php

declare(strict_types=1);

namespace App\Livewire\Habits;

use App\Models\Habit;
use Livewire\Attributes\On;
use Livewire\Component;

final class EditBottomSheet extends Component
{
    public ?Habit $habit = null;

    #[On('open-bottom-sheet:edit-habit')]
    public function onOpen(string $id): void
    {
        $this->habit = Habit::query()->find($id);
    }

    #[On('close-bottom-sheet:edit-habit')]
    public function onClose(): void
    {
        $this->habit = null;
    }
}
