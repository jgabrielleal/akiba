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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug');
            $table->unsignedBigInteger('author');
            $table->string('title');
            $table->string('cover');
            $table->longText('publication');
            $table->json('fonts');
            $table->string('location');
            $table->string('date');
            $table->json('reactions');

            // Foreign keys
            $table->foreign('author')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
