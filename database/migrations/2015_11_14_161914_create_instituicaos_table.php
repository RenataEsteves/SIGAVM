<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 80);
            $table->string('fone', 15);
            $table->string('email', 40);

            $table->string('rua', 60);
            $table->smallInteger('numero');
            $table->string('bairro', 30);
            $table->string('cidade', 20);

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
        Schema::drop('instituicaos');
    }
}
