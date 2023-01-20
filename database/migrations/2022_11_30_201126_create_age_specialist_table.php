<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('age_specialist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('age_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('specialist_id')->nullable()->constrained()->onDelete('set null');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('age_specialist');
    }
};
