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
        Schema::create('top_musics', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->string('avatar')->nullable();
            $table->string('music');
            $table->integer('requests');
            $table->string('production');
            $table->string('singer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_top_musics');
    }
};
