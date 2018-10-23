<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PracticasDeObservacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicasobs', function (Blueprint $table) {
            $table->increments('id_obs');
            $table->date('fech_pract');
            $table->integer('num_pract');
            $table->integer('asistencia');
            $table->integer('id_em')->unsigned();
		    $table->foreign('id_em')->references('id_em')->on('empresas');
            $table->integer('Matricula')->unsigned();
		    $table->foreign('Matricula')->references('Matricula')->on('alumnos');
            
            $table->rememberToken();
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
        Schema::drop('practicasobs');
    }
}
