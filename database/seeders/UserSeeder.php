<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Bidur Joshi',

                'email' => 'bidurjoshi@gmail.com',
                'password' => Hash::make('19QpXEc9Y^mM')
            ],
            [
                'name' => 'PeaceNepal',

                'email' => 'peacenepal@gmail.com',
                'password' => Hash::make('19QpXEc9Y^mM')
            ],
        ];
        foreach ($users as $user) {
            User::firstOrCreate(['email' => $user['email']], $user);
        }
    }
}
