<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\TicketController;

Route::get('/', function () { return view('home'); });

Route::get('/flights', [FlightController::class, 'index'])->name('flights.index');
Route::get('/flights/ticket/{flight}', [FlightController::class, 'ticket'])->name('flights.ticket');  // Display flight with tickets
Route::get('/flights/book/{flight}', [TicketController::class, 'create'])->name('tickets.create'); // Ticket booking form

Route::post('/ticket/submit', [TicketController::class, 'store'])->name('tickets.store');  // Create ticket
Route::put('/ticket/board/{ticket}', [TicketController::class, 'boarding'])->name('tickets.boarding');  // Boarding action (PUT request)
Route::delete('/ticket/delete/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');  // Delete ticket
