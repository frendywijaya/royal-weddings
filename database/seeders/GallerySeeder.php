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
        $galleries = [
            [
                'title' => 'First Class Service',
                'image' => 'slider01.jpg',
            ],
            [
                'title' => 'First Class Service',
                'image' => 'slider02.jpg',
            ],
            [
                'title' => 'First Class Service',
                'image' => 'slider03.jpg',
            ]
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
