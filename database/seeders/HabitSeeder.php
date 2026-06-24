<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Habit;
use App\Models\HabitCompletion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

final class HabitSeeder extends Seeder
{
    /** @var Collection<int, array<string, mixed>> */
    private Collection $data;

    /** @var array<string, string> */
    private array $categoriesIds = [];

    public function run(): void
    {
        $this->data = database_path('seeders/data/habits.json')
            |> (fn (string $path) => (string) file_get_contents($path, true))
            |> (fn (string $contents) => (array) json_decode($contents, true))
            |> collect(...);

        $this->insertCategories();
        $this->insertHabits();
        $this->createHabitCompletions();
    }

    private function insertCategories(): void
    {
        $categories = $this->data->pluck('category')->unique()->map(fn (string $name) => [
            'id'         => new Category()->newUniqueId(),
            'name'       => $name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->categoriesIds = $categories->pluck('id', 'name')->toArray();

        Category::insert($categories->toArray());
    }

    private function insertHabits(): void
    {
        $habits = $this->data->map(fn (array $data) => [
            'id'          => new Habit()->newUniqueId(),
            'name'        => $data['habit'],
            'category_id' => $this->categoriesIds[$data['category']],
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        Habit::insert($habits->toArray());
    }

    private function createHabitCompletions(): void
    {
        Habit::all()->each(fn (Habit $habit) => HabitCompletion::factory(3)->for($habit)->create());
    }
}
