<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                'name' => 'Zachariah Thanaraj',
                'position' => 'FOUNDER - CEO',
                'image' => '1689254600.jpg',
                'facebook' => '#',
                'linkedin' => '#'
            ],
            [
                'name' => 'Vinod Sivapillai',
                'position' => 'FOUNDER - COO',
                'image' => 'team_img02.jpg',
                'facebook' => '#',
                'linkedin' => '#'
            ]
        ];

        foreach ($teams as $team) {
            \App\Models\Team::create($team);
        }
    }
}
