<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('specialist_specialty', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specialist_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('specialty_id')->nullable()->constrained()->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('specialist_specialty');
    }
};
