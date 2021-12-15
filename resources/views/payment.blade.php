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
            <span>{{$i->name}}</span> <span>Rp. {{$i->price}}</span>
            @php
                $ttlPrice += $i->price * $i->pivot->quantity;
            @endphp
        </div>
        @endforeach
    @endforeach
    <div class="d-flex justify-content-between mt-2">
        <span>Total </span> <span class="text-success">Rp. {{$ttlPrice}}</span>
      </div>
    {{-- <div class="d-flex justify-content-between mt-2">
        <span>Burger</span> <span>Rp. 100.000</span>
    </div>
    <div class="d-flex justify-content-between mt-2">
        <span>Total </span> <span class="text-success">$85.00</span>
      </div> --}}
</div>    

<form action="" method="">
    <div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="margin-left: 44rem;">
        <input
          type="radio"
          class="btn-check"
          name="payment_method"
          id="option1"
          autocomplete="off"
          value=""
        />
        <label class="btn btn-outline-primary btn-lg" for="option1">
          <div class="d-flex justify-content-between">
            <span>VISA CARD</span>
          </div>
        </label>
    
        <input
          type="radio"
          class="btn-check"
          name="payment_method"
          id="option2"
          autocomplete="off"
          value=""
          checked
        />
        <label class="btn btn-outline-primary btn-lg" for="option2">
          <div class="d-flex justify-content-between">
            <span>CASH </span>
          </div>
        </label>
    
        <input
          type="radio"
          class="btn-check"
          name="payment_method"
          id="option3"
          autocomplete="off"
          value=""
          checked
        />
        <label class="btn btn-outline-primary btn-lg" for="option3">
          <div class="d-flex justify-content-between">
            <span>E-MONEY </span>
          </div>
        </label>
    </div>
    <div class="text-center">
        <button type="button" class="btn btn-success">Pay</button>
    </div>
</form>

@endsection