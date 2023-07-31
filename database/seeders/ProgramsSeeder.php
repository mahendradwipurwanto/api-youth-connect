<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramsSeeder extends Seeder
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
                'program_type_id' => 1,
                'program_branch_id' => 1,
                'title' => 'IYS 2023',
                'icon' => 'assets/images/icon.png',
                'logo' => 'assets/images/logo.png',
                'description' => 'IYS 2023',
                'address' => 'Istanbul',
                'phone' => '1234567890',
                'email' => 'iys@gmail.com',
                'max_upload' => 5,
                'allowed_upload' => '{"pdf":true,"jpg":true,"jpeg":true,"png":true,"docx":true,"pptx":true,"xlsx":true}',
                'instagram' => 'iys',
                'tiktok' => 'iys',
                'twitter' => 'iys',
                'youtube' => 'iys',
                'facebook' => 'iys',
            ]
            // Add more data here if needed
        ];

        // Insert the data into the 'access_user' table
        DB::table('m_programs')->insert($data);
    }
}
