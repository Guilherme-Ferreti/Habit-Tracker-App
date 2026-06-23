<?php

declare(strict_types=1);

namespace App\Actions\Habit;

use App\Helpers\CacheHelper;
use App\Models\Habit;

final class ToggleComplete
{
    public function handle(Habit $habit): void
    {
        $habit->isCompletedToday()
            ? $habit->completions()->today()->delete()
            : $habit->completions()->create(['completed_at' => now()]);

        CacheHelper::clearStatsCache();
    }
}
