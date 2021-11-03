<?php

namespace Database\Seeders;

use App\Models\CartItem;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            TableSeeder::class,
            CartSeeder::class,
            TransactionSeeder:: class,
            CategorySeeder:: class,
            ReservationSeeder:: class,
            MenuSeeder:: class,
            TransactionDetailSeeder::class,
            CartItemSeeder::class
        ]);
    }
}
