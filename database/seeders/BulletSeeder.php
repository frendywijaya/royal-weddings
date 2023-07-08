<?php

namespace Database\Seeders;

use App\Models\BulletPoint;
use Illuminate\Database\Seeder;

class BulletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add data bullet points
        $data_bullets = [
            [
                'title' => 'Generating Qualified Workforce to Fuel your company',
            ],
            [
                'title' => 'Time Management Efficiency',
            ]
        ];

        foreach ($data_bullets as $bullet) {
            BulletPoint::create($bullet);
        }

    }
}
