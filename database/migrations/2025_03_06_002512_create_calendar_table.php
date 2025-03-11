<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calendar', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->unsignedBigInteger('author');
            $table->unsignedBigInteger('responsible');
            $table->string('day_of_week');
            $table->time('hours');
            $table->string('event');
            $table->string('category');

            // Foreign keys
            $table->foreign('author')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('responsible')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar');
    }
};
