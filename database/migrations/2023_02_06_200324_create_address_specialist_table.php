<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('address_specialist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('address_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('specialist_id')->nullable()->constrained()->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('address_specialist');
    }
};
