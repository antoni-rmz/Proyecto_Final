<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('producto_modelo', function (Blueprint $table) {
            $table->id();
            // Aquí sí van las claves foráneas
            $table->foreignId('productos_id')->constrained('productos')->onDelete('cascade');
            $table->foreignId('modelos_id')->constrained('modelos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('producto_modelo');
    }
};
