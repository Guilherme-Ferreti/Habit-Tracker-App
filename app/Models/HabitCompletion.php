<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\HabitCompletionFactory;
use Illuminate\Database\Eloquent\Attributes\Unguarded;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Override;

/**
 * @property string $id
 * @property string $habit_id
 * @property Carbon $completed_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Habit $habit
 */
#[Unguarded]
final class HabitCompletion extends Model
{
    /** @use HasFactory<HabitCompletionFactory> */
    use HasFactory, HasUuids;

    #[Override]
    protected function casts(): array
    {
        return [
            'completed_at' => 'datetime',
        ];
    }

    /**
     * @return BelongsTo<Habit, $this>
     */
    public function habit(): BelongsTo
    {
        return $this->belongsTo(Habit::class);
    }

    /**
     * @param  Builder<$this>  $query
     */
    public function scopeToday(Builder $query): void
    {
        $query->whereDay('completed_at', today());
    }
}
