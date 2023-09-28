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
        Schema::create('combinacaos', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_estilo');
            $table->integer('cod_tipocorporal');
            $table->integer('cod_ocasiao');
            $table->string('img_comb');
            $table->string('link_comb');
            $table->string('oca_esp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combinacaos');
    }
};