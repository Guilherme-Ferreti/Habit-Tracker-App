<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Helpers\CacheHelper;
use App\Models\Habit;
use Livewire\Form;

final class HabitForm extends Form
{
    public ?Habit $habit = null;

    public string $name = '';

    public string $category_id = '';

    public function setHabit(Habit $habit): void
    {
        $this->habit = $habit;

        $this->name        = $habit->name;
        $this->category_id = $habit->category_id;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'name'        => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'string', 'exists:categories,id'],
        ];
    }

    public function store(): void
    {
        $this->validate();

        Habit::create($this->only('name', 'category_id'));

        $this->reset();

        CacheHelper::clearStatsCache();
    }

    public function update(): void
    {
        $this->validate();

        $this->habit->update($this->only('name', 'category_id'));

        $this->reset();
    }
}
