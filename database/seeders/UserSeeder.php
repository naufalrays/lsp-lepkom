<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sales = User::create([
            'name' => 'adminRay',
            'email' => 'adminRay@test.com',
            'password' => bcrypt('password')
        ]);

        $user = User::create([
            'name' => 'adminNaufal',
            'email' => 'adminNaufal@test.com',
            'password' => bcrypt('password')
        ]);
    }
}
