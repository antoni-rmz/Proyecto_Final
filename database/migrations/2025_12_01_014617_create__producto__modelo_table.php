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
        Schema::create('_producto__modelo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto-id')->constrained('_productos')->onDelete('cascade');
            $table->foreignId('modelo-id')->constrained('_modelos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_producto__modelo');
    }
};
