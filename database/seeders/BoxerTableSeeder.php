<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BoxerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('boxers')->insert([
            [
                'name' => 'Bedy Tyson',
                'slug' => $this->generateUniqueSlug('Bedy Tyson'),
                'weight_class' => '70kg',
                'negara' => 'USA',
                'pelatihs_id' => 1,
                'win' => '50 (45ko\'s)',
                'lose' => '0 (0ko\'s)',
                'image' => '1732113365.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andrian Pacquiao',
                'slug' => $this->generateUniqueSlug('Andrian Pacquiao'),
                'weight_class' => '70kg',
                'negara' => 'USA',
                'pelatihs_id' => 2,
                'win' => '2 (1ko\'s)',
                'lose' => '1 (0ko\'s)',
                'image' => '1732113499.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Generate a unique slug based on the name.
     */
    private function generateUniqueSlug($name)
    {
        do {
            $slug = Str::slug($name) . '-' . Str::random(5); // Slug with random string
        } while (DB::table('boxers')->where('slug', $slug)->exists()); // Check uniqueness

        return $slug;
    }
}
