<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                // ADMIN TESTING UNTUK LOGIN MANUAL
                'name' => 'BEM KM UDINUS',
                'email' => 'bemkm@orma.dinus.ac.id',
                'password' => 'bemkm123',
            ],
            [
                // KREASI UNTUK LOGIN GOOGLE
                'name' => 'Kementerian Kreasi',
                'email' => 'kementeriankreasi@gmail.com',
                'password' => 'kreasi123',
            ]
        ];

        foreach ($users as $userData) {
            User::updateOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => \bcrypt($userData['password']),
                ]
            );
        }
    }
}
