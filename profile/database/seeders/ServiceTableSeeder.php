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
                        'name' => 'subscription',
                        'auth_key' => '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',
                        'expiry' => null,
                        'version' => 'v1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ),
                1 =>
                    array (
                        'name' => 'playlist',
                        'auth_key' => 'ghp_GKG7687532423jXvK8767233dsfLy8fG',
                        'expiry' => null,
                        'version' => 'v1',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ),
            )
        );
    }
}
