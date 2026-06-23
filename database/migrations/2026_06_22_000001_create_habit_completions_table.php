<?php

declare(strict_types=1);

use App\Models\Habit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('habit_completions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(Habit::class)->constrained()->cascadeOnDelete();
            $table->timestamp('completed_at');
            $table->timestamps();

            $table->unique(['habit_id', 'completed_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('habit_completions');
    }
};
