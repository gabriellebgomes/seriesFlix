<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('series', function (Blueprint $table) {
        $table->id();

        $table->string('titulo');
        $table->text('descricao');
        $table->string('genero');
        $table->string('classificacao_indicativa');
        $table->unsignedInteger('temporadas');
        $table->year('ano_lancamento');

        $table->enum('status', [
            'Em andamento',
            'Finalizada'
        ])->nullable();

        $table->string('capa')->nullable();

        $table->timestamps();
    });
}
};