<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Ticket;
use Carbon\Carbon;

class TicketController extends Controller
{
    public function create(Flight $flight)
    {
        // Show the ticket booking form for a specific flight
        return view('tickets', compact('flight'));
    }

    public function store(Request $request)
    {
        // Validate and store the ticket
        $validated = $request->validate([
            'flight_id' => 'required|exists:flights,id',
            'passenger_name' => 'required|string|max:255',
            'passenger_phone' => 'required|integer|max:99999999999999',
            'seat_number' => 'required|string|max:3',
        ]);

        Ticket::create($validated + ['is_boarding' => 0]);

        return redirect()->route('flights.ticket', $request->flight_id)->with('success', 'Tiket berhasil dipesan!');
    }

    public function boarding(Ticket $ticket)
    {
        // Mark the ticket as boarded and set the boarding time
        if ($ticket->is_boarding) {
            return back()->with('error', 'Tiket sudah boarding dan tidak dapat diubah.');
        }

        $ticket->update([
            'is_boarding' => true,
            'boarding_time' => Carbon::now(),
        ]);

        return back()->with('success', 'Penumpang berhasil boarding.');
    }

    public function destroy(Ticket $ticket)
    {
        // Ensure ticket can only be deleted if not boarded
        if ($ticket->is_boarding) {
            return back()->with('error', 'Tiket sudah boarding dan tidak dapat dihapus.');
        }

        $ticket->delete();
        return back()->with('success', 'Tiket berhasil dihapus.');
    }
}