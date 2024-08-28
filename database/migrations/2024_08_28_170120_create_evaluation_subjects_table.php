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
        Schema::create('evaluation_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('evaluation_instrument', 255);
            $table->integer('evaluation_note')->default(null);
            $table->foreignId('evaluation_id')->constrained('evaluations')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_subjects');
    }
};
