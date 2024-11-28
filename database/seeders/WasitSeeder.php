<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WasitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wasits')->insert([
            [
                'name' => 'Asep Wahyudi',
                'sertifikat' => 'Rai Fitness 2019',
                'image' => '1732510421.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
