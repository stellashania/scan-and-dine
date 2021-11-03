<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'David',
            'role' => 'Admin',
            'email' => 'davidsamuel@gmail.com',
            'password' => '12345678',
            'phone' => '023424242423'

        ]);
    }
}