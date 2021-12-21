@extends('layouts.app')

@section('content')
    {{-- <div class="container pt-5">
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
    </div> --}}

    <div class="container mt-5">
        <h3>History Transaction</h3>

        @forelse ($transactions as $transaction)
            @php
                $ttlPrice = 0;
            @endphp
            <div class="card bg-light text-dark mt-4">
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td colspan="3">{{ $transaction->date }}</td>
                            </tr>

                            @foreach ($transaction->menus as $item)
                                <tr>
                                    <td class="col-sm-9">{{ $item->name }}</td>
                                    <td class="col-sm-1">x {{ $item->pivot->quantity }}</td>
                                    <td class="col-sm-2">IDR. {{ $item->price }}</td>
                                </tr>
                                @php
                                    $ttlPrice += $item->price * $item->pivot->quantity;
                                @endphp
                            @endforeach
                            <tr>
                                <td colspan="3" class="text-right" style="padding-right: 5.2rem;">Total : IDR. {{ $ttlPrice }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @empty
            <div class="card">
                <h5 class="card-header">No Transactions</h5>
            </div>
        @endforelse
    </div>
@endsection
