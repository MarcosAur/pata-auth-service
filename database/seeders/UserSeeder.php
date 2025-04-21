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
                'name' => 'Marcos',
                'email' => 'marcos@gmail.com',
                'password' => bcrypt('1234'),
                'role_id' => 1,
                'active' => true
            ],
            [
                'name' => 'Jackson',
                'email' => 'jackson@gmail.com',
                'password' => bcrypt('1234'),
                'role_id' => 2,
                'active' => true
            ],
            [
                'name' => 'Kesia',
                'email' => 'kesia@gmail.com',
                'password' => bcrypt('1234'),
                'role_id' => 3,
                'active' => true
            ],
        ]);
    }
}
