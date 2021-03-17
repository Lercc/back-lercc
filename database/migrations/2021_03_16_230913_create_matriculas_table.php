<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido_paterno',100);
            $table->string('apellido_materno',100);
            $table->string('nombres',100);
            $table->string('dni',8);  
            $table->dateTime('fecha_nacimiento');  
            $table->string('celular',9);
            $table->string('email',200);
            $table->integer('idciclo')->unsigned();
            $table->foreign('idciclo')->references('id')->on('ciclos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('matriculas');
    }
}
