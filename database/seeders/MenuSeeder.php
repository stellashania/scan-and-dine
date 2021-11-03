<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Menu::create([
            'category_id' => 1,
            'name' => 'Siomay',
            'description' => 'This is chinese food',
            'price' => 50000,
            'image' => 'dimsum.jpeg',
            'active' => 'true'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Burger',
            'description' => 'This is western food',
            'price' => 75000,
            'image' => 'burger.jpeg',
            'active' => 'true'
        ]);
    }
}
