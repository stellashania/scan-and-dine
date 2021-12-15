<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Reservation::create([
            'user_id' => 1,
            'table_id' => 1,
            'pax' => 3,
            'date' => '2000-01-01',
            'time' => '03:42:21',
            'code' => '00001'
        ]);
    }
}
