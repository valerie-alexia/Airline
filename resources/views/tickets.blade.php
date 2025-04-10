@extends('layouts.base')

@section('title', 'Pesan Tiket')

@section('content')
<h2 class="text-2xl font-bold mb-4">Form Pemesanan Tiket ({{ $flight->flight_code }})</h2>

{{-- Informasi Penerbangan --}}
<div class="bg-gray-100 p-4 rounded-lg shadow mb-6">
    <p><strong>Asal:</strong> {{ $flight->origin }}</p>
    <p><strong>Tujuan:</strong> {{ $flight->destination }}</p>
    <p><strong>Berangkat:</strong> {{ $flight->departure_time }}</p>
    <p><strong>Tiba:</strong> {{ $flight->arrival_time }}</p>
</div>

<form method="POST" action="{{ route('tickets.store') }}" class="space-y-4">
    @csrf
    <input type="hidden" name="flight_id" value="{{ $flight->id }}">

    <div>
        <label for="passenger_name" class="block font-medium">Nama Penumpang</label>
        <input type="text" name="passenger_name" id="passenger_name" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label for="passenger_phone" class="block font-medium">No. HP</label>
        <input type="text" name="passenger_phone" id="passenger_phone" maxlength="99999999999999" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label for="seat_number" class="block font-medium">Nomor Kursi</label>
        <input type="text" name="seat_number" id="seat_number" maxlength="3" class="w-full border rounded p-2" required>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Pesan Tiket</button>
</form>

@if (session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
