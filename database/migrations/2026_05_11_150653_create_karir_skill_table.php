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
        Schema::create('karir_skill', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karir_id')
                ->constrained('karir')
                ->onDelete('cascade');
            $table->foreignId('skill_id')
                ->constrained('skill')
                ->onDelete('cascade');
            $table->integer('bobot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karir_skill');
    }
};
