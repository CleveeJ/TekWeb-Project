<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'William',
                'password' => Hash::make('123'),
                'email' => 'a1@gmail.com',
            ],
            [
                'username' => 'Willson',
                'password' => Hash::make('123'),
                'email' => 'a2@gmail.com',
            ],
            [
                'username' => 'Michael',
                'password' => Hash::make('123'),
                'email' => 'a3@gmail.com',
            ],
            [
                'username' => 'Jeremiah',
                'password' => Hash::make('123'),
                'email' => 'a4@gmail.com',
            ],
        ];


        foreach ($users as $user) {
            User::create($user);
        }
    }
}
