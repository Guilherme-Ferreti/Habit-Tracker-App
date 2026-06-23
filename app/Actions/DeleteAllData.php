<?php

declare(strict_types=1);

namespace App\Actions;

use Illuminate\Support\Facades\Artisan;

final class DeleteAllData
{
    public function handle(): void
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
    }
}
