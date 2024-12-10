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
        Schema::create('warnings', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->boolean('team');
            $table->unsignedBigInteger('sender');
            $table->unsignedBigInteger('receiver');
            $table->string('message');

            // Foreign keys
            $table->foreign('sender')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('receiver')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warnings');
    }
};
