<?php

namespace Database\Seeders;

use App\Models\BookingTime;
use Illuminate\Database\Seeder;

class BookingTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookingTime::create([
            'window' => "11:00 - 12:30",
        ]);
        BookingTime::create([
            'window' => "13:00 - 14:30",
        ]);
        BookingTime::create([
            'window' => "15:00 - 16:30",
        ]);
        BookingTime::create([
            'window' => "17:00 - 18:30",
        ]);
        BookingTime::create([
            'window' => "19:00 - 20:30",
        ]);
    }
}
