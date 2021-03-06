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
    <img src="../storage/assets/banner.png" alt="" width="100%" height="400pt">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome User!') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FLIP CART SECTION STARTS HERE --}}
    <div class="container pt-5 mb-3">
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
