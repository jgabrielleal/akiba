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
        Schema::create('private_shows', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('streamer');
            $table->string('name');
            $table->string('logo');

            // Foreign keys
            $table->foreign('streamer')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('private_shows');
    }
};
