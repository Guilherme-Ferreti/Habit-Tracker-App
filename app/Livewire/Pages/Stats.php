<?php

declare(strict_types=1);

namespace App\Livewire\Pages;

use App\Actions\Stats\GetMostActiveDay;
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

    #[Computed(cache: true, key: 'stats.today-completion-percentage')]
    public function todayCompletionPercentage(): string
    {
        $percentage = new GetTodayCompletionPercentage()->handle();

        return is_null($percentage) ? 'N/A' : $percentage . '%';
    }

    #[Computed(cache: true, key: 'stats.completed-habits-count')]
    public function completedHabitsCount(): int
    {
        return HabitCompletion::query()->count();
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    #[Computed(cache: true, key: 'stats.week-completion')]
    public function weekCompletion(): array
    {
        return new GetWeekCompletion()->handle();
    }

    #[Computed(cache: true, key: 'stats.most-active-day')]
    public function mostActiveDay(): string
    {
        return new GetMostActiveDay()->handle() ?? 'N/A';
    }
}
