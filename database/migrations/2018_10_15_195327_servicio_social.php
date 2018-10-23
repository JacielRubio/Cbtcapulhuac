<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicioSocial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviciosocial', function (Blueprint $table) {
            $table->increments('id_serv');
            $table->integer('id_em')->unsigned();
		    $table->foreign('id_em')->references('id_em')->on('empresas');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->integer('dias');
            $table->integer('horas');
            $table->integer('tot_horas');
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
        Schema::drop('serviciosocial');
    }
}
