<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTime extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }
}
