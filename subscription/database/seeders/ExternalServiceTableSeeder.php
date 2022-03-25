<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExternalServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('external_services')->delete();

        \DB::table('external_services')->insert(array (
                0 =>
                    array (
                        'name' => 'profile',
                        'url' => 'http://localhost:8000',
                        'enabled' => 1,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ),
                1 =>
                    array (
                        'name' => 'subscription',
                        'url' => 'http://localhost:8002',
                        'enabled' => 1,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ),
            )
        );
    }
}
