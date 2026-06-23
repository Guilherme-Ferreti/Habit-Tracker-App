<?php

declare(strict_types=1);

namespace App\Livewire\Pages;

use App\Actions\DeleteAllData;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

final class Settings extends Component
{
    public function render(): Factory|View
    {
        return view('livewire.pages.settings');
    }

    #[On('confirm-modal:delete-all-data')]
    public function deleteAllData(): void
    {
        new DeleteAllData()->handle();

        $this->dispatch('close-confirm-modal:delete-all-data');
    }
}
