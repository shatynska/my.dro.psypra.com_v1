<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('query_specialist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('query_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('specialist_id')->nullable()->constrained()->onDelete('set null');
            $table->boolean('is_acceptable')->default(true);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('query_specialist');
    }
};
