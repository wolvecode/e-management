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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('role', ['applicant', 'admin', 'super_admin', 'reviewer']);
            $table->string('profileLink')->nullable();
            $table->string('onboarding_id')->nullable();
            $table->enum('category', ['animal', 'human']);
            $table->string('institution')->nullable();
            $table->string('faculty')->nullable();
            $table->string('contact')->nullable();
            $table->string('specialization')->nullable();
            $table->string('password');
            $table->enum('auth_type', ['social', 'local'])->default('local');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
