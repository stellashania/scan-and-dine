@extends('layouts.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container  pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-3">Select a Table</h1>

            <form action="/add-reservation" method="POST">
                @csrf

                <div class="form-outline mb-4">
                    <label for="table" class="form-label text-md-right">Table Number</label>

                    <select class="form-control @error('table') is-invalid @enderror" value="{{old('table')}}" name="table" id="table">
                        @forelse ($tables as $table)
                            <option value="{{ $table->id }}">Table {{ $table->id }}</option>
                        @empty
                            <option value="none">No tables available for you right now</option>
                        @endforelse
                    </select>

                    @error('table')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <input type="hidden" name="people" value="{{$details->people}}">
                <input type="hidden" name="date" value="{{$details->date}}">
                <input type="hidden" name="time" value="{{$details->time}}">

                @if ($tables->isEmpty())
                    <div class="mb-0">
                        <div class="mt-4">
                            <button type="submit" name="btn" value="back" class="text-white btn btn-danger mb-4">
                                Back
                            </button>
                        </div>
                    </div>
                @else
                    <div class="mb-0">
                        <div class="mt-4">
                            <button type="submit" name="btn" value="book" class="btn btn-success mb-4">
                                Book Now
                            </button>
                        </div>
                    </div>
                @endif
                

            </form>

        </div>
    </div>
    <!-- main content section ends here -->
@endsection
