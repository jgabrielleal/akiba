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
        Schema::create('users', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->string('username')->unique();
            $table->string('password')->unique();
            $table->json('permissions');
            $table->string('name');
            $table->string('nickname');
            $table->string('avatar');
            $table->string('email');
            $table->string('birthday');
            $table->string('city');
            $table->string('state');
            $table->longText('bibliography');
            $table->json('social_networks');
            $table->json('likes');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at');
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->index();
            $table->string('ip_address', 45);
            $table->text('user_agent');
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
