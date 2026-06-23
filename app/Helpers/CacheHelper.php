<?php

declare(strict_types=1);

namespace App\Helpers;

final class CacheHelper
{
    public static function clearStatsCache(): void
    {
        cache()->forget('stats.completed-habits-count');
        cache()->forget('stats.today-completion-percentage');
        cache()->forget('stats.week-completion');
    }
}
