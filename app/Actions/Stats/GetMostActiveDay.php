<?php

declare(strict_types=1);

namespace App\Actions\Stats;

use App\Models\HabitCompletion;
use Illuminate\Support\Facades\DB;

final class GetMostActiveDay
{
    public function handle(): ?string
    {
        $driver = DB::connection()->getDriverName();

        $dayOfWeekExpression = $driver === 'pgsql'
            ? 'EXTRACT(DOW FROM completed_at) as day_of_week'
            : "strftime('%w', completed_at) as day_of_week";

        $groupByExpression = $driver === 'pgsql'
            ? 'EXTRACT(DOW FROM completed_at)'
            : "strftime('%w', completed_at)";

        $dayOfWeek = HabitCompletion::query()
            ->selectRaw($dayOfWeekExpression)
            ->selectRaw('count(*) as total')
            ->groupByRaw($groupByExpression)
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
