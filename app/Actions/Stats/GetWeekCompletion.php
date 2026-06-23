<?php

declare(strict_types=1);

namespace App\Actions\Stats;

use App\Models\Habit;
use App\Models\HabitCompletion;
use Illuminate\Support\Carbon;

final class GetWeekCompletion
{
    /**
     * @return array<int, array<string, int|string>>
     */
    public function handle(): array
    {
        return [
            [
                'day'                 => Carbon::SUNDAY,
                'label'               => 'Sun',
                'completedPercentage' => $this->getCompletedPercentageForDay(Carbon::SUNDAY),
            ],
            [
                'day'                 => Carbon::MONDAY,
                'label'               => 'Mon',
                'completedPercentage' => $this->getCompletedPercentageForDay(Carbon::MONDAY),
            ],
            [
                'day'                 => Carbon::TUESDAY,
                'label'               => 'Tue',
                'completedPercentage' => $this->getCompletedPercentageForDay(Carbon::TUESDAY),
            ],
            [
                'day'                 => Carbon::WEDNESDAY,
                'label'               => 'Wed',
                'completedPercentage' => $this->getCompletedPercentageForDay(Carbon::WEDNESDAY),
            ],
            [
                'day'                 => Carbon::THURSDAY,
                'label'               => 'Thu',
                'completedPercentage' => $this->getCompletedPercentageForDay(Carbon::THURSDAY),
            ],
            [
                'day'                 => Carbon::FRIDAY,
                'label'               => 'Fri',
                'completedPercentage' => $this->getCompletedPercentageForDay(Carbon::FRIDAY),
            ],
            [
                'day'                 => Carbon::SATURDAY,
                'label'               => 'Sat',
                'completedPercentage' => $this->getCompletedPercentageForDay(Carbon::SATURDAY),
            ],
        ];
    }

    private function getCompletedPercentageForDay(int $day): int
    {
        $habitsCount = once(fn () => Habit::query()->count());

        if ($habitsCount === 0) {
            return 0;
        }

        $completionsCount = once(fn () => HabitCompletion::query()
            ->whereDate('completed_at', '>=', now()->startOfWeek(Carbon::SUNDAY))
            ->whereDate('completed_at', '<=', now()->endOfWeek(Carbon::SATURDAY))
            ->with('habit')
            ->get())
            ->filter(fn (HabitCompletion $completion) => $completion->completed_at->isDayOfWeek($day))
            ->count();

        return intval($completionsCount / $habitsCount * 100);
    }
}
