@extends('layouts.base')

@section('title', 'Pesan Tiket')

@section('content')
<h2 class="text-2xl font-bold mb-4 text-center md:text-left">Form Pemesanan Tiket ({{ $flight->flight_code }})</h2>

{{-- Info Penerbangan --}}
<div class="bg-gray-100 p-4 rounded-lg shadow mb-6 max-w-2xl mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <p><strong>Asal:</strong> {{ $flight->origin }}</p>
        <p><strong>Tujuan:</strong> {{ $flight->destination }}</p>
        <p><strong>Berangkat:</strong> {{ $flight->departure_time }}</p>
        <p><strong>Tiba:</strong> {{ $flight->arrival_time }}</p>
    </div>
</div>

{{-- Form --}}
<form method="POST" action="{{ route('tickets.store') }}" class="space-y-4 max-w-2xl mx-auto px-4">
    @csrf
    <input type="hidden" name="flight_id" value="{{ $flight->id }}">

    <div>
        <label for="passenger_name" class="block font-medium">Nama Penumpang</label>
        <input type="text" name="passenger_name" id="passenger_name"
            class="w-full border rounded p-2 focus:outline-none focus:ring focus:border-blue-300" required>
    </div>

    <div>
        <label for="passenger_phone" class="block font-medium">No. HP</label>
        <input type="text" name="passenger_phone" id="passenger_phone" maxlength="14"
            class="w-full border rounded p-2 focus:outline-none focus:ring focus:border-blue-300" required>
    </div>

    <div>
        <label for="seat_number" class="block font-medium">Nomor Kursi</label>
        <input type="text" name="seat_number" id="seat_number" maxlength="3"
            class="w-full border rounded p-2 focus:outline-none focus:ring focus:border-blue-300" required>
    </div>

    <button type="submit"
        class="w-full sm:w-auto bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Pesan Tiket</button>
</form>

{{-- Flash Success --}}
@if (session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mt-4 max-w-2xl mx-auto">
        {{ session('success') }}
    </div>
@endif

{{-- Flash Error --}}
@if ($errors->any())
    <div class="bg-red-100 text-red-800 p-2 rounded mt-4 max-w-2xl mx-auto">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
