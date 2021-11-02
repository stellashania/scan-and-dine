@extends('layouts.user.app')

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
    <div class="container pt-5 mb-5 pb-5">
        <div class="container-fluid justify-content-center mb-4">
            <h1 class="my-3">Explore our Menu Selection</h1>
        </div>

        <div class="container">
            <div class="row" style="height: 400px">
                <div class="col-sm-4">
                    <div class="card border-0" style="background-color: rgba(187, 159, 106, 0.3)">
                        <div class="card-body pb-0">
                            <img src="../storage/assets/ketoprak.jpg" alt="" width="100%" height="230px">
                            <h3 class="card-title mt-3">Ketoprak</h3>
                            <p class="card-text">Very delicious</p>

                            <form action="" method="POST">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="code">
                                        Quantity
                                    </label>
                                    <input type="number" value="0" min="0" step="1" class="form-control">
                                </div>
            
                                {{-- <input type="submit" name="submit" value="Unlock" class="btn btn-success mb-4"> --}}
                                <a href="menu" class="btn btn-success">Order</a>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card border-0" style="background-color: rgba(187, 159, 106, 0.3)">
                        <div class="card-body pb-0">
                            <img src="../storage/assets/ketoprak.jpg" alt="" width="100%" height="230px">
                            <h3 class="card-title mt-3">Ketoprak</h3>
                            <p class="card-text">Very delicious</p>

                            <form action="" method="POST">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="code">
                                        Quantity
                                    </label>
                                    <input type="number" value="0" min="0" step="1" class="form-control">
                                </div>
            
                                {{-- <input type="submit" name="submit" value="Unlock" class="btn btn-success mb-4"> --}}
                                <a href="menu" class="btn btn-success">Order</a>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card border-0" style="background-color: rgba(187, 159, 106, 0.3)">
                        <div class="card-body pb-0">
                            <img src="../storage/assets/ketoprak.jpg" alt="" width="100%" height="230px">
                            <h3 class="card-title mt-3">Ketoprak</h3>
                            <p class="card-text">Very delicious</p>

                            <form action="" method="POST">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="code">
                                        Quantity
                                    </label>
                                    <input type="number" value="0" min="0" step="1" class="form-control">
                                </div>
            
                                {{-- <input type="submit" name="submit" value="Unlock" class="btn btn-success mb-4"> --}}
                                <a href="menu" class="btn btn-success">Order</a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- FLIP CART SECTION ENDS HERE --}}
@endsection
