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
        Schema::create('propriedade', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('nome', 255);
            $table->float('area');
            $table->string('municipio', 255)->nullable();
            $table->float('preco');
            $table->float('distancia');

            // Timestamps (created_at, updated_at)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propriedade');
    }
};
