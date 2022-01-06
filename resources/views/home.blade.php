@extends('layouts.app')

@section('content')
    <img src="../storage/assets/banner.png" alt="" width="100%" height="400pt">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    @if (Auth::user()->role == 'admin')
                        <div class="card-header">
                            {{ __('Welcome Admin!') }}
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    @else
                        <div class="card-header">
                            {{-- {{ __('Welcome Admin!') }} --}}
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>

                        <div class="card-body">
                            {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }} --}}
                            Welcome to Siang Malam Restaurant
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
