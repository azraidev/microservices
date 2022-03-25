<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('services')->delete();

        \DB::table('services')->insert(array (
                0 =>
                    array (
                        'name' => 'profile',
                        'auth_key' => 'ghp_LHo3JfJriIf2IDyskhIY92MN5e2Ju',
                        'expiry' => null,
                        'version' => 'v1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ),
                1 =>
                    array (
                        'name' => 'subscription',
                        'auth_key' => 'ghp_KA7Hjk87gK0812ioO32hn386V2',
                        'expiry' => null,
                        'version' => 'v1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ),
            )
        );
    }
}
