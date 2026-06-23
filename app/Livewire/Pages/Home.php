<?php

declare(strict_types=1);

namespace App\Livewire\Pages;

use App\Models\Habit;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Home extends Component
{
    public function render(): Factory|View
    {
        return view('livewire.pages.home', [
            'pendingHabits'   => Habit::with('category')->notCompletedToday()->latest()->get(),
            'completedHabits' => Habit::with('category')->completedToday()->latest()->get(),
        ]);
    }

    public function toggleComplete(string $habitId): void
    {
        $habit = Habit::findOrFail($habitId);

        if ($habit->isCompletedToday()) {
            $habit->completions()->today()->delete();
        } else {
            $habit->completions()->create([
                'completed_at' => now(),
            ]);
        }

        cache()->forget('stats.today-completion-percentage');
    }
}
