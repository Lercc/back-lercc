<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiclosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_ciclo',100)->unique();
            $table->string('imagen_ciclo');//file
            $table->string('descripcion',200);
            $table->string('inicio_ciclo');
            $table->string('fin_ciclo');
            $table->string('duracion_meses');
            $table->string('cursos_enseñar');//file
            $table->string('video');
            $table->string('turno_horario');//file
            $table->string('beneficios');
            $table->string('caracteristicas');
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
        Schema::dropIfExists('ciclos');
    }
}
