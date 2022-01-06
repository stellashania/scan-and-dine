@extends('layouts.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-4">My Cart</h1>

            <table class="table table-striped table-hover">
                <thead>
                    <th class="col-md-1">No.</th>
                    <th class="col-md-2">Menu Name</th>
                    <th class="col-md-2">Quantity</th>
                    <th class="col-md-2">Price</th>
                    <th class="col-md-2">Subtotal</th>
                    <th class="col-md-3">Action</th>
                </thead>

                @php
                    $ttlPrice = 0;
                    $idx = 0;
                    $isEmpty = 0;
                @endphp

                @forelse ($chosen_cart->menus as $i)
                    @php
                        $isEmpty = 1;
                    @endphp
                    <tr>
                        <td class="col-md-1">{{ $loop->iteration }}.</td>
                        <td class="col-md-2">{{ $i->name }}</td>
                        <td class="col-md-2">{{ $i->pivot->quantity }}</td>
                        <td class="col-md-2">Rp. {{ number_format($i->price) }}</td>
                        <td class="col-md-2">
                            Rp. {{ number_format($i->pivot->quantity * $i->price) }}
                            @php
                                $ttlPrice += $i->price * $i->pivot->quantity;
                            @endphp
                        </td>
                        <td class="col-md-3">
                            <div class="d-inline-flex">
                                <a href="/edit-cart-item/{{ $i->pivot->cart_id }}/{{ $i->pivot->menu_id }}"
                                    class="btn btn-warning btn-sm px-2 mr-1 shadow-sm">
                                    Update
                                </a>

                                <form action="/delete-cart-item/{{ $i->pivot->cart_id }}/{{ $i->pivot->menu_id }}"
                                    method="POST">
                                    @csrf
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm px-2 shadow-sm">
                                </form>
                            </div>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="6">No items... Please order first...</td>
                    </tr>
                @endforelse
            </table>

            <h3 class="my-4">Total: Rp. {{ number_format($ttlPrice) }}</h3>

            <form action="paymentForm" method="GET">
                @if ($isEmpty != 0)
                    <input type="submit" name="submit" value="Pay Bill" class="btn btn-success mb-4">
                @else
                    <input type="submit" name="submit" value="Pay Bill" class="btn btn-success mb-4" disabled>
                @endif
            </form>
        </div>
    </div>
    <!-- main content section ends here -->
@endsection
