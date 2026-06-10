<?php

declare(strict_types=1);

namespace App\Livewire\Habits;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CreateBottomSheet extends Component
{
    public function render(): Factory|View
    {
        return view('livewire.habits.create-bottom-sheet');
    }
}
