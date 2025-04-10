@extends('layouts.base')

@section('title', 'Daftar Penerbangan')

@section('content')
<h2 class="text-2xl font-bold mb-4">Daftar Penerbangan</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($flights as $flight)
    <div class="bg-white border rounded-lg shadow-md p-4 hover:shadow-lg transition">
        <h3 class="text-lg font-semibold mb-2">{{ $flight->flight_code }}</h3>
        <p><strong>Asal:</strong> {{ $flight->origin }}</p>
        <p><strong>Tujuan:</strong> {{ $flight->destination }}</p>
        <p><strong>Berangkat:</strong> {{ $flight->departure_time }}</p>
        <p><strong>Tiba:</strong> {{ $flight->arrival_time }}</p>

        <div class="mt-4 flex justify-between">
            <a href="{{ route('flights.ticket', $flight->id) }}" class="text-blue-600 hover:underline">Detail</a>
            <a href="{{ route('tickets.create', $flight) }}" class="text-green-600 hover:underline">Pesan</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
