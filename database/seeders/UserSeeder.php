<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Kementerian Kreasi',
            'email' => 'bemkm@orma.dinus.ac.id',
            'password' => \bcrypt('Kreasi2526')
        ];

        User::insert($user);
    }
}
