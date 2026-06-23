<?php

declare(strict_types=1);

namespace App\Actions\Stats;

use App\Models\Habit;

final class GetTodayCompletionPercentage
{
    public function handle(): ?int
    {
        $habitCount = Habit::query()->count();

        if ($habitCount === 0) {
            return null;
        }

        return intval(Habit::query()->completedToday()->count() / $habitCount * 100);
    }
}
