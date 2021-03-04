<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
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
                'nombre' => 'Aprore',
                'direccion' => 'Toluca',
                'correo' => 'desarollo@aprore.com',
                'contacto' => 'Luis Morales V',
                'telefono' => '92114797941',
                'rfc' => 'MOVL991024CFC',
                'data_base' => 'aproreco_aprore',
                'logo_path' => NULL,
            ]
        ];

        DB::table('empresas')->insert($inserts);
        DB::connection('aproreco_aprore')->table('empresas')->insert($inserts);
    }
}
