<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456'),
        ])->assignRole('Super Admin');

        User::create([
            'name' => 'Mahaadmin',
            'email' => 'mahaadmin@gmail.com',
            'password' => bcrypt('123456'),
        ])->assignRole('Super Admin');
    }
}
