<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id_em');
			$table->string('rfc');
            $table->string('nom_emp',40);
			$table->string('dir',30);
			$table->integer('tel');
			$table->string('municipio',25);
			$table->integer('cp');
			$table->string('Estado',25);
			$table->string('Correo');
			$table->string('Pag_web');
			$table->string('Giro',25);
		
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
        Schema::drop('empresas');
    }
}
