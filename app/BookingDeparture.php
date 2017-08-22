<?php

namespace App;

class BookingDeparture extends Model
{
   protected $table = 'departure_bookings';
   protected $primaryKey = 'callsign';
   public $incrementing = false;
   
    public function booking()
    {
        return $this->belongsTo(BookingDeparture::class);
    }}
