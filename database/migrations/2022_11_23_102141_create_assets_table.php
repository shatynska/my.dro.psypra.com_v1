<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('specialist_id')->nullable()->constrained()->onDelete('set null');
            $table->unsignedTinyInteger('type')->default(1);
            $table->unsignedTinyInteger('format')->default(1);
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
