<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::habits.index')->name('habits.index');
