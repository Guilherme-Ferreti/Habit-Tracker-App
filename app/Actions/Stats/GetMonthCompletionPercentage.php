<?php

declare(strict_types=1);

namespace App\Actions\Stats;

use App\Models\Habit;
use App\Models\HabitCompletion;

final class GetMonthCompletionPercentage
{
    public function handle(): ?int
    {
        $habitsCount = Habit::query()->count();

        if ($habitsCount === 0) {
            return null;
        }

        $daysElapsed = now()->startOfMonth()->diffInDays(now()) + 1;

        $totalPossible = $habitsCount * $daysElapsed;

        $completionsCount = HabitCompletion::query()
            ->whereMonth('completed_at', now()->month)
            ->whereYear('completed_at', now()->year)
            ->count();

        return intval($completionsCount / $totalPossible * 100);
    }
}
