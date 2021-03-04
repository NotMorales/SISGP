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
        $inserts = [
            [
                'id' => 1,
                'nombre' => 'Luis Antonio',
                'apellido_paterno' => 'Morales',
                'apellido_materno' => 'Velazquez',
                'sexo' => 'MASCULINO',
                'telefono' => '92114797941',
                'fecha_nacimiento' => '1999-10-24',
            ]
        ];

        DB::table('personas')->insert($inserts);
        DB::connection('aproreco_aprore')->table('personas')->insert($inserts);
    }
}
