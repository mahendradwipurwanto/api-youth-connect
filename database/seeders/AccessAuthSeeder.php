<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessAuthSeeder extends Seeder
{
    public function run()
    {
        // Sample data to be inserted into the 'access_auth' table
        $data = [
            [
                'program_id' => 0,
                'referral_code' => 'ABC123',
                'role_id' => 4,
                'email' => 'ngodingin.indoneisa@gmail.com',
                'password' => bcrypt('12344321'),
                'online' => true,
                'status' => 1,
                'device_id' => 'DEVICE123',
                'log_time' => now(),
                'joined_at' => now(),
            ],
            [
                'program_id' => 0,
                'referral_code' => 'XYZ456',
                'role_id' => 5,
                'email' => 'admin@ybbfoundation.com',
                'password' => bcrypt('Adminybb123@'),
                'online' => false,
                'status' => 0,
                'device_id' => 'DEVICE456',
                'log_time' => now(),
                'joined_at' => now(),
            ],
            // Add more data here if needed
        ];

        // Insert the data into the 'access_auth' table
        DB::table('access_auth')->insert($data);
    }
}
