<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 30)->unique();
            $table->string('descripcion', 100)->nullable();
            $table->boolean('condicion')->default(1);          
        });
        DB::table('roles')->insert(array('id'=>'1','nombre'=>'Administrador', 'descripcion'=>'Administrador del sistema'));
        DB::table('roles')->insert(array('id'=>'2','nombre'=>'Secretaria', 'descripcion'=>'secretaria de I.E.P'));
        DB::table('roles')->insert(array('id'=>'3','nombre'=>'Promotor', 'descripcion'=>'Promotor de I.E.P'));
        DB::table('roles')->insert(array('id'=>'4','nombre'=>'Alumno', 'descripcion'=>'Usuario de I.E.P'));
        DB::table('roles')->insert(array('id'=>'5','nombre'=>'Docente', 'descripcion'=>'Usuario de I.E.P'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
