<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactanos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellidos',100);
            $table->string('nombres',100);
            $table->string('dni',8);
            $table->dateTime('fecha_nacimiento');  
            $table->string('email',200)->nullable();
            $table->string('celular',9);
            $table->string('tipo_servicio',100);
            $table->string('comoseentero',100)->nullable();
              
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
        Schema::dropIfExists('contactanos');
    }
}
