<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Calculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculos', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('mes')->unique();
            $table->smallInteger('qtdFrete');
            $table->decimal('frete', 10, 2);// Essa variavel nao e pra pegar o valor do frete, mas sim pra guardar um historico
            $table->decimal('valBruto', 10, 2);
            $table->decimal('valDiaa', 10, 2);

            //Quadro: 'Qt. Academicos', 'Total'
            $table->smallInteger('qtd1Dia');
            $table->smallInteger('qtd2Dias');
            $table->smallInteger('qtd3Dias');
            $table->smallInteger('qtd4Dias');
            $table->smallInteger('qtd5Dias');
            $table->smallInteger('qtdGeral');
            $table->smallInteger('Totalqtd1Dia');
            $table->smallInteger('Totalqtd2Dias');
            $table->smallInteger('Totalqtd3Dias');
            $table->smallInteger('Totalqtd4Dias');
            $table->smallInteger('Totalqtd5Dias');
            $table->smallInteger('TotalqtdGeral');

            //Quadro 'Valores a Pagar', 'Valores com Taxa'
            $table->decimal('ValPag1Dia', 10, 2);
            $table->decimal('ValPag2Dias', 10, 2);
            $table->decimal('ValPag3Dias', 10, 2);
            $table->decimal('ValPag4Dias', 10, 2);
            $table->decimal('ValPag5Dias', 10, 2);
            $table->decimal('ValPagGeral', 10, 2);
            $table->decimal('ValTaxPag1Dia', 10, 2);
            $table->decimal('ValTaxPag2Dias', 10, 2);
            $table->decimal('ValTaxPag3Dias', 10, 2);
            $table->decimal('ValTaxPag4Dias', 10, 2);
            $table->decimal('ValTaxPag5Dias', 10, 2);
            $table->decimal('ValTaxPagGeral', 10, 2);

            //Quadro 'Valores a Arrecadar'
            $table->decimal('val1Dia', 10, 2);
            $table->decimal('val2Dias', 10, 2);
            $table->decimal('val3Dias', 10, 2);
            $table->decimal('val4Dias', 10, 2);
            $table->decimal('val5Dias', 10, 2);
            $table->decimal('valGeral', 10, 2);

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
        Schema::drop('calculos');
    }
}
