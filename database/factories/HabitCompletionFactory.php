<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Habit;
use App\Models\HabitCompletion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<HabitCompletion>
 */
final class HabitCompletionFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'habit_id'     => Habit::factory(),
            'completed_at' => fake()->dateTimeBetween('-7 days', 'today'),
        ];
    }
}
