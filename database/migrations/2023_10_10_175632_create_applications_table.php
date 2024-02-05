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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('app_id')->nullable()->unique();
            $table->foreignId('applicant_id')->constrained('users')->onDelete('cascade');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->enum('category', ['animal', 'human']);
            $table->string('title');
            $table->string('attachment')->nullable()->default(null);
            $table->string('supporting_document')->nullable()->default(null);
            $table->string('approval_letter')->nullable()->default(null);
            $table->string('edited_attachment')->nullable()->default(null);
            $table->text('description')->nullable();
            $table->enum('review_status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
