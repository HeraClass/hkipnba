<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'name' => 'denny',
                'username' => 'denny',
                'email' => 'denny@mail.com',
                'password' => bcrypt('denny'),
                'role' => 'user'
            ],
            ]);
    }
}
