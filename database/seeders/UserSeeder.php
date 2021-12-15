<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'role' => 'admin',
            'email' => 'davidsamuel@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '023424242423'

        ]);
        User::create([
            'name' => 'Stella',
            'role' => 'member',
            'email' => 'stella@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '023424242423'

        ]);
    }
}
