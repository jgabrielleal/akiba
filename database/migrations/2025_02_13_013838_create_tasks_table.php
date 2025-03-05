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
        Schema::create('tasks', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->unsignedBigInteger('applicant');
            $table->unsignedBigInteger('executor');
            $table->datetime('limit');
            $table->boolean('completed')->default(false);
            $table->string('title');
            $table->string('task');

            // Foreign keys
            $table->foreign('applicant')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('executor')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
