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
        Schema::create('posts', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->unsignedBigInteger('author');
            $table->string('title');
            $table->string('cover');
            $table->string('publication');
            $table->json('tags');
            $table->json('fonts');
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
        Schema::dropIfExists('posts');
    }
};
