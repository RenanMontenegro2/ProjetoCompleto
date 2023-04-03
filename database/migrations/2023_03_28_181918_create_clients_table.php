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
        Schema::create('clients', function (Blueprint $table){
            $table->id();
            //localização(cria o id como uma chave primaria)
            $table->string('nome', 100);
            $table->string('endereco', 200);
            $table->text('observacao');
            $table->timestamps();
            //horário da criação e ultima alteração
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
