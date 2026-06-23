<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Habits;

use App\Helpers\CacheHelper;
use App\Models\Habit;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

final class Index extends Component
{
    public function render(): Factory|View
    {
        $habits = Habit::all();

        return view('livewire.pages.habits.index', ['habits' => $habits]);
    }

    #[On('confirm-modal:delete-habit')]
    public function deleteHabit(string $id): void
    {
        $habit = Habit::findOrFail($id);

        $habit->delete();

        CacheHelper::clearStatsCache();

        $this->dispatch('close-confirm-modal:delete-habit');
    }
}
