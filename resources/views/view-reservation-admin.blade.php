@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3>User's Reservations</h3>

        @forelse ($reservations as $reservation)
            <div class="card bg-light text-dark mt-4">
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Table ID</th>
                                <th>Booking Code</th>
                                <th>Number of People</th>
                                <th>Time</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <h5 class="card-header" style="background-color: rgba(207, 193, 166, 0.8);">
                                {{ $reservation->user->name }}</h5>
                            <tr>
                                <td class="col-sm-2">{{ $reservation->table_id }}</td>
                                <td class="col-sm-2">{{ $reservation->code }}</td>
                                <td class="col-sm-3">{{ $reservation->pax }}</td>
                                <td class="col-sm-2">{{ $reservation->bookingTime->window }}</td>
                                <td class="col-sm-1">{{ $reservation->date }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @empty
            <div class="card">
                <h5 class="card-header">No Reservation Available</h5>
            </div>
        @endforelse
    </div>
@endsection
