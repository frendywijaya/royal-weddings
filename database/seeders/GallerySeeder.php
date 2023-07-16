<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add slider
        $galleries = [];
        for ($i = 1; $i <= 58; $i++) {
            $galleries[] = [
                'title' => 'First Class Service',
                'image' => 'image' . sprintf('%02d', $i) . '.jpg',
            ];
        }

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
