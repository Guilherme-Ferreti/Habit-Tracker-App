<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Models\Habit;
use Livewire\Form;

final class HabitForm extends Form
{
    public string $name = '';

    public string $category_id = '';

    public function store(): void
    {
        $this->validate([
            'name'        => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'string', 'exists:categories,id'],
        ]);

        Habit::create($this->pull());
    }
}
