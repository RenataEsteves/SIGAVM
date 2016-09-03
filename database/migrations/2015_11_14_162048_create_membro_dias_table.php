<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembroDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro_dias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_Memb')->unsigned();
            $table->foreign('id_Memb')->references('id')->on('membros');

            $table->tinyInteger('nPolt');
            $table->string('dia', 7);
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
        Schema::drop('membro_dias');
    }
}
