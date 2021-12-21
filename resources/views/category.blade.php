@extends('layouts.app')

<style>
    .card-flip>div {
        backface-visibility: hidden;
        transition: transform 300ms;
        transition-timing-function: linear;
        width: 100%;
        height: 100%;
        margin: 0;
        display: flex;
    }

    .card-front {
        transform: rotateY(0deg);
    }

    .card-back {
        transform: rotateY(180deg);
        position: absolute;
        top: 0;
    }

    .card-flip:hover .card-front {
        transform: rotateY(-180deg);
    }

    .card-flip:hover .card-back {
        transform: rotateY(0deg);
    }

</style>

@section('content')
    {{-- FLIP CART SECTION STARTS HERE --}}
    <div class="container pt-5 mb-3">
        <div class="container-fluid justify-content-center mb-4">
            <h1 class="my-3">Explore our Menu Category Selection</h1>
        </div>

        <div class="container">
            <div class="row" style="height: 400px">
                @foreach ($categories as $category)
                    {{-- <a href="/menu/{{$category->id}}"> --}}
                    <div class="col-sm-4">
                        <a href="/locked-menu/{{ $category->id }}" class="text-decoration-none">
                            <div class="card card-flip h-100 border-0">
                                <div class="card-front text-white" style="background-color: rgba(187, 159, 106, 0.5)">
                                    <div class="card-body">
                                        <img src="../storage/assets/categories/{{ $category->image }}" alt="" width="100%"
                                            height="75%">
                                        <h3 class="card-title mt-3">{{ $category->name }}
                                        </h3>
                                    </div>
                                </div>

                                <div class="card-back text-white">
                                    <div class="card-body" style="background-color: rgba(187, 159, 106, 0.5)">
                                        <img src="../storage/assets/categories/{{ $category->image }}" alt="" width="100%"
                                            height="100%">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- </a> --}}
                @endforeach
                {{-- <div class="col-sm-4">
                    <div class="card card-flip h-100 border-0">
                        <div class="card-front text-white" style="background-color: rgba(187, 159, 106, 0.5)">
                            <div class="card-body">
                                <img src="../storage/assets/ketoprak.jpg" alt="" width="100%" height="75%">
                                <h3 class="card-title mt-3">Drink</h3>
                                <p class="card-text">Very delicious</p>
                            </div>
                        </div>

                        <div class="card-back text-white">
                            <div class="card-body" style="background-color: rgba(187, 159, 106, 0.5)">
                                <img src="../storage/assets/ketoprak.jpg" alt="" width="100%" height="100%">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card card-flip h-100 border-0">
                        <div class="card-front text-white" style="background-color: rgba(187, 159, 106, 0.5)">
                            <div class="card-body">
                                <img src="../storage/assets/ketoprak.jpg" alt="" width="100%" height="75%">
                                <h3 class="card-title mt-3">Dessert</h3>
                                <p class="card-text">Very delicious</p>
                            </div>
                        </div>

                        <div class="card-back text-white">
                            <div class="card-body" style="background-color: rgba(187, 159, 106, 0.5)">
                                <img src="../storage/assets/ketoprak.jpg" alt="" width="100%" height="100%">
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    {{-- FLIP CART SECTION ENDS HERE --}}
@endsection
