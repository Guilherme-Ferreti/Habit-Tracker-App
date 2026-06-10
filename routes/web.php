<?php

declare(strict_types=1);

use App\Livewire\Pages;
use Illuminate\Support\Facades\Route;

Route::livewire('/', Pages\Home::class)->name('home');
Route::livewire('/habits', Pages\Habits\Index::class)->name('habits.index');
Route::livewire('/stats', Pages\Stats::class)->name('stats');
Route::livewire('/settings', Pages\Settings::class)->name('settings');
