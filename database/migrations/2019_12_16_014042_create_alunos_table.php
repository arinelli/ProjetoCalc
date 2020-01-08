<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->bigInteger('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
         //   $table->primary('usuario_id');


            $table->string('estadocivil');
            $table->string('naturalidade');
            $table->string('nomemae');
            $table->string('formacao');
            $table->string('nomepai');
            $table->string('nacionalidade');
            $table->string('orgaoexp');
            $table->string('datanascimento');
            $table->string('tipodocumento');
            $table->string('uf');
            $table->integer('numerodocumento');
            $table->integer('matricula');



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
        Schema::dropIfExists('alunos');
    }
}
