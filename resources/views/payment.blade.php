@extends('layouts.app')

@section('content')
    <div class="mt-4 pt-3 pl-5 pr-5 pb-3" style="background-color: #eee; margin-top: 4rem;">
        <span class="fw-bold">Order Recap</span>
        @php
            $ttlPrice = 0;
        @endphp
        @foreach ($cart as $item)
            @foreach ($item->menus as $i)
                <div class="d-flex justify-content-between mt-2">
                    <span>{{ $i->name }}</span> <span>Rp. {{ $i->price }}</span>
                    @php
                        $ttlPrice += $i->price * $i->pivot->quantity;
                    @endphp
                </div>
            @endforeach
        @endforeach
        <div class="d-flex justify-content-between mt-2">
            <span>Total </span> <span class="text-success">Rp. {{ $ttlPrice }}</span>
        </div>
        {{-- <div class="d-flex justify-content-between mt-2">
        <span>Burger</span> <span>Rp. 100.000</span>
    </div>
    <div class="d-flex justify-content-between mt-2">
        <span>Total </span> <span class="text-success">$85.00</span>
      </div> --}}
    </div>

    <form action="/checkout" method="POST">
        @csrf
        <div class="container ml-5" style="margin: 0; padding-top: 2rem;">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="Visa" value="Visa" checked>
                <label class="form-check-label" for="VISA">
                    VISA MASTERCARD
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="E-Payment" value="E-Payment">
                <label class="form-check-label" for="E-Payment">
                    E-PAYMENT
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="Cash" value="Cash">
                <label class="form-check-label" for="Cash">
                    CASH
                </label>
            </div>
            <button type="submit" class="btn btn-success mt-4">Pay</button>
        </div>
    </form>

@endsection
