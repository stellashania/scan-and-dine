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
            'name' => 'Rendang',
            'description' => 'Rendang adalah masakan Padang',
            'price' => 13000,
            'image' => 'rendang.jpg'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Ayam Bakar',
            'description' => 'Ayam bakar adalah masakan padang',
            'price' => 12000,
            'image' => 'ayam_bakar.jpg'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Ayam Gulai',
            'description' => 'Ayam gulai adalah masakan padang',
            'price' => 12000,
            'image' => 'ayam_gulai.jpg'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Teh Manis',
            'description' => 'Teh manis adalah minuman padang',
            'price' => 5000,
            'image' => 'teh.jpg'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Teh Tawar',
            'description' => 'Teh tawar adalah minuman padang',
            'price' => 5000,
            'image' => 'teh.jpg'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Es Jeruk',
            'description' => 'Es Jeruk adalah minuman padang',
            'price' => 7500,
            'image' => 'es_jeruk.jpg'
        ]);

        Menu::create([
            'category_id' => 3,
            'name' => 'Es Krim',
            'description' => 'Ini eskrim',
            'price' => 12000,
            'image' => 'es_krim.jpg'
        ]);

        Menu::create([
            'category_id' => 3,
            'name' => 'Cendol',
            'description' => 'Ini cendol',
            'price' => 10000,
            'image' => 'cendol.jpg'
        ]);
    }
}
