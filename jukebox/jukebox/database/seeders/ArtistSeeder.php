<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    public function run()
    {
        Artist::create(['name' => 'The Beatles', 'genre' => 'Rock']);
        Artist::create(['name' => 'Taylor Swift', 'genre' => 'Pop']);
        Artist::create(['name' => 'Mozart', 'genre' => 'Classical']);
        Artist::create(['name' => 'Adele', 'genre' => 'Pop']);
        Artist::create(['name' => 'Queen', 'genre' => 'Rock']);
        Artist::create(['name' => 'Drake', 'genre' => 'Hip-Hop']);
        Artist::create(['name' => 'Beethoven', 'genre' => 'Classical']);
        Artist::create(['name' => 'Ed Sheeran', 'genre' => 'Pop']);
        Artist::create(['name' => 'Imagine Dragons', 'genre' => 'Alternative']);
        Artist::create(['name' => 'Billie Eilish', 'genre' => 'Indie Pop']);
    }
}
