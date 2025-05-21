<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    public function run()
    {
        $albums = [
            ['name' => 'Greatest Hits'],
            ['name' => 'New Album'],
            ['name' => 'Classic Collection'],
            ['name' => 'Summer Vibes'],
            ['name' => 'Midnight Sessions']
        ];

        foreach ($albums as $album) {
            Album::create($album);
        }
    }
}
