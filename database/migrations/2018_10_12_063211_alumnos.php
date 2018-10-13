<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('Matricula');
            $table->string('Ap',15);
            $table->string('Am',15);
            $table->string('Nombre',15);
            $table->integer('Edad');
            $table->string('Sexo',1);
            $table->integer('Telefono');
            $table->string('Correo');
            $table->string('Calle',25);
            $table->integer('Cp');
            $table->string('Municipio',25);
            $table->string('Estado',25);
            $table->integer('id_carrera');
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras');
            $table->integer('id_gen');
            $table->foreign('id_gen')->references('id_gen')->on('generaciones');

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
        Schema::drop('alumnos');
    }
}
