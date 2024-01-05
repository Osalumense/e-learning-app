<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Super Admin',
                'username' => 'superadmin',
                'email' => 'adminlearn@gmail.com',
                'password' => Hash::make('AdminP8ssw0rd'),
                'role' => 'admin',
                'status' => '1'
            ],

            // Instructor
            [
                'name' => 'Instructor',
                'username' => 'instructor',
                'email' => 'instructor@gmail.com',
                'password' => Hash::make('Instruct0rP8ssw0rd'),
                'role' => 'instructor',
                'status' => '1'
            ],

            // Admin
            [
                'name' => 'Super Admin',
                'username' => 'Super Admin',
                'email' => 'user@gmail.com',
                'password' => Hash::make('UserP8ssw0rd'),
                'role' => 'user',
                'status' => '1'
            ]
        ]);
    }
}
