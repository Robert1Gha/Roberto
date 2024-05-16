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
        Schema::create('carro_marca', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carro_id');
            $table->unsignedBigInteger('marca_id');
            $table->timestamps();

            $table->foreign('carro_id')->references('id')->on('carros')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marca_carro');
    }
};
