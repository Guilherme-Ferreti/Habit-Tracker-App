<?php

declare(strict_types=1);

namespace App\Actions\Stats;

use App\Models\HabitCompletion;

final class GetMostActiveDay
{
    public function handle(): ?string
    {
        $dayOfWeek = HabitCompletion::query()
            ->selectRaw("strftime('%w', completed_at) as day_of_week")
            ->selectRaw('count(*) as total')
            ->groupByRaw("strftime('%w', completed_at)")
            ->orderByDesc('total')
            ->limit(1)
            ->value('day_of_week');

        return match ($dayOfWeek) {
            '0'     => 'Sunday',
            '1'     => 'Monday',
            '2'     => 'Tuesday',
            '3'     => 'Wednesday',
            '4'     => 'Thursday',
            '5'     => 'Friday',
            '6'     => 'Saturday',
            default => null,
        };
    }
}
