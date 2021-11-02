@extends('layouts.user.app')

<style>
    .card-flip > div {
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
            <h1 class="my-3">Explore our Menu Selection</h1>
        </div>

        <div class="container-fluid justify-content-center mb-5 border w-50">
                <form action="" method="POST">
                    <div class="form-outline mb-4">
                        <label class="form-label mt-3" for="code">
                            Enter the Code from Our Staff to Unlock the Ordering Feature
                        </label>
                        <input type="text" id="code" class="form-control">
                    </div>

                    {{-- <input type="submit" name="submit" value="Unlock" class="btn btn-success mb-4"> --}}
                    <a href="menu" class="btn btn-success mb-4">Unlock</a>
                </form>
        </div>

        <div class="container">
            <div class="row" style="height: 400px">
                <div class="col-sm-4">
                    <div class="card card-flip h-100 border-0">
                        <div class="card-front text-white" style="background-color: rgba(187, 159, 106, 0.5)">
                            <div class="card-body">
                                <img src="../storage/assets/ketoprak.jpg" alt="" width="100%" height="75%">
                                <h3 class="card-title mt-3">Ketoprak</h3>
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
                                <h3 class="card-title mt-3">Ketoprak</h3>
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
                                <h3 class="card-title mt-3">Ketoprak</h3>
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

            </div>
        </div>
    </div>
    {{-- FLIP CART SECTION ENDS HERE --}}
@endsection