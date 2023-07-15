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
                'image' => '81-banner-2-1.jpg',
                'button_text' => 'Discover More',
                'button_link' => '/about',
            ],
            [
                'title' => 'First Class Service',
                'subtitle' => 'Singapore\'s Finest Destination Wedding Planner',
                'image' => '61-banner-2-2.jpg',
                'button_text' => 'Discover More',
                'button_link' => '/about',
            ],
            [
                'title' => 'First Class Service',
                'subtitle' => 'Singapore\'s Finest Destination Wedding Planner',
                'image' => '82-banner-2-3.jpg',
                'button_text' => 'Discover More',
                'button_link' => '/about',
            ]
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
