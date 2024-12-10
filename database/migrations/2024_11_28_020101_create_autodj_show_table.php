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
        Schema::create('autodj_show', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->unsignedBigInteger('streamer');
            $table->string('name');
            $table->string('logo');
            $table->json('phrases');

            // Foreign keys
            $table->foreign('streamer')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autodj_show');
    }
};
