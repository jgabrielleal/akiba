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
        Schema::create('listener_of_month', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->string('avatar');
            $table->string('listener');
            $table->string('address');
            $table->integer('requests');
            $table->string('show');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listener_of_month');
    }
};
