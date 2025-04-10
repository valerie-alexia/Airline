<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_id',
        'passenger_name',
        'passenger_phone',
        'seat_number',
        'is_boarding',
        'boarding_time',
    ];
    
    // Relasi Many-to-One: 1 ticket hanya milik 1 flight
    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
