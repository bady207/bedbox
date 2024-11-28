<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {

            DB::table('users')->insert([
                'IsAdmin' => 1,
                'email' => 'tyson@gmail.com',
                'email_verified_at' => now(), // Menggunakan fungsi yang valid
                'name' => 'Bady Ubaidillah',
                'password' => Hash::make('11111111'), // Menggunakan fungsi yang valid untuk hash password
            ]);
        }
    }
}
