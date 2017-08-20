<?php

namespace App;

class BookingArrival extends Model
{
   protected $table = 'arrival_bookings';

    public function booking()
    {
        return $this->belongsTo(BookingArrival::class);
    }
}
