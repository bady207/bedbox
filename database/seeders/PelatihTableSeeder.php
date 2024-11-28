<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelatihTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelatihs')->insert([
            [
                'name' => 'Agus Santoso',
                'pengalaman' => 'Gold Medals Asean Games 2019',
                'image' => '1732113329.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ahmad Hidayat',
                'pengalaman' => 'Gold Medals Asean Games 2014',
                'image' => '1732113441.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);
    }
}
