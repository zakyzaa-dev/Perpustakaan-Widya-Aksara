<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
                'name' => 'zakyzaa',
                'email' => 'zakyzaa@admin.com',
                'password' => Hash::make('zakyzaa1234')
            ],
            [
                'name' => 'hanni pham',
                'email' => 'phamyy@admin.com',
                'password' => Hash::make('phampham')
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
