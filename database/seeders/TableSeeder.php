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
            'capacity' => 3,
            'availability' => True
        ]);
        Table::create([
            'capacity' => 2,
            'availability' => True
        ]);
        Table::create([
            'capacity' => 4,
            'availability' => True
        ]);
        Table::create([
            'capacity' => 1,
            'availability' => True
        ]);
        Table::create([
            'capacity' => 3,
            'availability' => True
        ]);

        
    }
}
