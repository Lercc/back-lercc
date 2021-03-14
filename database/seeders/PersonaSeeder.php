<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre' => 'Daniel Romero Zavala',
            'tipo_documento' => 'DNI',
            'num_documento' => '11223344',
            'direccion' => 'qqqq', 
            'telefono' => '963852147', 
            'email' => 'daniel@gmail.com', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('personas')->insert([
            'nombre' => 'Delmira Arroyo',
            'tipo_documento' => 'DNI',
            'num_documento' => '88996633',
            'direccion' => 'aaaa', 
            'telefono' => '963852141', 
            'email' => 'delmira@gmail.com', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('personas')->insert([
            'nombre' => 'Piero Parra',
            'tipo_documento' => 'DNI',
            'num_documento' => '22559988',
            'direccion' => 'cccc', 
            'telefono' => '963852171', 
            'email' => 'piero@gmail.com', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
