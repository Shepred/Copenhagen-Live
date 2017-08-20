<?php

namespace App;

class BookingDeparture extends Model
{
   protected $table = 'departure_bookings';

    public function booking()
    {
        return $this->belongsTo(BookingDeparture::class);
    }}
