<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data to be inserted into the 'm_settings' table
        $data = [
            [
                'key' => 'mailer_alias',
                'value' => 'YBB Foundation',
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'mailer_connection',
                'value' => 'ssl',
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'mailer_host',
                'value' => 'smtp.googlemail.com',
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'mailer_mode',
                'value' => 0,
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'mailer_password',
                'value' => 'nosppitscteyfsqq',
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'mailer_port',
                'value' => 465,
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'mailer_smtp',
                'value' => 1,
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'mailer_username',
                'value' => 'mail.ngodingin@gmail.com',
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'web_title',
                'value' => 'Youth Connect',
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'web_address',
                'value' => 'Malang City',
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'web_logo',
                'value' => 'assets/images/logo.png',
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'web_icon',
                'value' => 'assets/images/icon.png',
                'details' => null,
                'created_at' => now(),
            ],
            [
                'key' => 'master_password',
                'value' => '12344321',
                'details' => null,
                'created_at' => now(),
            ],
            // Add more data here if needed
        ];

        // Insert the data into the 'm_settings' table
        DB::table('m_settings')->insert($data);
    }
}
