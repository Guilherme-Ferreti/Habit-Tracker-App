<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\HabitFactory;
use Illuminate\Database\Eloquent\Attributes\Unguarded;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property string $id
 * @property string $name
 * @property string|null $category_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Category|null $category
 * @property-read Collection<int, HabitCompletion> $completions
 */
#[Unguarded]
final class Habit extends Model
{
    /** @use HasFactory<HabitFactory> */
    use HasFactory, HasUuids;

    /**
     * @return BelongsTo<Category, $this>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return HasMany<HabitCompletion, $this>
     */
    public function completions(): HasMany
    {
        return $this->hasMany(HabitCompletion::class);
    }

    public function isCompletedToday(): bool
    {
        return $this->completions()->today()->exists();
    }

    /**
     * @param  Builder<$this>  $query
     */
    public function scopeCompletedToday(Builder $query): void
    {
        /** @phpstan-ignore-next-line */
        $query->whereHas('completions', fn (Builder $q) => $q->today());
    }

    /**
     * @param  Builder<$this>  $query
     */
    public function scopeNotCompletedToday(Builder $query): void
    {
        /** @phpstan-ignore-next-line */
        $query->whereDoesntHave('completions', fn (Builder $query) => $query->today());
    }
}
