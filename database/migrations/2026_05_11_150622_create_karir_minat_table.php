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
        Schema::create('karir_minat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karir_id')
                ->constrained('karir')
                ->onDelete('cascade');
            $table->foreignId('minat_id')
                ->constrained('minat')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karir_minat');
    }
};
