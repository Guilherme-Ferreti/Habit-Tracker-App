<?php

declare(strict_types=1);

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class Navigation extends Component
{
    public function render(): View
    {
        return view('components.layout.navigation', [
            'links' => $this->links(),
        ]);
    }

    /**
     * @return array<int, array<string, bool|string>>
     */
    private function links(): array
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
                'route'    => route('stats'),
                'icon'     => 'chart-bar-popular',
                'isActive' => request()->routeIs('stats'),
            ],
            [
                'name'     => 'Settings',
                'route'    => route('settings'),
                'icon'     => 'settings',
                'isActive' => request()->routeIs('settings'),
            ],
        ];
    }
}
