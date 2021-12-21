@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3>History Transaction</h3>

        @forelse ($transactions as $transaction)
            @php
                $ttlPrice = 0;
            @endphp
            <div class="card bg-light text-dark mt-4">
                <h5 class="card-header" style="background-color: rgba(207, 193, 166, 0.8);">{{ $transaction->date }}
                </h5>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            {{-- <tr>
                                <td colspan="3" class="card-header">{{ $transaction->date }}</td>
                            </tr> --}}

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
                                <td colspan="3" class="text-right"
                                    style="padding-right: 5.6rem; color: rgba(128, 110, 75, 0.8); font-size:larger; font-weight:bold">
                                    Total :
                                    IDR.
                                    {{ $ttlPrice }}</td>
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
