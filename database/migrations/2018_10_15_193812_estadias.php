<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estadias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadias', function (Blueprint $table) {
			$table->increments('id_estad');
			$table->string('per_ini',35);
            $table->string('per_fin',35);
			$table->integer('horas');
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
        Schema::drop('estadias');
    }
}
