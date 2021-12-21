@extends('layouts.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-4">My Cart</h1>

            @forelse ($transactions as $transaction)
                @php
                    $ttlPrice = 0;
                @endphp
                <div class="card">
                    <h5 class="card-header">{{ $transaction->date }}</h5>

                    @foreach ($transaction->menus as $item)
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text float-right">IDR. {{ $item->price }}</p>
                            <p class="card-text">x {{ $item->pivot->quantity }}</p>
                            <p class="card-text">IDR. {{ $item->pivot->quantity * $item->price }}</p>

                            @php
                                $ttlPrice += $item->price * $item->pivot->quantity;
                            @endphp
                        </div>
                    @endforeach
                    <div class="float-right mt-3">
                        Total Price: IDR. {{ $ttlPrice }}
                    </div>
                </div>
            @empty
                <div class="card">
                    <h5 class="card-header">No Transactions</h5>
                </div>
            @endforelse

        </div>
    </div>
    <!-- main content section ends here -->
@endsection
