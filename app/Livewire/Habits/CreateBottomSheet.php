<?php

declare(strict_types=1);

namespace App\Livewire\Habits;

use App\Models\Category;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

final class CreateBottomSheet extends Component
{
    /**
     * @return Collection<int, array{label: string, value: string}>
     */
    #[Computed(cache: true, key: 'create-habit-categories')]
    public function categories(): Collection
    {
        return Category::all()
            ->map(fn (Category $category) => [
                'label' => $category->name,
                'value' => $category->id,
            ]);
    }
}
