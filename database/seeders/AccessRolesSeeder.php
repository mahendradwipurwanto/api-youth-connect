<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data to be inserted into the 'access_roles' table
        $roles = [
            [
                'parent_id' => null,
                'role' => 'Super Administrator',
                'weight' => 0,
                'access' => 'all',
                'default' => 1,
                'created_at' => now(),
            ],
            [
                'parent_id' => 0,
                'role' => 'Admin',
                'weight' => 1,
                'access' => 'all',
                'default' => 1,
                'created_at' => now(),
            ],
            [
                'parent_id' => 1,
                'role' => 'Admin APP',
                'weight' => 2,
                'access' => 'read-only',
                'default' => 1,
                'created_at' => now(),
            ],
            [
                'parent_id' => 1,
                'role' => 'Ambassador',
                'weight' => 3,
                'access' => 'read-only',
                'default' => 1,
                'created_at' => now(),
            ],
            [
                'parent_id' => 1,
                'role' => 'Partner',
                'weight' => 4,
                'access' => 'read-only',
                'default' => 1,
                'created_at' => now(),
            ],
            [
                'parent_id' => 1,
                'role' => 'Member',
                'weight' => 5,
                'access' => 'read-only',
                'default' => 1,
                'created_at' => now(),
            ],
            // Add more roles here if needed
        ];

        // Insert the data into the 'access_roles' table
        DB::table('access_roles')->insert($roles);
    }
}
