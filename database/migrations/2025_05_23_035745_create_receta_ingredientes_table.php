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
        Schema::create('receta_ingredientes', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('id_receta');
            $table->unsignedBigInteger('id_ingrediente');
            $table->decimal('cantidad', 8, 2);
            $table->string('unidad');
            $table->timestamps();

            $table->foreign('id_receta')->references('id_receta')->on('recetas')->onDelete('cascade');
            $table->foreign('id_ingrediente')->references('id_ingrediente')->on('ingredientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receta_ingredientes');
    }
};
