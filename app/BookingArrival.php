<?php

namespace App;

class BookingArrival extends Model
{
   protected $table = 'arrival_bookings';
   protected $primaryKey = 'callsign';
   public $incrementing = false;

    public function booking()
    {
        return $this->belongsTo(BookingArrival::class);
    }
}
