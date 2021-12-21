@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Your Reservation Details</h3>
            </div>
            <div class="card-body fs-4">
                <div class="card-text">
                    Table : {{$res->table->id}}
                </div>
                <div class="card-text">
                    People : {{$res->pax}}
                </div>
                <div class="card-text">
                    Date : {{$res->date}}
                </div>
                <div class="card-text">
                    Time : {{$res->bookingTime->window}}
                </div>
            </div>
        </div>
    </div>

@endsection