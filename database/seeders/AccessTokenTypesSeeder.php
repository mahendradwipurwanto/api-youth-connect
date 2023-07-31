<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessTokenTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data to be inserted into the 'access_token_type' table
        $data = [
            [
                'type' => 'Activation email',
                'description' => null,
                'created_at' => now(),
            ],
            [
                'type' => 'Recovery password',
                'description' => null,
                'created_at' => now(),
            ],
            // Add more data here if needed
        ];

        // Insert the data into the 'access_token_type' table
        DB::table('access_token_type')->insert($data);
    }
}
