<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add user
        $users = [
            [
                'name' => 'Frendy',
                'email' => 'motion.dee@gmail.com',
                'password' => bcrypt('qwer1234'),
            ],
            [
                'name' => 'Admin',
                'email' => 'hello@royalweddings.com.sg',
                'password' => bcrypt('qwer1234'),
            ],
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
