<?php

declare(strict_types=1);

namespace App\Livewire\Pages;

use App\Models\Habit;
use App\Models\HabitCompletion;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
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

    /**
     * @return array<int, array<string, mixed>>
     */
    #[Computed(cache: true, key: 'stats.week-completion')]
    public function weekCompletion(): array
    {
        $completions = HabitCompletion::query()
            ->whereDate('completed_at', '>=', now()->startOfWeek())
            ->whereDate('completed_at', '<=', now()->endOfWeek())
            ->with('habit')
            ->get();

        $habitCount = Habit::query()->count();

        $filterByDay = fn (int $day) => $completions->filter(fn (HabitCompletion $completion) => $completion->completed_at->isDayOfWeek($day));

        return [
            [
                'day'                 => Carbon::SUNDAY,
                'label'               => 'Sun',
                'completedPercentage' => intval($filterByDay(Carbon::SUNDAY)->count() / $habitCount * 100),
            ],
            [
                'day'                 => Carbon::MONDAY,
                'label'               => 'Mon',
                'completedPercentage' => intval($filterByDay(Carbon::MONDAY)->count() / $habitCount * 100),
            ],
            [
                'day'                 => Carbon::TUESDAY,
                'label'               => 'Tue',
                'completedPercentage' => intval($filterByDay(Carbon::TUESDAY)->count() / $habitCount * 100),
            ],
            [
                'day'                 => Carbon::WEDNESDAY,
                'label'               => 'Wed',
                'completedPercentage' => intval($filterByDay(Carbon::WEDNESDAY)->count() / $habitCount * 100),
            ],
            [
                'day'                 => Carbon::THURSDAY,
                'label'               => 'Thu',
                'completedPercentage' => intval($filterByDay(Carbon::THURSDAY)->count() / $habitCount * 100),
            ],
            [
                'day'                 => Carbon::FRIDAY,
                'label'               => 'Fri',
                'completedPercentage' => intval($filterByDay(Carbon::FRIDAY)->count() / $habitCount * 100),
            ],
            [
                'day'                 => Carbon::SATURDAY,
                'label'               => 'Sat',
                'completedPercentage' => intval($filterByDay(Carbon::SATURDAY)->count() / $habitCount * 100),
            ],
        ];
    }
}
