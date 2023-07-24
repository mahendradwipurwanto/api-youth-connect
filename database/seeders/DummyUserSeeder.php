<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = Uuid::uuid4();
        $email = 'dummy@example.com';
        $password = bcrypt('password');

        DB::table('tb_auth')->insert([
            'user_id' => $userId,
            'email' => $email,
            'password' => $password,
        ]);

        DB::table('tb_user')->insert([
            'user_id' => $userId,
            // Add other necessary columns
        ]);
    }
}
