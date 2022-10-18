<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idContato');
            $table->foreign('idContato')->references('id')->on('contatos');
            $table->unsignedBigInteger('idLivro');
            $table->foreign('idLivro')->references('id')->on('livros');
            $table->dateTime('dataHora');
            $table->dateTime('dataDevolucao');
            $table->text('obs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
};
