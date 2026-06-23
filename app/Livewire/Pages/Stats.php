<?php

declare(strict_types=1);

namespace App\Livewire\Pages;

use App\Actions\Stats\GetTodayCompletionPercentage;
use App\Actions\Stats\GetWeekCompletion;
use App\Models\HabitCompletion;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

final class Stats extends Component
{
    public function render(): Factory|View
    {
        return view('livewire.pages.stats');
    }

    #[Computed(cache: true, key: 'stats.completed-habits-count')]
    public function completedHabitsCount(): int
    {
        return HabitCompletion::query()->count();
    }

    #[Computed(cache: true, key: 'stats.today-completion-percentage')]
    public function todayCompletionPercentage(): int
    {
        return new GetTodayCompletionPercentage()->handle();
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    #[Computed(cache: true, key: 'stats.week-completion')]
    public function weekCompletion(): array
    {
        return new GetWeekCompletion()->handle();
    }
}
