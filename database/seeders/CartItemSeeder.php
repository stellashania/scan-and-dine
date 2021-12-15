<?php

namespace Database\Seeders;

use App\Models\CartItem;
use Illuminate\Database\Seeder;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        CartItem::create([
            'cart_id' => 1,
            'menu_id' => 1,
            'quantity' => 2
        ]);

        CartItem::create([
            'cart_id' => 1,
            'menu_id' => 1,
            'quantity' => 5
        ]);

        CartItem::create([
            'cart_id' => 1,
            'menu_id' => 1,
            'quantity' => 5
        ]);

        CartItem::create([
            'cart_id' => 1,
            'menu_id' => 1,
            'quantity' => 5
        ]);

        CartItem::create([
            'cart_id' => 1,
            'menu_id' => 1,
            'quantity' => 5
        ]);

        
    }
}
