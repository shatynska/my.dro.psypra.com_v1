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
        Schema::create('query_specialist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('query_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('specialist_id')->nullable()->constrained()->onDelete('set null');
            $table->boolean('is_acceptable')->default(true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('query_specialist');
    }
};
