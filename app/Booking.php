<?php

namespace App;

class Booking extends Model
{
   protected $table = 'bookings';

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
