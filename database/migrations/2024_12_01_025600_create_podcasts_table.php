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
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug');
            $table->unsignedBigInteger('author');
            $table->string('thumb');
            $table->integer('season');
            $table->integer('episode');
            $table->string('title');
            $table->longText('summary');
            $table->longText('description');
            $table->longText('audio_address');

            // Foreign keys
            $table->foreign('author')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('podcasts');
    }
};
