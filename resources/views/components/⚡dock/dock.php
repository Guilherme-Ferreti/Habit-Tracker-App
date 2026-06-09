<?php

declare(strict_types=1);

use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    /**
     * @return array<int, array<string, bool|string>>
     */
    #[Computed]
    public function links(): array
    {
        return [
            [
                'name'     => 'Habits',
                'route'    => route('habits.index'),
                'icon'     => 'clipboard-list',
                'isActive' => request()->routeIs('habits.index'),
            ],
            [
                'name'     => 'Stats',
                'route'    => '/',
                'icon'     => 'chart-bar-popular',
                'isActive' => false,
            ],
            [
                'name'     => 'Settings',
                'route'    => '/',
                'icon'     => 'settings',
                'isActive' => false,
            ],
        ];
    }
};
