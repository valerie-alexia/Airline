<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
class FlightController extends Controller
{
    public function index()
    {
        // Fetch all flights from the database
        $flights = Flight::all();

        // Pass the flights data to the view
        return view('flights', compact('flights'));
    }

    public function ticket(Flight $flight)
    {
        // Load the related tickets for the flight
        $flight->load('tickets');
        return view('details', compact('flight'));
    }
}