<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

final class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Self-improvement',
            'Productivity',
            'Relationships',
            'Health',
            'Fun',
        ];

        foreach ($categories as $category) {
            Category::factory()->create([
                'name' => $category,
            ]);
        }
    }
}
