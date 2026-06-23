<?php

declare(strict_types=1);

namespace App\Livewire\Pages;

use App\Models\Habit;
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
    public function todayCompletionPercentage(): int
    {
        return intval(Habit::query()->completedToday()->count() / Habit::query()->count() * 100);
    }
}
