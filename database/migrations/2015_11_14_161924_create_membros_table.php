<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_Inst')->unsigned();
            $table->foreign('id_inst')->references('id')->on('instituicaos');

//            $table->string('nome_Inst');
//            $table->foreign('nome_Inst')->references('nome')->on('instituicaos');

            $table->string('nome', 40);
            $table->string('cpf', 14)->unique();
            $table->string('rg', 10);
            $table->string('orgaoEmissor', 12);
            $table->string('fone', 14);
            $table->string('foneEmerg', 14);
            $table->string('email', 40)->unique();
            $table->string('anoCadastro', 6);
            $table->boolean('ativo');
            $table->tinyInteger('qtdDias');

            $table->string('rua', 60);
            $table->smallInteger('numero');
            $table->string('bairro', 30);
            $table->string('cidade', 40);

            $table->boolean('segunda');
            $table->boolean('terca');
            $table->boolean('quarta');
            $table->boolean('quinta');
            $table->boolean('sexta');

            $table->boolean('dia');

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
        Schema::drop('membros');
    }
}
