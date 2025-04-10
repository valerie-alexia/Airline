<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi secara mass-assignment
    protected $fillable = [
        'flight_code',
        'origin',
        'destination',
        'departure_time',
        'arrival_time',
    ];
    
    // Relasi One-to-Many: 1 flight punya banyak ticket
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
