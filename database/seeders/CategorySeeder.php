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
            'name' => 'Asian',
            'image' => 'dimsum.jpeg',
            'active' => True
        ]);
        
        Category::create([
            'name' => 'Western',
            'image' => 'burger.jpeg',
            'active' => False
        ]);
    }
}
