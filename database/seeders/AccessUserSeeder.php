<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data to be inserted into the 'access_user' table
        $data = [
            [
                'user_id' => 1,
                'name' => 'Super Administrator',
                'picture' => 'assets/images/placeholder.jpg',
                'gender' => null,
                'phone' => null,
                'institusion' => null,
                'instagram' => null,
                'tiktok' => null,
            ],
            [
                'user_id' => 2,
                'name' => 'Administrator',
                'picture' => 'assets/images/placeholder.jpg',
                'gender' => null,
                'phone' => null,
                'institusion' => null,
                'instagram' => null,
                'tiktok' => null,
            ],
            // Add more data here if needed
        ];

        // Insert the data into the 'access_user' table
        DB::table('access_user')->insert($data);
    }
}
