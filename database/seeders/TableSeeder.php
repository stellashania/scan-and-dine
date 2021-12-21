<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Table::create([
            'capacity' => 3
        ]);
        Table::create([
            'capacity' => 2
        ]);
        Table::create([
            'capacity' => 4
        ]);
        Table::create([
            'capacity' => 2
        ]);
        Table::create([
            'capacity' => 3
        ]);
    }
}
