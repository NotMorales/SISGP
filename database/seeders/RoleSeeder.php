<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
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
                'nombre' => 'Super Administrador',
                'descripcion' => NULL,
            ],
            [
                'id' => 2,
                'nombre' => 'Administrador Aprore',
                'descripcion' => NULL,
            ],
            [
                'id' => 3,
                'nombre' => 'Staff Aprore',
                'descripcion' => NULL,
            ],
            [
                'id' => 4,
                'nombre' => 'Administrador Cliente',
                'descripcion' => NULL,
            ],
            [
                'id' => 5,
                'nombre' => 'Secretaria Cliente',
                'descripcion' => NULL,
            ],
            [
                'id' => 6,
                'nombre' => 'Trabajador',
                'descripcion' => NULL,
            ]
        ];

        DB::table('roles')->insert($inserts);
        DB::connection('aproreco_aprore')->table('roles')->insert($inserts);
    }
}
