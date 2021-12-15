<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'Food',
            'image' => 'makanan_padang.jpg',
        ]);
        
        Category::create([
            'name' => 'Drink',
            'image' => 'minuman.jpg',
        ]);

        Category::create([
            'name' => 'Dessert',
            'image' => 'dessert.jpg',
        ]);
    }
}
