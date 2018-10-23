<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->increments('id_proy');
            $table->string('tipo');
            $table->string('asesor_conp');
            $table->string('asesor_met');
            $table->date('fecha_ini');
            $table->date('fecha_ent');
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
        Schema::drop('proyecto');
    }
}
