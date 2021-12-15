@extends('layouts.app')

@section('content')
<div class="m-4 pt-3 pl-5 pr-5 pb-3" style="background-color: #eee;">
    <span class="fw-bold">Order Recap</span>
    <div class="d-flex justify-content-between mt-2">
      <span>Burger</span> <span>Rp. 100.000</span>
    </div>
</div>    

<form action="">
    <div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="margin-left: 44rem;">
        <input
          type="radio"
          class="btn-check"
          name="options"
          id="option1"
          autocomplete="off"
        />
        <label class="btn btn-outline-primary btn-lg" for="option1">
          <div class="d-flex justify-content-between">
            <span>VISA CARD</span>
          </div>
        </label>
    
        <input
          type="radio"
          class="btn-check"
          name="options"
          id="option2"
          autocomplete="off"
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
          name="options"
          id="option2"
          autocomplete="off"
          checked
        />
        <label class="btn btn-outline-primary btn-lg" for="option2">
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