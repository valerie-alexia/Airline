@extends('layouts.base')

@section('title', 'Detail Penerbangan')

@section('content')
<h2 class="text-2xl font-bold mb-4">Detail Penerbangan - {{ $flight->flight_code }}</h2>

<p><strong>Asal:</strong> {{ $flight->origin }}</p>
<p><strong>Tujuan:</strong> {{ $flight->destination }}</p>
<p><strong>Waktu Berangkat:</strong> {{ $flight->departure_time }}</p>
<p><strong>Waktu Tiba:</strong> {{ $flight->arrival_time }}</p>

<h3 class="text-xl font-semibold mt-6 mb-2">Daftar Tiket</h3>

<table class="w-full text-sm text-left text-gray-700 border">
    <thead class="bg-gray-200 text-gray-700">
        <tr>
            <th>Nama</th>
            <th>No HP</th>
            <th>No Kursi</th>
            <th>Status Boarding</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($flight->tickets as $ticket)
        <tr class="border-b">
            <td>{{ $ticket->passenger_name }}</td>
            <td>{{ $ticket->passenger_phone }}</td>
            <td>{{ $ticket->seat_number }}</td>
            <td>
                @if ($ticket->is_boarding)
                    ✅ {{ $ticket->boarding_time }}
                @else
                    ❌ Belum boarding
                @endif
            </td>
            <td class="space-x-2">
                @if (!$ticket->is_boarding)
                    <form method="POST" action="{{ route('tickets.boarding', $ticket->id) }}" class="inline">
                        @csrf
                        @method('PUT') <!-- Simulating PUT request -->
                        <button class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Konfirmasi Boarding</button>
                    </form> 
                    <form method="POST" action="{{ route('tickets.destroy', $ticket->id) }}" class="inline" onsubmit="return confirm('Hapus tiket ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700">Hapus</button>
                    </form>
                @else
                    <span class="text-gray-500">Boarded</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
