<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flights')->insert([
            [
                'flight_code' => 'JT610',
                'origin' => 'SUB',
                'destination' => 'CGK',
                'departure_time' => Carbon::parse('2025-04-12 07:00:00'),
                'arrival_time' => Carbon::parse('2025-04-12 09:00:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'GA205',
                'origin' => 'DPS',
                'destination' => 'SUB',
                'departure_time' => Carbon::parse('2025-04-13 10:00:00'),
                'arrival_time' => Carbon::parse('2025-04-13 11:30:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'ID808',
                'origin' => 'CGK',
                'destination' => 'JOG',
                'departure_time' => Carbon::parse('2025-04-14 06:45:00'),
                'arrival_time' => Carbon::parse('2025-04-14 08:00:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'QZ110',
                'origin' => 'SUB',
                'destination' => 'KUL',
                'departure_time' => Carbon::parse('2025-04-15 15:30:00'),
                'arrival_time' => Carbon::parse('2025-04-15 18:00:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'TR229',
                'origin' => 'CGK',
                'destination' => 'SIN',
                'departure_time' => Carbon::parse('2025-04-16 09:45:00'),
                'arrival_time' => Carbon::parse('2025-04-16 12:00:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
