<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PracticasDeEjecucionDeCompetencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicasejecucioncom', function (Blueprint $table) {
            $table->increments('id_com');
			$table->string('periodo_in');
            $table->string('periodo_fin');
			$table->integer('horas_acum');
			$table->integer('horas_tot');
			$table->integer('num_periodo');
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
        Schema::drop('practicasejecucioncom');
    }
}
