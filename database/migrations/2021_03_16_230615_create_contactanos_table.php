<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
         DB::table('contactanos')->insert(array('id'=>'1','apellidos'=>'Lopez Martinez','nombres'=>'Martin',
         'dni'=>'71829346','fecha_nacimiento'=>'2021-03-16 20:03:17','email'=>'loep@gmail.com',
         'celular'=>'963852741','tipo_servicio'=>'ciclo UNI','comoseentero'=>'facebook'));
         DB::table('contactanos')->insert(array('id'=>'2','apellidos'=>'Malei Tyru','nombres'=>'Toño',
         'dni'=>'71889346','fecha_nacimiento'=>'2021-02-16 20:03:17','email'=>'male@gmail.com',
         'celular'=>'963852743','tipo_servicio'=>'ciclo SAN MARCOS','comoseentero'=>'facebook'));
       
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
