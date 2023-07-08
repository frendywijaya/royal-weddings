<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add slider
        $sliders = [
            [
                'title' => 'First Class Service',
                'subtitle' => 'Singapore\'s Finest Destination Wedding Planner',
                'image' => 'slider01.jpg',
                'button_text' => 'Discover More',
                'button_link' => '/about',
            ],
            [
                'title' => 'First Class Service',
                'subtitle' => 'Singapore\'s Finest Destination Wedding Planner',
                'image' => 'slider02.jpg',
                'button_text' => 'Discover More',
                'button_link' => '/about',
            ],
            [
                'title' => 'First Class Service',
                'subtitle' => 'Singapore\'s Finest Destination Wedding Planner',
                'image' => 'slider03.jpg',
                'button_text' => 'Discover More',
                'button_link' => '/about',
            ]
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
