@extends('layouts.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container  pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-3">Reservation for Member</h1>

            <form action="/select-table" method="GET">
                @csrf
                
                <div class="form-outline mb-4">
                    <label for="people" class="form-label text-md-right">Number of People</label>
                    <input type="text" id="people" name="people" class="form-control @error('people') is-invalid @enderror" value="{{old('people')}}">

                    @error('people')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <label for="date" class="form-label text-md-right">Date</label>
                    <input type="date" id="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{old('date')}}">

                    @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <label for="time" class="form-label text-md-right">Time</label>
                    <input type="time" id="time" name="time" class="form-control @error('time') is-invalid @enderror" value="{{old('time')}}">

                    @error('time')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-0">
                    <div class="mt-4">
                        <button type="submit" class="btn btn-success mb-4">
                            Next
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- main content section ends here -->
@endsection
