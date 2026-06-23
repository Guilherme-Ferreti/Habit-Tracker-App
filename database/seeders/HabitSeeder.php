<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Habit;
use App\Models\HabitCompletion;
use Illuminate\Database\Seeder;

final class HabitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $habits = Habit::factory(25)->recycle(Category::all())->create();

        $habits = $habits->shuffle()->take(10);

        HabitCompletion::factory()->recycle($habits)->create();
    }
}
