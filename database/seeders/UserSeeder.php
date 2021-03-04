<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'role_id' => 1,
                'persona_id' => 1,
                'empresa_id' => 1,
                'name' => 'Luis Morales',
                'email' => 'morales@gmail.com',
                'password' => Hash::make('morales'),
            ]
        ];

        DB::table('users')->insert($inserts);
        DB::connection('aproreco_aprore')->table('users')->insert($inserts);
    }
}
