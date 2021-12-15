@extends('layouts.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-4">Edit Cart Item</h1>

            <div class="row" {{-- style="height: 400px" --}}>
                <div class="col-sm-6">
                    <div class="col-sm-4">
                        <div class="card h-100 border-0">
                            <div class="text-white" style="background-color: rgba(187, 159, 106, 0.5)">
                                <div class="card-body">
                                    <img src="/storage/assets/menus/{{ $menu->image }}" alt="" width="100%" height="75%">
                                    <h3 class="card-title mt-3">{{ $menu->name }}</h3>
                                    <p class="card-text">{{ $menu->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid justify-content-center mb-5 border w-50">
                        <form action="/update-cart-item/{{ $cart_id }}/{{ $menu->id }}" method="POST">
                            <div class="form-outline mb-4">
                                <label class="form-label mt-3" for="quantity">
                                    Quantity
                                </label>
                                <input type="text" id="quantity" name="quantity"
                                    class="form-control @error('quantity') is-invalid @enderror" {{-- value="{{ old('quantity') ?? $product->price }}" --}}>

                                @error('quantity')
                                    <div class="alert">{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <input type="submit" name="submit" value="Edit" class="btn btn-success mb-4">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- main content section ends here -->
@endsection
