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
        Schema::create('avaliacaos', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_login');
            $table->integer('num_estrelas');
            $table->text('desc_avaliacao');
            $table->datetime('dta_publicacao');
            $table->timestamp('dta_edicao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacaos');
    }
};
