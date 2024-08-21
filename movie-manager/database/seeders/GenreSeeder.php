<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action'
        ]);
        Genre::create([
            'name' => 'Adventure'
        ]);

        Genre::create([
            'name' => 'Comedy'
        ]);

        Genre::create([
            'name' => 'Drama'
        ]);

        Genre::create([
            'name' => 'Fantasy'
        ]);

        Genre::create([
            'name' => 'Fiction'
        ]);

        Genre::create([
            'name' => 'Musical'
        ]);

        Genre::create([
            'name' => 'Romance'
        ]);

        Genre::create([
            'name' => 'Suspense'
        ]);

        Genre::create([
            'name' => 'Horror'
        ]);
    }
}
