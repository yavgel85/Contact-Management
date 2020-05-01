<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$jAQC8oCLO2Hiois643yl9.wfCD0KK3JuKQaI9qJQgpWbRxW/Kx2xO',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
